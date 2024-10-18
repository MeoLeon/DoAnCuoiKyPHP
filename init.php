<?php
    $config_servername = "localhost";
    $config_username = "root";
    $config_password = "";
    $config_databasename = "hcmue";

    //Creat connection
    $conn = new mysqli($config_servername, $config_username, $config_password, $config_databasename);
    mysqli_set_charset($conn,"UTF8");
    if ($conn->connect_error) 
    {
        echo "Kết nối thất bại";
    }
    else
    {
        echo "Kết nối thành công";
    }

    $sql = "CREATE TABLE IF NOT EXISTS User(
    user_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    crearted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
    ";
    $result = $conn->query($sql);
    if ($result === TRUE)
    {
        echo "Tạo thành công";
    }
    else
    {
        echo "Bị lỗi fix đi";
    }

    //Tạo bảng userdetail
    $userDetailTableSql="CREATE TABLE IF NOT EXISTS UserDetail(
    detail_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) NOT NULL,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    phone_number VARCHAR(20),
    address VARCHAR(255),
    gender VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES User(user_id) ON DELETE CASCADE
    )";
    $result = $conn->query($userDetailTableSql);
    if ($result === TRUE)
    {
        echo "Tạo thành công";
    }
    else
    {
        echo "Bị lỗi fix đi";
    }
    $conn->close();
?>
