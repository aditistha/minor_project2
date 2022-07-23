<!DOCTYPE html>
 <html>
    <head></head>
    <body>
    <?php
        include"../connection.php";
        $sql="SELECT * FROM song LIMIT 0,10";
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_array($result)){
            $file=$row['song'];
    ?>
    <audio controls autoplay><source src="artist/<?=$file; }?>"></audio>
    </body>   
</html>