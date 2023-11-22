<?php
// Kết nối vào cơ sở dữ liệu, bạn cần cung cấp thông tin của cơ sở dữ liệu ở đây
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ten_database";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$gameName = $_POST['gameName'];
$gameDescription = $_POST['gameDescription'];
$creatorName = $_POST['creatorName'];

// Chuẩn bị truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO games (game_name, game_description, creator_name) VALUES ('$gameName', '$gameDescription', '$creatorName')";

if ($conn->query($sql) === TRUE) {
    echo "Trò chơi đã được tạo thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
