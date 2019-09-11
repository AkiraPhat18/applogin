<?php
/**
 * Khởi tạo session
 */
    session_start();

/**
 * Kiểm tra xem người dùng đăng nhập chưa nếu chưa đăng nhập chuyển về login.php
 */
    if (isset($_SESSION["login"]) || ($_SESSION["login"] != true)){
        header("Location:  login.php");
        exit();
    }
/**
 * Nếu đã đăng nhập thành công
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-md-12">
                <h1>Đăng nhập thành công</h1>
                <p>Tên người dùng : </p>
                <p><a href="logout.php">Đăng xuất</a></p>
            </div>
        </div>
    </div>
</body>
</html>