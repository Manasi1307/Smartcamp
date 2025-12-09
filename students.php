<?php
include 'dbConnect.php';


// Search
$search = $_GET['search'] ?? '';

$query = "SELECT * FROM students 
          WHERE studname LIKE '%$search%' 
          ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin | Students</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'adminSidebar.php'; ?>

<div class=" admin-content admin-student-container">

    <h2 class="admin-student-title">Students</h2>

    <div class="admin-student-top">
        <form method="GET">
            <input type="text" name="search" class="admin-student-search"
                   placeholder="Search student..." value="<?= $search ?>">
        </form>

        <a href="add_student.php" class="admin-student-add-btn">
            + Add Student
        </a>
    </div>

    <table class="admin-student-table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Class</th>
            <th>RollNo</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['studname'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['class'] ?></td>
            <td><?= $row['roll_no'] ?></td>
            <td>
                <a href="edit_student.php?id=<?= $row['id'] ?>" class="admin-student-edit">Edit</a>
                <a href="delete_student.php?id=<?= $row['id'] ?>" 
                   class="admin-student-delete"
                   onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
