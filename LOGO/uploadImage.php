<?php
    error_reporting(1);
    $con=mysql_connect("localhost","root","");
    mysql_select_ab("image",$con);
    extra($_POST);
    $target_dir = "test_upload/";
    $target_file = $target_dir . basename($_Files["fileToUpload"]["name"]);
    if($upd)
    {
        $video_path=$_FILES['fileToUpload']['name'];
        mysql_query("insert into image(image_name) values('$image_path')");
        move_upload_file($_FILES["fileToUpload"]["tem_name"],$target_file);
        echo "upload";
    }
    if($disp)
    {
        $query=mysql_query("select * from image");
         while($all_video=mysql_fetch_array($query));
    }
    
        ?>
       <image width="300" height="200" controls>
        <source scr="test_upload/<?php echo $all_video['image_name']?>" type="image/jpeg">
       </image>  




      <!-- https://www.phptpoint.com/upload-video-in-php/?utm_content=cmp-true-->This code is taken from this link.
     
        