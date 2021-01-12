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
    <h4>Manage lists page</h4> 
    <p> 
<?php 
 // check wheter the session is created or not
 if(isset($_SESSION['add']))
 {
     echo $_SESSION['add'];
     //remove the message after displaying once
    unset($_SESSION['add']);
 }
?>
    <!-- Table to display lists -->
    <a href="add-list.php"> add list</a>
    <div class='all-lists'>
    <table>
            <tr>
                    <th> S.N</th>
                    <th> List Name</th>
                    <th> Actions</th>
            </tr>
<?php
//Connect the database
$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());

//select database
$db_select = mysqli_select_db($conn,DB_NAME);

// sql query to display all database
$sql = "SELECT * FROM tbl_lists";

//execute the query
$res = mysqli_query($conn, $sql);
 if($res){
  // count the number of row in database
     $count_rows = mysqli_num_rows($res);
     // create a serial number
     $sn = 1;
     //check wheter there is data in database
     if($count_rows >0){
 // display data in the table
 while($rows = mysqli_fetch_assoc($res))
 {
     //Getting the data from database
     $list_id =$rows['list_id'];
     $list_name = $rows['list_name'];
     ?>
        <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $list_name ;?></td>
                <td>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
     <?php
     
 }
     }else{
         //No data in database
         ?>
         <tr> 
         <td colspan ="3">  List not added yet.</td>
         </tr>
         <?php
     }
 }

?>

            
             <tr>
                <td> 2.</td>
                <td>Doing</td>
                <td>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
    </table>
    </div>
    <!-- Table to display lists end -->
</body>
</html>