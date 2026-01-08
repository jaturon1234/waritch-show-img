<?php
require_once 'config.php';
// ตอนนี้ตัวแปร $conn สามารถนำไปใช้ในโค้ดส่วนนี้ได้แล้ว
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข่าวประชาสัมพันธ์ทั้งหมด</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Sarabun', sans-serif; }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;  
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gray-50">

<?php
// --- ส่วนเชื่อมต่อฐานข้อมูลและตั้งค่า (ปรับตามไฟล์จริงของคุณ) ---
// include 'config.php'; 

// 1. รับค่าการค้นหาและตั้งค่าการแบ่งหน้า
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$items_per_page = 12; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $items_per_page;

// 2. เงื่อนไข SQL สำหรับการค้นหา
$where_clause = "WHERE post_content LIKE '%<img %' AND post_content IS NOT NULL AND post_content != ''";
if ($search != '') {
    $where_clause .= " AND post_title LIKE '%$search%'";
}

// 3. นับจำนวนทั้งหมดเพื่อทำ Pagination
$total_sql = "SELECT COUNT(DISTINCT post_title) as total FROM $tablename $where_clause";
$total_result = $conn->query($total_sql);
$total_rows = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $items_per_page);

// 4. ดึงข้อมูลรายการข่าว
$sql = "
SELECT ID, post_title, post_date, post_content 
FROM $tablename 
$where_clause
GROUP BY post_title 
ORDER BY post_date DESC 
LIMIT $items_per_page OFFSET $offset
";
$result = $conn->query($sql);
?>

<div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        
        <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-12 gap-6 border-b border-gray-200 pb-8">
            <div>
                <nav class="flex text-sm text-gray-500 mb-2">
                    <a href="index.php" class="hover:text-blue-600">หน้าหลัก</a>
                    <span class="mx-2">/</span>
                    <span class="text-blue-600 font-semibold">ข่าวประชาสัมพันธ์</span>
                </nav>
                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">ข่าวประชาสัมพันธ์</h1>
                <p class="text-gray-500 mt-2 text-lg">รายการข่าวสารและกิจกรรมทั้งหมด (พบ <?php echo $total_rows; ?> รายการ)</p>
            </div>

            <form action="" method="GET" class="relative group">
                <input type="text" name="search" placeholder="ค้นหาหัวข้อข่าว..." 
                    value="<?php echo htmlspecialchars($search); ?>"
                    class="w-full md:w-96 pl-5 pr-12 py-3 rounded-2xl border border-gray-200 bg-white focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all shadow-sm">
                <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-blue-500 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $post_content = $row["post_content"];
                    // ดึงเฉพาะ URL รูปแรกที่เจอ
                    if (preg_match('/<img.+?src=["\']([^"\']+\.(?i:jpg|jpeg|png|webp|gif))["\'].*?>/i', $post_content, $img_matches)) {
                        $img_src = $img_matches[1];
                        $post_title = htmlspecialchars($row["post_title"]);
                        $date = date("d M Y", strtotime($row["post_date"]));
                        $post_url = "info_detail.php?id=" . $row["ID"];
            ?>
                <article class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="relative h-52 overflow-hidden">
                        <img src="<?php echo $img_src; ?>" alt="<?php echo $post_title; ?>" 
                             class="w-full h-full object-cover">
                        <!-- <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold text-blue-600 uppercase tracking-widest shadow-sm">
                            News
                        </div> -->
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center text-gray-400 text-xs mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <?php echo $date; ?>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 line-clamp-2 leading-snug mb-6 h-14 hover:text-blue-600 transition-colors">
                            <a href="<?php echo $post_url; ?>"><?php echo $post_title; ?></a>
                        </h3>
                        <div class="mt-auto">
                            <a href="<?php echo $post_url; ?>" 
                               class="flex items-center justify-center w-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-3 px-4 rounded-xl transition-all duration-200 group">
                                อ่านรายละเอียด
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            <?php
                    }
                }
            } else {
                echo '<div class="col-span-full py-20 text-center"><p class="text-gray-400 text-xl italic">ไม่พบรายการที่ค้นหา...</p></div>';
            }
            ?>
        </div>

        <?php if ($total_pages > 1): ?>
        <nav class="mt-16 flex justify-center items-center space-x-2">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page-1; ?>&search=<?php echo urlencode($search); ?>" 
                   class="p-3 rounded-xl bg-white border border-gray-200 text-gray-600 hover:border-blue-500 hover:text-blue-600 transition-all shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            <?php endif; ?>

            <?php
            $range = 1; 
            $show_dots = false;
            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == 1 || $i == $total_pages || ($i >= $page - $range && $i <= $page + $range)) {
                    $show_dots = true;
                    $isActive = ($i == $page);
                    echo '<a href="?page='.$i.'&search='.urlencode($search).'" class="w-12 h-12 flex items-center justify-center rounded-xl border font-bold transition-all '.($isActive ? 'bg-blue-600 border-blue-600 text-white shadow-lg shadow-blue-200' : 'bg-white border-gray-200 text-gray-600 hover:border-blue-500 hover:text-blue-600 shadow-sm').'">'.$i.'</a>';
                } elseif ($show_dots) {
                    echo '<span class="px-2 text-gray-400 font-bold">...</span>';
                    $show_dots = false;
                }
            }
            ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page+1; ?>&search=<?php echo urlencode($search); ?>" 
                   class="p-3 rounded-xl bg-white border border-gray-200 text-gray-600 hover:border-blue-500 hover:text-blue-600 transition-all shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            <?php endif; ?>
        </nav>
        <?php endif; ?>

    </div>
</div>

</body>
</html>