<?php include ".inc/head.php"; ?>

<?php session_start();
if (!isset($_SESSION['logged'])) {
    header("location: login.php");
    exit();
} ?>


<h1 class="container pb-3 mb-5 text-center mt-5  border-bottom border-dark ">Add Task</h1>

<form class="container" action="worksattion.php" method="post" enctype="multipart/form-data">

    <div class="mb-3 row">
        <label for="taskname" class="col-sm-2 col-form-label" style="font-weight: bold;">Task Name</label>
        <div class="col-sm-10">
            <input  type="text" class="form-control" name="taskname" id="taskname">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="DueDate" class="col-sm-2 col-form-label" style="font-weight: bold;">Due Date</label>
        <div class="col-sm-10">
            <input  type="date" class="form-control" name="DueDate" id="DueDate">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="form-group row">
            <label for="completed" class="col-sm-2 col-form-label">Task Completion Status:</label>
            <div class="col-sm-10">
                <select required class="form-control" name="completed" id="completed">
                    <option value="1">Yes, task completed</option>
                    <option value="0">No, task not completed</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="write description of task  here" name="Description" id="Description"></textarea>
        <label for="Description">Description</label>
    </div>
    <input type="submit" class="btn btn-outline-dark px-5 mt-3 w-100" value="Add Task" name="submit">
</form>

<div class="container mt-5 text-center border bg-dark text-light">
<h1 class="container pb-3 mb-5 text-center mt-5  border-bottom border-dark ">View Task</h1>
    <table class="table mb-4 text-center text-light">
        <thead>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'todo');
            $query = "SELECT `name`,`description`,`due_date`,`completed`,`user_id`,`id` FROM `tasks`";

            $res = mysqli_query($conn, $query);

            ?>
            <tr>
                <?php
                $row = mysqli_fetch_assoc($res);
                foreach ($row as $key => $value) {
                    echo '<th>' . $key . '</th>';
                }
                echo '<th>' . "Delete" . '</th>';
                echo '<th>' . "Done" . '</th>';

                ?>
            </tr>
        </thead>
        <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($res)) {
                    $taskname = $row['name'];
                    $DueDate = $row['due_date'];
                    $Description = $row['description'];
                    $completed = $row['completed'];
                    $id = $row['id'];
                    // print_r($row);
                ?>
            <tr>
                <?php
                    foreach ($row as $key => $value) {
                        if ($key == "completed") {
                            // print_r($value);
                            if ($value == 1) {
                                echo "<td>" . '<button class="btn btn-success">done</button>' . "</td>";
                            } else {
                                echo "<td>" . '<button class="btn btn-danger">Not Done</button>' . "</td>";
                            }
                        } else {
                            echo "<td>" . $value . "</td>";
                        }
                    }
                ?>
                <td><a href="worksattion.php?delete=<?php echo $id; ?>" class="btn btn-danger">DELETE</a></td>
                <td><a href="worksattion.php?done=<?php echo $id; ?>" class="btn btn-success ms-1">Done</a></td>

            </tr>



        <?php } ?>

        </tbody>
    </table>

</div>













<!--<table border="2">

   

</table> -->

<?php include ".inc/foot.php"; ?>