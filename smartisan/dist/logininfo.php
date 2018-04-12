<?php
    header("content-type:text/html;charset='utf-8'");

    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $con = mysql_connect("localhost", "root", 123456);

    if(!$con){
        echo "error";
        exit;
    }else{
        echo "success";
    }
    //选择数据库
    mysql_select_db("smartisan_user");

    $sql = "SELECT * FROM smartisan_user WHERE phone='$phone' and password='$password';";

    $res = mysql_query($sql);
    if($result = mysql_fetch_arry($res)){
        echo('登陆成功');
    }else{
        exit('登录失败');
    }
    while($row = mysql_fetch_assoc($res)){
        $phone = $row['phone'];
        $password = $row['password'];
    }

?>