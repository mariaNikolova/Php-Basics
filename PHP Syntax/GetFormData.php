<?php
$name ;
$age ;
$sex ;
?>
<!DOCTYPE html>
<html>
<head><title>Get form data</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Name..."><br>
        <input type="number" name="age" placeholder="Age.."><br>
        <input type="radio" name="sex" value="Male">Male<br>
        <input type="radio" name="sex" value="Female">Female<br>
        <input type="submit">
        </form>
</body>
</html>
<?php
if(isset($_GET["name"])){
    echo "My name is: ".htmlentities($_GET["name"]).". I am ".htmlentities($_GET["age"])."years old. I am ".htmlentities($_GET["sex"]) ;
}