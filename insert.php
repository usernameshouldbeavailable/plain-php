<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
    
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
                <h3>Add new Task</h3>
                <form action="save_task_to_db.php" method="post">
                    <div class="form-group">
                        <label for="">Task Name</label>
                        <input type="text" name="task_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Item</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</body>
</html>