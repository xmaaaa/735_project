<?php
// 连接数据库
$servername = "localhost";
$username = "root"; // 你的 MySQL 用户名
$password = "123456"; // 你的 MySQL 密码
$dbname = "anygroupllc";

// 创建数据库连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 获取表单数据
$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$delivery_date = $_POST['delivery_date'];
$delivery_method = $_POST['delivery_method'];
$payment_method = $_POST['payment_method'];
$product_category = $_POST['product_category'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// SQL 插入语句
$sql = "INSERT INTO orders (name, address, contact, email, delivery_date, delivery_method, payment_method, product_category, product_name, quantity, price)
VALUES ('$name', '$address', '$contact', '$email', '$delivery_date', '$delivery_method', '$payment_method', '$product_category', '$product_name', '$quantity', '$price')";

// 执行 SQL 语句
if ($conn->query($sql) === TRUE) {
    echo "Order has been placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 关闭数据库连接
$conn->close();
?>
