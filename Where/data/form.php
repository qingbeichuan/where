<?php
    if(isset($_REQUEST['code'])){
        session_start();
        if(strtolower($_REQUEST['code'])==strtolower($_SESSION['auto_code'])){
            echo '<font >输入正确</font>';
        }else{
            echo '<font color="#f00">输入错误</font>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="form.php">
        <p><img border="1" id="img" src="yanzhenma.php" alt=""><a href="" id="a">换一个</a></p>
        <p>请输入：<input type="text" name="code"></p>
        <p><input type="submit" value="提交"></p>
    </form>
    <script>
        a.onclick=function(e){
            e.preventDefault();
            img.src="yanzhenma.php"
        }
    </script>
</body>
</html>