<?php
    $id = $_GET['id'];
    $connection = new mysqli('localhost','root','','result_db');
    $select_query = "SELECT * FROM result WHERE id = '$id'";
    $result = $connection->query($select_query);
    if(isset($_POST['update'])=='update'){
        $studentId = $_POST['studentId'];
        $name = $_POST['name'];
        $english = $_POST['english'];
        $math = $_POST['math'];
        $physics = $_POST['physics'];
        $history = $_POST['history'];
        $art = $_POST['art'];
        $highest = $_POST['highest'];
        $lowest = $_POST['lowest'];
        $total = $_POST['total'];
        $average = $_POST['average'];
        $grades = $_POST['grades'];
        $rank = $_POST['rank'];
        $update_query = "UPDATE result SET Student_ID='$studentId', Name='$name', English='$english', Math='$math', Physics='$physics', History='$history', Art='$art', Highest='$highest', Lowest='$lowest', Total='$total', Average='$average', Grades='$grades', Rank='$rank' WHERE id='$id';";
        $connection->query($update_query);
        header("Location:read.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        while($row = $result->fetch_assoc()){
    ?> 
    <form  method="post">
    <label for="studentId">Student ID</label>
        <input type="text" name="studentId" id="studentId"><br><br>

        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br><br>

        <label for="english">English</label>
        <input type="text" name="english" id="english"><br><br>

        <label for="math">Math</label>
        <input type="text" name="math" id="math"><br><br>

        <label for="physics">Physics</label>
        <input type="text" name="physics" id="physics"><br><br>

        <label for="history">History</label>
        <input type="text" name="history" id="history"><br><br>

        <label for="art">Art</label>
        <input type="text" name="art" id="art"><br><br>

        <label for="highest">Highest</label>
        <input type="text" name="highest" id="highest"><br><br>

        <label for="lowest">Lowest</label>
        <input type="text" name="lowest" id="lowest"><br><br>

        <label for="total">Total</label>
        <input type="text" name="total" id="total"><br><br>

        <label for="average">Average</label>
        <input type="text" name="average" id="average"><br><br>

        <label for="grades">Grades</label>
        <input type="text" name="grades" id="grades"><br><br>

        <label for="rank">Rank</label>
        <input type="text" name="rank" id="rank"><br><br>

        <button type="submit" name="update" id="update">Update</button>
    </form>
    <?php
        }
    ?>
</body>
</html>