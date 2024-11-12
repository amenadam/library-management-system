<html>
 <body>
    <?php
	$dir = "..../images/";
	
    $images = glob($dir . "*.png");

    foreach ($images as $image) 
	{
    echo "<img src='$image' >";
    }
    ?>
</body>
</html>