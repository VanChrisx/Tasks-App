<?php 

include("db.php");

if (isset($_POST['save_task'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $query = "INSERT INTO task(title, description) VALUES ('$title','$description')";
    $result = mysqli_query($conn, $query);    
    if(!$result){
        die("Query Failed" . mysqli_error($conn));
    }

    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>