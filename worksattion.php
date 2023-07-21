<pre>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'todo');
if (isset($_POST["submit"])) {
    print_r($_POST);
    $taskname = $_POST['taskname'];
    $DueDate = $_POST['DueDate'];
    $Description = $_POST['Description'];
    $submit = $_POST['submit'];
    // $completed=$_POST['completed'];

    global $conn;

    $query = "INSERT INTO `tasks` (`user_id`, `name`, `description`, `due_date`, `completed`) VALUES ('1','$taskname','$Description','$DueDate','0'  )";

    if (mysqli_query($conn, $query)) {
        header("location: index.php");
        exit();
    }
}
if (isset($_GET['done'])) {

    global $conn;
    $task_id = $_GET["done"];


    if (mysqli_query($conn, "UPDATE `tasks` SET `completed` = '1' WHERE `tasks`.`id` = $task_id")) {
        header("location: index.php");
        exit();
    }
}
if (isset($_GET['delete'])) {
    $id = $_GET["delete"];
    global $conn;
    // mysqli_query($conn,"UPDATE `tasks` SET `completed` = '1' WHERE `tasks`.`id` = 2");


    if (mysqli_query($conn, "DELETE FROM tasks WHERE `tasks`.`id` = $id")) {
        header("location: index.php");
        exit();
    }
}






if (isset($_POST["login"])) {
    global $conn;
    $res = mysqli_query($conn, "SELECT * from `users` where `id`=1");
    $row = mysqli_fetch_assoc($res);
    print_r($_POST);
    print_r($row);
    if ($row["username"] == $_POST['username'] &&  $row["password"] == $_POST['password']) {
        session_start();
        $_SESSION['logged'] = true;
        header("location: index.php");
        exit();
    } else {
        echo "not logged";
        header("location: login.php");
        exit();
    }
}

if (isset($_GET["logout"])) {
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php");
}



?>
</pre>