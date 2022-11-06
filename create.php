<?php
    $connection = new mysqli('localhost','root','','result_db');
    
    if(isset($_POST['save'])=='save'){
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
        $insert_query = "INSERT INTO result(Student_ID, Name, English, Math, Physics, History, Art, Highest, Lowest, Total, Average, Grades, Rank) VALUES('$studentId', '$name', '$english', '$math', '$physics', '$history', '$art', '$highest', '$lowest', '$total', '$average', '$grades', '$rank')";
        $connection->query($insert_query);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
</head>
<body>
    <style>
        .form-div{
            font-size: 20px;
            width: 450px;
            margin: 0 auto;
            background-color: black;
            color: #fff;
            padding: 20px;
        }
        input{
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
            padding: 5px;
            margin-top: 5px;
            background-color: #3e3e3e;
            color: #fff;
            font-size: 20px;

        }
    </style>
        <button><a href="read.php">Read</a></button>
        <button><a href="create.php">Insert</a></button>
    <hr>
    <div class="form-div">
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

            <button style="width: 100%; padding: 10px; background-color: green; color: #fff; font-size: 20px" type="submit" name="save" id="save">Save</button>
            </form>
    </div>
</body>
</html>