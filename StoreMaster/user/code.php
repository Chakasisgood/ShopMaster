<?php
session_start();
require 'dbcon.php'; // connection to database

if(isset($_POST['delete_student'])) //check if the delete button is click
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);//variable that holdsthe id of the student

    $query = "DELETE FROM users WHERE id='$student_id' ";//querythat delete the data by id 
    $query_run = mysqli_query($con, $query);//variable to run the query above

    if($query_run) //check if the query is true 
    {
        $_SESSION['message'] = "Student Deleted Successfully"; // output send to message.php
        header("Location: index.php"); //redirect to index.php when the query is done
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";// outputwhen the query is false 
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))//check if the update button is click
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);//variablethat holds te id of the student

    $username = mysqli_real_escape_string($con, $_POST['username']); //variable that holds the datas of the student that is updated or edited
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $role = mysqli_real_escape_string($con, $_POST['role']);

    $query = "UPDATE users SET username='$username', email='$email', conatct='$contact', role='$role' WHERE id='$student_id' "; // queryto update the data by id
    $query_run = mysqli_query($con, $query);//variable that run the query 

    if($query_run)// check if the query is true
    {
        $_SESSION['message'] = "Student Updated Successfully"; // output send to message.php
        header("Location: index.php");//redirect to index.php when the query is done
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated "; // output when the query is false
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['save_student']))//check if the update button is click
{
    $username = mysqli_real_escape_string($con, $_POST['username']); //variable of the data
    $email = mysqli_real_escape_string($con, $_POST['email']);//variable of the data
    $contact = mysqli_real_escape_string($con, $_POST['contact']);//variable of the data
    $role = mysqli_real_escape_string($con, $_POST['role']);//variable of the data

    $query = "INSERT INTO users (username,email,contact,role) VALUES ('$username', '$email', '$contact', '$role')"; //query to insert data to database

    $query_run = mysqli_query($con, $query); //variable that run the query above
    if($query_run)//check if the query is true
    {
        $_SESSION['message'] = "Student Created Successfully"; // output send to message.php
        header("Location: student-create.php");//redirect to index.php when the query is done
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created "; // output when the query is false
        header("Location: index.php");
        header("Location; student-create.php");
        exit(0);
    }
}