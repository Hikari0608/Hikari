<?php

    header("Content-Type: text/html; charset=utf8");

    include('connect.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    //echo $username;

    if ($username && $password){//如果用户名和密码都不为空
        $sql = "select * from user where username = '$username' and password='$password'";
        $result = $conn->query($sql);
        $rows=$result->num_rows;

        if($rows){//0 false 1 true
            header("refresh:0;url=./120/");//如果成功跳转至welcome.html页面
            #exit;
        }else{
            //echo "用户名或密码错误";
            echo "<script>alert('用户名或密码错误！')</script>";
            echo "
                    <script>
                            setTimeout(function(){window.location.href='./';},1000);
                    </script>
                ";//如果错误使用js 1秒后跳转到登录页面重试;
        }
    }
    else{
            echo "<script>alert('未填写用户名或密码！')</script>";
            echo "
                    <script>
                            setTimeout(function(){window.location.href='./';},1000);
                    </script>
                 "; 
    }
    //释放结果集
    //$result->free();
?>
