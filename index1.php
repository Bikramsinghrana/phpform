<?php
    // Database configuration
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "formdata";

    // Create a connection
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // CRUD operations
    
    if (isset($_POST['login'])) {
        $emp_name = $_POST['emp_name']; 
        $dept_id = $_POST['dept_id'];
        $email = $_POST['email_id'];
        $DOB = $_POST['dob'];
        $salary = $_POST['salary'];
        $number = $_POST['mobile_num'];


        $sql = "INSERT INTO employee( emp_name, dept,email, dob, salary, mobile_num)
                    VALUES ( '$emp_name', '$dept_id','$email',  '$DOB', '$salary', '$number')";
        $result = mysqli_query($conn,$sql);            
        if($result){
                echo " successfully adda" ;
                header("Location: /phpprogram/Task/appi.html");
            } 
         
        else {
                echo "<p>Error adding employee: " . $conn->error . "</p>";       
        }
    
    }
       
?>