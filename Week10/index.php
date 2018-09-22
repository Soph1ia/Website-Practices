<html>
<head> <title> Assignment 8, Week 9</title>
    </head>
<body>
    
    <form method="post" action="index.php" >
    <textarea name = "input"></textarea> 
    <input type="submit">
    </form>
    
    <?php 
    if ( isset ($_POST['input'])) {
    $text = $_POST['input'];
    $textlen= count($text);
    
    for ($i =0; $i < $textlen; $i++) {
        echo $text ."<br>";
    }
    }

?>
    </body>
</html>
