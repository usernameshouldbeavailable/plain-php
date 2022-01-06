<?php

    include_once('db.php');

    $selectQuery = "SELECT * FROM `mytodo` ORDER BY id DESC";

    $todoResult = mysqli_query($mysqli, $selectQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pending TODO</title>
    
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
            <div class="col-lg-12">
                <h1>Your Pending Todo: CRUD Application</h1>
                <?php
                
                    if(isset($_GET['message']))
                    {
                        echo '<div class="' . $_GET['class'] . '">' . $_GET['message'] . '</div>';
                    }
                
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p><a href="insert.php" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Item</a></p>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Task Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        
                        while($todoArray = mysqli_fetch_array($todoResult))
                        {
                            echo '<tr>';
                                echo '<th scope="row">' . $todoArray['id'] . '</th>';
                                echo '<th>' . htmlentities($todoArray['task_name']) . '</th>';
                                if($todoArray['status'] == 2)
                                {
                                    echo '<th class="text-danger">Pending</th>';
                                }
                                else
                                {
                                    echo '<th class="text-success">Completed</th>';
                                }
                                echo '<th><a class="btn btn-dark" href="edit.php?id=' . $todoArray['id'] . '"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></th>';
                                echo '<th><a class="btn btn-danger" href="remove.php?id=' . $todoArray['id'] . '"><i class="fa fa-trash" aria-hidden="true"></i></a></th>';
                            echo '</tr>';
                        }
                    
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>