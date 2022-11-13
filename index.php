<?php include './db.php' ?>
<?php

//prepare an sql query that will select all the data from the database
$sql = "SELECT * FROM todos";         
$query = mysqli_query($conn, $sql); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./index.css">
    <title>Todo</title>
</head>

<body>
    <div class="container">
        <h4>Todo App using PHP </h4>
        <form action="addTodo.php" method="POST">
            <input type="text" name="todo-input" placeholder="add a todo" required>
            <button type="submit" name="submit">
                <i class="bx bx-message-square-add"></i>
            </button>
        </form>
        <div class="Todo-container">
            <!-- the div below render a todo with todo description and actions buttons to delete -->
            <?php
            while ($row = mysqli_fetch_assoc($query)) {

                $id = $row['id'];
                $todo = $row['todo'];
                $status = $row['status'];
            ?>
                <div class="todo">
                    <div class="todo-item <?php  
                            if($status == 'completed'){
                                echo 'completed';
                            }
                    ?>">
                         <?php  echo $todo;?>
                    </div>
                    <!-- delete and check actions -->
                    <div class="actions">
                        <div class="delete">
                            <a href="delete.php?id=<?php echo $id; ?>">
                                <i class="bx bx-trash"></i>
                            </a>
                        </div>
                        <div class="check">
                            <a href="check.php?id=<?php echo $id; ?>">
                                <i class="bx bx-check"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>