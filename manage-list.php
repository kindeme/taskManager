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
    
    <!-- Table to display lists -->
    <a href="<?php echo SITEURL; ?>"> add list</a>
    <div class='all-lists'>
    <table>
            <tr>
                    <th> S.N</th>
                    <th> List Name</th>
                    <th> Actions</th>
            </tr>
            <tr>
                <td> 1.</td>
                <td>To Do </td>
                <td>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
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