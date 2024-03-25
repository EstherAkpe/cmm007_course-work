<?php
    error_reporting(1);
    $con=mysql_connect("localhost","root","");
    mysql_select_ab("video",$con);
    extra($_POST);
    $target_dir = "test_upload/";
    $target_file = $target_dir . basename($_Files["fileToUpload"]["name"]);
    if($upd)
    {
        $video_path=$_FILES['fileToUpload']['name'];
        mysql_query("insert into video(video_name) values('$video_path')");
        move_upload_file($_FILES["fileToUpload"]["tem_name"],$target_file);
        echo "upload";
    }
    if($disp)
    {
        $query=mysql_query("select * from video");
         while($all_video=mysql_fetch_array($query));
    }
    
        ?>
       <video width="300" height="200" controls>
        <source scr="test_upload/<?php echo $all_video['video_name']?>" type="video/mp4">
       </video>  
     
        
       