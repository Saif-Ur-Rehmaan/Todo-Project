<pre>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'todo');
if (isset($_POST["submit"])) {
    print_r($_POST);
    $taskname = $_POST['taskname'];
    $DueDate = $_POST['DueDate'];
    $Description = $_POST['Description'];
    $submit = $_POST['submit'];
    $completed=$_POST['completed'];

    global $conn;
    
    $query = "INSERT INTO `tasks` (`user_id`, `name`, `description`, `due_date`, `completed`) VALUES ('1','$taskname','$Description','$DueDate','$completed'  )";

    if (mysqli_query($conn,$query)) {
        header("location: index.php");
        exit();
    }

}
if (isset($_GET['done'])) {
    global $conn;
    mysqli_query($conn,"UPDATE `tasks` SET `completed` = '1' WHERE `tasks`.`id` = 2");

    if (mysqli_query($conn,$query)) {
        header("location: index.php");
        exit();
    }
}
if (isset($_GET['delete'])) {
    global $conn;
    // mysqli_query($conn,"UPDATE `tasks` SET `completed` = '1' WHERE `tasks`.`id` = 2");
    mysqli_query($conn,"DELETE FROM users WHERE `users`.`id` = 1");

    if (mysqli_query($conn,$query)) {
        header("location: index.php");
        exit();
    }
}
?>
</pre>