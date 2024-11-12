<html>
    <script>
        window.print();
    
    </script>
    <link rel="icon" href="assets/SOSHGSLOGO.png" type="image/x-icon">
 <body>
    <?php
	$dir = "images/";
	
    $images = glob($dir . "*.png");

    foreach ($images as $image) 
	{
    echo "<img src='$image' >";
    }
    ?>
</body>
</html>