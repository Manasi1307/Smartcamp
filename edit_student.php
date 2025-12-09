<?php
include 'dbconnect.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM students WHERE id=$id")
);

if (isset($_POST['update_student'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];
    mysqli_query($conn,
        "UPDATE students SET 
         studname='$name', 
         email='$email', 
         class='$class',
         roll_no='$rollno' 
         WHERE id=$id");

    header("Location: students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="students.css">
</head>
<body>

<div class="admin-student-form-box">
    <h2>Edit Student</h2>

    <form method="POST">
        <input type="text" name="name" value="<?= $data['studname'] ?>" required>
        <input type="email" name="email" value="<?= $data['email'] ?>" required>
        <input type="text" name="class" value="<?= $data['class'] ?>" required>
        <input type="text" name="rollno" value="<?= $data['roll_no'] ?>" required>

        <button type="submit" name="update_student">Update</button>
    </form>
</div>

</body>
</html>
