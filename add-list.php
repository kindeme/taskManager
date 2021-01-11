<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager with PHP Mysql</title>
</head>
<body>
    <h1> TASK MANAGER</h1>
<a href="index.php">Home</a>
<a href="manage-list.php">Manage lists</a>
<h3>Add list Page</h3>

<!-- form start -->
<form action="" method="post">
<table>
<tr>
    <td> List Name :</td>
    <td> <input type="text" name="list_name" placeholder="Type list name here" /> </td>
</tr>
<tr>
    <td> List Description :</td>
    <td> <textarea name="list_description" placeholder="Type list Description here"><textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Save"/></td>
</tr>
</table>
</form>
<!-- form end -->
</body>
</html>