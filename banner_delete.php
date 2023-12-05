​<?php
include "configDB/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM banner_section WHERE id ='$id'";
     $result = $conn->query($sql);
     header('Location: banner_show_section.php');
    //  if ($result == TRUE) {
    //     echo "Record deleted successfully.";
    //     header('Location: banner_show_section.php');
    // }else{
    //     echo "Error:" . $sql . "<br>" . $conn->error;
    // }
}
?>
