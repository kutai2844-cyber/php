<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đồ án PHP Fullstack</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h1>Xin chào! Website đã được Deploy tự động 🚀</h1>
        <p>Thời gian server: <?php echo date('H:i:s d/m/Y'); ?></p>
        <hr>
        <h3>Kết nối Database:</h3>
        <?php
        // Nhúng file kết nối CSDL
        include 'db_connect.php';
        ?>
    </div>
</body>
</html>