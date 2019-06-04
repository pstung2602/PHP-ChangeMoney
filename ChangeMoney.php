<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        input[type=number] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        select {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }
    </style>
</head>
<body>
<br/>
<h3>Change Money</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    USD<input type="number" name="search1" placeholder="Nhập tien"/><br>
    <input type = "submit" id = "submit" value = "Change"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $USD=$_POST['search1'];
    $rate=23000;
    echo $USD."USD = ".number_format($USD*$rate)."VND";

}
?>
</body>
</html>