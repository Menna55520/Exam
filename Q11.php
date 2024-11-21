<?php 
if(isset($_POST['submit'])){
    setcookie("background" , $_POST['bg-color'] , time()+7*24*60*60); // week 
    header("location:Q11.php"); // refresh
    exit();
}
if(isset($_COOKIE['background'])){
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
}
?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="color" name="bg-color" id="">
    <button type="submit" name = 'submit'>Submit</button>
</form>


