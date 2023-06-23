<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO_LIST</title>
</head>

<body>
    <h1>TODO LIST</h1>

    <form action="worksattion.php" method="post" enctype="multipart/form-data">
        <label for="taskname">taskName</label>
        <input type="text" name="taskname" id="taskname"><br><br><br>
        <label for="DueDate">DueDate</label>
        <input type="text" name="DueDate" id="DueDate"><br><br><br>
        <select name="completed" id="">
            <option value="1">Yes,task completed</option>
            <option value="0">no,task completed</option>
        </select><br><br><br>

        <!-- <input type="text" name="completed" id="completed"> -->
        <label for="Description">Description</label>
        <textarea name="Description" id="Description" cols="30" rows="10"></textarea><br>
        <input type="submit" name="submit"></input>
    </form>


    <h1>list :</h1>
    <table border="2">
        <tr>
            <th>task Name</th>
            <th>description</th>
            <th>due_date</th>
            <th>completed</th>
            <th>delete/done</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'todo');
        $query = "SELECT `name`,`description`,`due_date`,`completed` FROM `tasks` WHERE `tasks`.`id`=2";
        $res = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($res)) {
            $taskname = $row['name'];
            $DueDate = $row['due_date'];
            $Description = $row['description'];
            $completed = $row['completed'];
        ?>
            <tr>
                <?php
                foreach ($row as $key => $value) {
                    if ($key == "completed") {
                        if ($value == 1) {
                            echo "<td>" . 'done' . "<td>";
                        } else {
                            echo "<td>" . 'not done' . "<td>";
                        }
                    } else {
                        echo "<td>" . $value . "<td>";
                    }
                }
                ?>
               <td><a href="worksattion.php?delete">DELETE</a></td><br><br>
               <td><a href="worksattion.php?done">Done</a></td><br><br>

            </tr>



        <?php } ?>
    </table>




    <?php

    ?>

</body>

</html>