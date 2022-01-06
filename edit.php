<?php

    include_once('db.php');

    $taskId = $_GET['id']; // getting this from the url

    $selectQuery = "SELECT * FROM mytodo WHERE id = {$taskId}";

    $todoResult = mysqli_query($mysqli, $selectQuery);

    // fetching just one single row
    $todoArray = mysqli_fetch_array($todoResult);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .container{
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h3>Edit task</h3>
                <form action="update_item.php" method="post">
                    <div class="form-group">
                        <label for="">Task Name</label>
                        <input type="text" name="task_name" class="form-control" value="<?php echo $todoArray['task_name'];?>"/>
                    </div>
                    <div class="form-group">
                        <label for="">Change status</label>
                        <select name="status" class="form-control">
                            <option value="2" <?php echo $todoArray['status'] == 2 ? 'selected' : '';?>>Pending</option>
                            <option value="1" <?php echo $todoArray['status'] == 1 ? 'selected' : '';?>>Complete</option>
                        </select>
                    </div>
                    <input type="hidden" name="task_id" value="<?php echo $todoArray['id'];?>">
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Update Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>