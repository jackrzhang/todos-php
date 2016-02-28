<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple to-do list application.">
    <meta name="author" content="jackrzhang">

    <title>To-Do List</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="task-list">
        <h4>To-Do List</h4>

        <ul>
            <?php 
            require_once('../core/ToDoList.php');
            require_once('../core/DB.php');
            $tasks = new ToDoList();
            $tasks->display_all_tasks();
            ?>
        </ul>

        <form class="add-new-task" autocomplete="off">
            <input type="text" class="new-task-input" name="new-task" placeholder="Add a new task by pressing enter." />
        </form>
    </div>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Application Javascript -->
    <script src="js/app.js"></script>
</body>

</html>