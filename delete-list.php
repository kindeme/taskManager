<?php
// Include constants.php
include('config/constants.php');

// connect the database
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

// Check whether the list_id is assigned or not
if(isset($_GET['list_id'])){
    // Delete the List from database

    //Get the list_id value from URL or GET method
    $listId = $_GET['list_id'];

    //Connect the database

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD) or die(mysqli_error());

    // select database
    $sb_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

    //Write the query to delete list from database

    $sql = "DELETE FROM tbl_lists WHERE list_id= $listId ";

    //Execute the query
    $res = mysqli_query($conn,$sql);

    //Check whether the query executed successfully or not
    if($res){

        // Query executed successfully and deleted list_id

        $_SESSION['delete'] = "List Deleted Successfully";

        //Redirection to manage list page
        header('location:'.SITEURL.'manage-list.php');

    }else{

        //Failed to manage List
        $_SESSION['delete_fail'] = "Failed to Delete list";
        header("location".SITEURL."manage-list.php");
    }

}else{
    // Redirect to Manage List Page
    header('location :'.SITEURL.'manage-list.php');

//select database




?>