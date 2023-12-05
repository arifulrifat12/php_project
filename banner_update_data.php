<?php
    include "configDB/config.php";
?> 

<?php
    if (isset($_REQUEST['update'])) {
       $title = $_REQUEST['title'];
       $tag = $_REQUEST['tag'];
       $update_query = "UPDATE banner_section SET title= '$title', tag= '$tag' ";

       $final_update_query = mysqli_query($conn,$update_query);

       if ( $final_update_query) {
        header('location:banner_show_section.php?updated'); 
       }
    }


?>
