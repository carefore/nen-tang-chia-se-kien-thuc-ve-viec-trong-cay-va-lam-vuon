<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "ten_cua_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy thông tin từ form
$author = $_POST['author'];
$topic = $_POST['topic'];
$content = $_POST['content'];

// Chuẩn bị truy vấn SQL để chèn thông tin vào cơ sở dữ liệu
$sql = "INSERT INTO knowledge (author, topic, content) VALUES ('$author', '$topic', '$content')";

// Thực thi truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Thông tin đã được lưu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
