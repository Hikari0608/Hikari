<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="get">
        <input type="text" class="txtb" placeholder="Search" name="Search">
    </form>
<div class="top-box">
        <table>
        <colgroup>
                <col width="180">
                <col width="180">
                <col width="180">
                <col width="180">
        </colgroup>
                <tbody>
                        <tr>
                <td>
                    <input class="check" type="checkbox" value="1" />
                </td>
                                <td>
                                        <div>用户名</div>
                                </td>
                                <td>
                                        <div>密码</div>
                                </td>
                                <td>
                                        <div>注册时间</div>
                                </td>
                                <td>
                                        <div>操作</div>
                                </td>
                        </tr>
                    
                        <?php
                            include('../../connect.php');
                            $user=$_GET['Search'];	
                            if($user==""){
                                $sql="select * from user;";
                            }
                            else{
                                $sql="select * from user where username='$user';";
                            }
                            $result=$conn->query($sql);
                            while ($row=$result->fetch_assoc())
                            {
                                echo '<tr>';
                                echo '                            
                                <td>
                                    <input class="check" type="checkbox"/>
                                </td>';
                                foreach($row as $value) echo "<td><div>$value</div></td>";
                                echo '
                                <td>
                                        <div>
                                            <button type="button" class="change"><i class="icon-file"></i></button>
                                            <button type="button" class="del"><i class="icon-trash"></i></button>
                                        </div>
                                </td>';
                                echo '</tr>';
                            }
                        ?>    
                </tbody>
        </table>
    </div>
    <script src="120.js"></script>
</body>
</html>
