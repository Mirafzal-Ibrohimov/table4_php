<?
    include 'bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>update</td>
            <td>delete</td>
            <td>eddit</td>
            <td>add</td>
        </tr> 
        <?
        $select = mysqli_query($bd, "SELECT * FROM `admin`");
        $lang = mysqli_fetch_assoc($select);
        do{?>
        <tr>
            <td><?=$lang['id']?></td>
            <td><?=$lang['title']?></td>
            <td><a href="">update</a></td>
            <td><a href="">delete</a></td>
            <td><a href="">eddit</a></td>
            <td><a href="add.php">add</a></td>
        </tr>
        <?}while($lang = mysqli_fetch_assoc($select));?>
        
    </table>
</body>
</html>