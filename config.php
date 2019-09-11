<?php
/**
 * Khai báo hằng số kết nối csdl
 */
define("DB_SERVER","localhost");
define("DB_SERVER_USERNAME","root");
define("DB_SERVER_PASSWORD","");
define("DB_SERVER_NAME","demoapplogin");

$conn = mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_SERVER_NAME);
/**
 * Kiểm tra xem kết nối đến cơ sở dữ liệu có thành công ko
 * Nếu ko thành công thì ngắt chương trình bằng câu lệnh die()
 */
if ($conn == false) {
    die("Ko thể kết nối đến csdl ".mysqli_connect_error());
}