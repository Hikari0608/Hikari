<?php

    header("Content-Type: text/html; charset=utf8");

    include('../connect.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    //echo $username;

    if ($username && $password && $password1){//如果用户名和密码都不为空
        if ($password == $password1){
            $sql = "select * from user where username = '$username';";
            $result = $conn->query($sql);
            $cnt = $result->num_rows;
            if($cnt==0){
                $sql1 = "insert into user(username,password) VALUES('$username','$password');";
                $result = $conn->query($sql1);
                header("refresh:0;url=../");

            }
            else{
                echo "<script>alert('用户名已被注册！')</script>";
                echo "
                        <script>
                                setTimeout(function(){window.location.href='./';},1000);
                        </script>
                    ";//如果错误使用js 1秒后跳转到登录页面重试;
            }
        }
        else{
            echo "<script>alert('密码不一致！')</script>";
            echo "
                    <script>
                            setTimeout(function(){window.location.href='./';},1000);
                    </script>
                ";//如果错误使用js 1秒后跳转到登录页面重试;
        }
    }
    else{
        echo "<script>alert('请填写账号密码！')</script>";
        echo "
                <script>
                        setTimeout(function(){window.location.href='./';},1000);
                </script>
            ";//如果错误使用js 1秒后跳转到登录页面重试;
    }
    //释放结果集
    //$result->free();
?>
~      
