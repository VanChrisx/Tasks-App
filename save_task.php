<?php 

include("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO tasks(title, description) VALUES ('$title','$description')";
    $result = mysqli_query($conn, $query);    
    if(!$result){
        die("Query Failed" . mysqli_error($conn));
    }

    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>