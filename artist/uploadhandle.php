<?php
SESSION_start();
$artist_id=$_SESSION['artist_id'];

    if(isset($_POST['Submit']) && $_POST['Submit']==="Upload" ){
       
        $dir='uploads/';
        $audio_path=$dir.basename($_FILES['audio']['name']);
        if(move_uploaded_file($_FILES['audio']['tmp_name'],$audio_path))
        {
            upload($audio_path);
        }
}
function upload($name){
    include"../connection.php";
    $title=$_POST['title'];
    $sql="INSERT INTO song values(1,1,1,1,'$title',45,'{$name}')";
    mysqli_query($conn,$sql);
    header("loaction:upload.php");
   
}
?>