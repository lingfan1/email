<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><a href="get.php?data=123">单击超链接,观察地址栏变化</a></p>
    <?php
    if(isset($_GET['data'])){
        $data=$_GET['data'];
        echo "超链接提交的数据是：$data";
    }
    ?>
</body>
</html>