<!DOCTYPE html>
   <html>
<head>
    <title>Print Tags </title>
</head>
<head>
    <form action="" method="get">
        <p>Enter tags:</p>
        <input type="text" name="tags">
        <input type="submit">
    </form>
</head>
</html>
<?php
if(isset($_GET['tags'])){
   $tags = (explode(',',$_GET['tags'])) ;
    foreach($tags as $key=>$value){
        echo $key.":".$value."</br>" ;
    }
}
?>