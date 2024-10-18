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

    $sql = "INSERT INTO User (username, email, password)
    VALUES ('meoltn', 'meo@edu.vn', 'abc123')";
    $result = $conn->query($sql);
    if ($result=== TRUE)
    {
        echo "Thêm dữ liệu thành công";
    }
    else
    {
        echo "Bị lỗi fix đi";
    }
?>