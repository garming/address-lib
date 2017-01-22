<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2017/1/22
 * Time: 9:45
 */
if(isset($_POST['json']) && !empty($_POST['json'])){
    $data = json_encode(json_decode($_POST['json'],1));
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    error_log($data,3,"addr_3_001.json");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>data</title>
    <meta charset="utf-8">
    <script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="addr_3_001.js"></script>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="json" id="json" value=""/>
    <button id="submit" type="submit">转换</button>
</form>
<script type="text/javascript">
    var data = JSON.stringify(tdist);
    $("#json").val(data);
</script>
</body>
</html>
