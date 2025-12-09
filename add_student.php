<?php
include 'dbconnect.php';

if (isset($_POST['add_student'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];

    $query = "INSERT INTO students 
              (studname, email, class, roll_no) 
              VALUES ('$name', '$email', '$class', '$rollno')";

    mysqli_query($conn, $query);
    header("Location: students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="students.css">
</head>
<body>

<div class="admin-student-form-box">
    <h2>Add Student</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Student Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="class" placeholder="Class" required>
        <input type="number" name="rollno" placeholder="Rollno" required>
        <button type="submit" name="add_student">Save Student</button>
    </form>
</div>

</body>
</html>
