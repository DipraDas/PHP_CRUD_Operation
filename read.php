<?php
    $connection = new mysqli('localhost','root','','result_db');
    $select_query = "SELECT * FROM result";
    $result = $connection->query($select_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body> 
    <style>
        tr{
            background-color: #f2f0ff;
        }
        td{
            padding: 13px;
        }
    </style>
        <button><a href="read.php">Read</a></button>
        <button><a href="create.php">Insert</a></button>
    <hr>
    <table style="border-collapse: collapse; margin: 0 auto; margin-top: 20px" border="1">
        <tr>
            <td>Student ID</td>
            <td>Name</td>
            <td>English</td>
            <td>Math</td>
            <td>Physics</td>
            <td>History</td>
            <td>Art</td>
            <td>Highest</td>
            <td>Lowest</td>
            <td>Total</td>
            <td>Average</td>
            <td>Grades</td>
            <td>Rank</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
            while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['Student_ID'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['English'];?></td>
                <td><?php echo $row['Math'];?></td>
                <td><?php echo $row['Physics'];?></td>
                <td><?php echo $row['History'];?></td>
                <td><?php echo $row['Art'];?></td>
                <td><?php echo $row['Highest'];?></td>
                <td><?php echo $row['Lowest'];?></td>
                <td><?php echo $row['Total'];?></td>
                <td><?php echo $row['Average'];?></td>
                <td><?php echo $row['Grades'];?></td>
                <td><?php echo $row['Rank'];?></td>
                <td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>