<style>
/* ===== SIDEBAR ===== */
.sidebar-container {
    width: 245px;
    height: 100vh;
    background: #1C3557;
    color: white;
    padding-top: 40px;
    position: fixed;
    top: 0;
    left: 0;
}

.sidebar-title {
    text-align: center;
    margin-bottom: 35px;
    font-size: 22px;
    font-weight: 600;
}

.sidebar-menu {
    list-style: none;
}

.sidebar-menu li {
    margin: 18px 0;
}

.sidebar-link {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    text-decoration: none;
    color: #d1d5db;
    font-size: 16px;
    border-radius: 8px;
    transition: 0.3s;
}

.sidebar-link i {
    font-size: 22px;
    margin-right: 12px;
}

.sidebar-link:hover {
    background: #1f2937;
    color: #fff;
    transform: scale(1.02);
}

.sidebar-active {
    background: #374151;
    color: white;
}

/* ===== MAIN CONTENT ===== */
.main-content {
    margin-left: 245px;   /* EXACT sidebar width */
    padding: 40px;
}
</style>
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<div class="sidebar-container">
    <h2 class="sidebar-title">Admin Panel</h2>

    <ul class="sidebar-menu">
        <li>
            <a class="sidebar-link sidebar-active" href="dashboard.php">
                <i class='bx bxs-dashboard'></i> Dashboard
            </a>
        </li>

        <li>
            <a class="sidebar-link" href="students.php">
                <i class='bx bxs-group'></i> Students
            </a>
        </li>

        <li>
            <a class="sidebar-link" href="teachers.php">
                <i class='bx bxs-user-voice'></i> Teachers
            </a>
        </li>

        <li>
            <a class="sidebar-link" href="events.php">
                <i class='bx bxs-calendar-event'></i> Events
            </a>
        </li>

        <li>
            <a class="sidebar-link" href="notices.php">
                <i class='bx bxs-bell'></i> Notices
            </a>
        </li>

        <li>
            <a class="sidebar-link" href="logout.php">
                <i class='bx bxs-log-out-circle'></i> Logout
            </a>
        </li>
    </ul>
</div>
