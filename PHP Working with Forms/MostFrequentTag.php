<!DOCTYPE html>
<html>
<head>
    <title>Print Tags </title>
</head>
<body>
    <form action="" method="get">
        <p>Enter tags:</p>
        <input type="text" name="tags">
        <input type="submit">
    </form>
</body>
</html>
<?php
error_reporting(0);

$myExample = (explode(',',$_GET['tags']));
$wordsCount = array();
if(isset($_GET['tags'])){
for($i = 0 ; $i < sizeof($myExample) ; $i++)
{
    $wordsCount[$myExample[$i]]++;
}
$finalValue = 0;
$finalIndex = 0;
foreach($wordsCount as $key => $value)
{
    echo $key." -> ".$value."times"."<br>";
    if($finalValue < $value)
    {
        $finalValue = $value;
        $finalIndex = $key;
    }
}
}
 echo "<br>" ;
echo "Max frequency: ".$finalIndex." ---> ".$finalValue."times";
