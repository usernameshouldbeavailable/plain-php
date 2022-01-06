<?php

    include_once('db.php');

    $taskId = $_GET['id']; // getting this from the url

    $selectQuery = "DELETE FROM mytodo WHERE id = {$taskId}";

    $todoResult = mysqli_query($mysqli, $selectQuery);

    $message = 'Item removed from your todo!';

    header('Location: index.php?message=' . urlencode($message) . '&class=alert alert-success');
    
    exit;

?>