<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Task Manager with PHP Mysql</title>
</head>
<body>
<a href="index.php">Home</a>
    <h1>MANAGE LISTs PAGE</h1>
    
    <!-- Table to display lists -->
    <div class='all-lists'>
    <a href="add-list.php"> add list</a>
   
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