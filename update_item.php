<?php

    include_once('db.php');

    $task_name = $_POST['task_name'];

    $task_status = $_POST['status'];

    $task_id = $_POST['task_id'];

    $updateQuery = "UPDATE mytodo SET task_name = '{$task_name}', status = {$task_status} WHERE id = {$task_id}";

    mysqli_query($mysqli, $updateQuery);

    $message = "Your task <strong>{$task_name}</strong> updated successfully!";

    header('Location: index.php?message=' . urlencode($message) . '&class=alert alert-success');
    
    exit;

?>