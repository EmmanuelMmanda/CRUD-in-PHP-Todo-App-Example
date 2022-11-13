<!-- import database connection   -->
<?php  include './db.php'; ?>

<?php
    //check if data has been submitted from the form
if (isset($_POST['submit'])) {

    //get todo data from form if submitted  
    $inputData = mysqli_real_escape_string($conn, $_POST['todo-input']);

    // create a query to insert todo to database
    $sql = "INSERT INTO todos SET todo = '$inputData'";
    $query = mysqli_query($conn,$sql);

    // check id data was succesfully inserted
    if($query){
        echo 'Todo added succesfully ';
        header("location: ./?success");

        // to see the added todo
        echo $inputData;  
    }
     
}
?>