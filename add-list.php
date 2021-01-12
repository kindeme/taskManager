<?php
include('config/constants.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager with PHP Mysql</title>
</head>
<body>
    <h1> TASK MANAGER</h1>
<a href="<?php echo SITEURL; ?>">Home</a>
<a href="<?php echo SITEURL; ?>">Manage lists</a>
<h3>Add list Page</h3>
<p> 

<?php 
 // check wheter the session is created or not
 if(isset($_SESSION['add_fail']))
 {
     echo $_SESSION['add_fail'];
     //remove the message after displaying once
     unset($_SESSION['add_fail']);
 }
?>

<p>
<!-- form start -->
<form action="" method="post">
<table>
<tr>
    <td> List Name :</td>
    <td> <input type="text" name="list_name" placeholder="Type list name here" /> </td>
</tr>
        <tr>
            <td> List Description :</td>
            <td> <textarea name="list_description" placeholder="Type list Description here"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Save" /></td>
        </tr>
    </table>
</form>
<!-- form end -->
</body>
</html>
<?php

// check wheter the form is submitted
if(isset($_POST['submit'])){

    $list_name = $_POST['list_name'];
    $list_description = $_POST['list_description'];

// connect the database 
$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());

//check database connection
// if($conn){
// echo "database";
// }
//select database
$db_select = mysqli_select_db($conn, DB_NAME);

$sql= "INSERT INTO tbl_lists SET 
list_name ='$list_name',
list_description = '$list_description' ";

$res = mysqli_query($conn, $sql);

if($res){
    // echo "data Inserted";
    // redirect 
    //Create session variable to display message
    $_SESSION['add'] = "list added succesfully";

    header('location:'.SITEURL.'manage-list.php');
    



}else{
    // echo"Failed to insert data";
     //Create session variable to display message
    $_SESSION['add_fail'] = "Failed to Add List";
    header('location:'.SITEURL.'add-list.php');
}
}

?>
