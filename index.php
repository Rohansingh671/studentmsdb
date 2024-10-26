<?php
session_start();

require_once 'php/databaseConnection.php';

if (!isset($_SESSION['userEmail'])) {
    header("Location: login-2.php");
    exit(); 
}
$userEmail = $_SESSION['userEmail'];
?>

?>

<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Preskool - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
<meta name="author" content="Dreams technologies - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Preskool Admin Template</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

<script src="js/theme-script.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/feather.css">

<link rel="stylesheet" href="css/tabler-icons.css">

<link rel="stylesheet" href="css/daterangepicker.css">

<link rel="stylesheet" href="css/select2.min.css">

<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/all.min.css">

<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="global-loader">
<div class="page-loader"></div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="index.php" class="logo logo-normal">
<img src="images/logo.svg" alt="Logo">
</a>
<a href="index.php" class="logo-small">
<img src="images/logo-small.svg" alt="Logo">
</a>
<a href="index.php" class="dark-logo">
<img src="images/logo-dark.svg" alt="Logo">
</a>
<a id="toggle_btn" href="javascript:void(0);">
<i class="ti ti-menu-deep"></i>
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<div class="header-user">
<div class="nav user-menu">

<div class="nav-item nav-search-inputs me-auto">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="#" class="dropdown">
<div class="searchinputs" id="dropdownMenuClickable">
<input type="text" placeholder="Search">
<div class="search-addon">
<button type="submit"><i class="ti ti-command"></i></button>
</div>
</div>
</form>
</div>
</div>

<div class="d-flex align-items-center">
<div class="dropdown me-2">
<a href="#" class="btn btn-outline-light fw-normal bg-white d-flex align-items-center p-2" data-bs-toggle="dropdown" aria-expanded="false">
<i class="ti ti-calendar-due me-1"></i>Academic Year : 2024 / 2025
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
Academic Year : 2023 / 2024
</a>
<a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
Academic Year : 2022 / 2023
</a>
<a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
Academic Year : 2021 / 2022
</a>
</div>
</div>
<div class="pe-1 ms-1">
<div class="dropdown">
<a href="#" class="btn btn-outline-light bg-white btn-icon d-flex align-items-center me-1 p-2" data-bs-toggle="dropdown" aria-expanded="false">
<img src="images/us.png" alt="Language" class="img-fluid rounded-pill">
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:void(0);" class="dropdown-item active d-flex align-items-center">
<img class="me-2 rounded-pill" src="images/us.png" alt="Img" height="22" width="22"> English
</a>
<a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
<img class="me-2 rounded-pill" src="images/fr.png" alt="Img" height="22" width="22"> French
</a>
<a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
<img class="me-2 rounded-pill" src="images/es.png" alt="Img" height="22" width="22"> Spanish
</a>
<a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
<img class="me-2 rounded-pill" src="images/de.png" alt="Img" height="22" width="22"> German
</a>
</div>
</div>
</div>
<div class="pe-1">
<div class="dropdown">
<a href="#" class="btn btn-outline-light bg-white btn-icon me-1" data-bs-toggle="dropdown" aria-expanded="false">
<i class="ti ti-square-rounded-plus"></i>
</a>
<div class="dropdown-menu dropdown-menu-right border shadow-sm dropdown-md">
<div class="p-3 border-bottom">
<h5>Add New</h5>
</div>
<div class="p-3 pb-0">
<div class="row gx-2">
<div class="col-6">
<a href="add-student.php" class="d-block bg-primary-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-primary rounded-circle"><i class="ti ti-school"></i></span>
</div>
<p class="text-dark">Students</p>
</a>
</div>
<div class="col-6">
<a href="add-teacher.php" class="d-block bg-success-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-success rounded-circle"><i class="ti ti-users"></i></span>
</div>
<p class="text-dark">Teachers</p>
</a>
</div>
<div class="col-6">
<a href="add-staff.php" class="d-block bg-warning-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg rounded-circle mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-warning rounded-circle"><i class="ti ti-users-group"></i></span>
</div>
<p class="text-dark">Staffs</p>
</a>
</div>
<div class="col-6">
<a href="add-invoice.php" class="d-block bg-info-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-info rounded-circle"><i class="ti ti-license"></i></span>
</div>
<p class="text-dark">Invoice</p>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="pe-1">
<a href="#" id="dark-mode-toggle" class="dark-mode-toggle activate btn btn-outline-light bg-white btn-icon me-1">
<i class="ti ti-moon"></i>
</a>
<a href="#" id="light-mode-toggle" class="dark-mode-toggle btn btn-outline-light bg-white btn-icon me-1">
<i class="ti ti-brightness-up"></i>
</a>
</div>
<div class="pe-1" id="notification_item">
<a href="#" class="btn btn-outline-light bg-white btn-icon position-relative me-1" id="notification_popup">
<i class="ti ti-bell"></i>
<span class="notification-status-dot"></span>
</a>
<div class="dropdown-menu dropdown-menu-end notification-dropdown p-4">
<div class="d-flex align-items-center justify-content-between border-bottom p-0 pb-3 mb-3">
<h4 class="notification-title">Notifications (2)</h4>
<div class="d-flex align-items-center">
<a href="#" class="text-primary fs-15 me-3 lh-1">Mark all as read</a>
<div class="dropdown">
<a href="javascript:void(0);" class="bg-white dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-calendar-due me-1"></i>Today
</a>
<ul class="dropdown-menu mt-2 p-3">
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Week
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last Week
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last Week
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="noti-content">
<div class="d-flex flex-column">
<div class="border-bottom mb-3 pb-3">
<a href="activities.php">
<div class="d-flex">
<span class="avatar avatar-lg me-2 flex-shrink-0">
<img src="images/avatar-27.jpg" alt="Profile">
</span>
<div class="flex-grow-1">
<p class="mb-1"><span class="text-dark fw-semibold">Shawn</span>
performance in Math is
below the threshold.</p>
<span>Just Now</span>
</div>
</div>
</a>
</div>
<div class="border-bottom mb-3 pb-3">
<a href="activities.php" class="pb-0">
<div class="d-flex">
<span class="avatar avatar-lg me-2 flex-shrink-0">
<img src="images/avatar-23.jpg" alt="Profile">
</span>
<div class="flex-grow-1">
<p class="mb-1"><span class="text-dark fw-semibold">Sylvia</span> added
appointment on
02:00 PM</p>
<span>10 mins ago</span>
<div class="d-flex justify-content-start align-items-center mt-1">
<span class="btn btn-light btn-sm me-2">Deny</span>
<span class="btn btn-primary btn-sm">Approve</span>
</div>
</div>
</div>
</a>
</div>
<div class="border-bottom mb-3 pb-3">
<a href="activities.php">
<div class="d-flex">
<span class="avatar avatar-lg me-2 flex-shrink-0">
<img src="images/avatar-25.jpg" alt="Profile">
</span>
<div class="flex-grow-1">
<p class="mb-1">New student record <span class="text-dark fw-semibold"> George</span> is
created by <span class="text-dark fw-semibold">
Teressa</span></p>
<span>2 hrs ago</span>
</div>
</div>
</a>
</div>
<div class="border-0 mb-3 pb-0">
<a href="activities.php">
<div class="d-flex">
<span class="avatar avatar-lg me-2 flex-shrink-0">
<img src="images/avatar-01.jpg" alt="Profile">
</span>
<div class="flex-grow-1">
<p class="mb-1">A new teacher record for <span class="text-dark fw-semibold">Elisa</span>
</p>
<span>09:45 AM</span>
</div>
</div>
</a>
</div>
</div>
</div>
<div class="d-flex p-0">
<a href="#" class="btn btn-light w-100 me-2">Cancel</a>
<a href="activities.php" class="btn btn-primary w-100">View All</a>
</div>
</div>
</div>
<div class="pe-1">
<a href="chat.php" class="btn btn-outline-light bg-white btn-icon position-relative me-1">
<i class="ti ti-brand-hipchat"></i>
<span class="chat-status-dot"></span>
</a>
</div>
<div class="pe-1">
<a href="#" class="btn btn-outline-light bg-white btn-icon me-1">
<i class="ti ti-chart-bar"></i>
</a>
</div>
<div class="pe-1">
<a href="#" class="btn btn-outline-light bg-white btn-icon me-1" id="btnFullscreen">
<i class="ti ti-maximize"></i>
</a>
</div>
<div class="dropdown ms-1">
<a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
<span class="avatar avatar-md rounded">
<img src="images/avatar-27.jpg" alt="Img" class="img-fluid">
</span>
</a>
<div class="dropdown-menu">
<div class="d-block">
<div class="d-flex align-items-center p-2">
<span class="avatar avatar-md me-2 online avatar-rounded">
<img src="images/avatar-27.jpg" alt="img">
</span>
<div>
<h6 class="">Kevin Larry</h6>
<p class="text-primary mb-0">Administrator</p>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item d-inline-flex align-items-center p-2" href="profile.php">
<i class="ti ti-user-circle me-2"></i>My Profile</a>
<a class="dropdown-item d-inline-flex align-items-center p-2" href="profile-settings.php"><i class="ti ti-settings me-2"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item d-inline-flex align-items-center p-2" href="login.php"><i class="ti ti-login me-2"></i>Logout</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="profile-settings.php">Settings</a>
<a class="dropdown-item" href="login.php">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li>
<a href="javascript:void(0);" class="d-flex align-items-center border bg-white rounded p-2 mb-4">
<img src="images/global-img.svg" class="avatar avatar-md img-fluid rounded" alt="Profile">
<span class="text-dark ms-2 fw-normal">Global International</span>
</a>
</li>
</ul>
<ul>
<li>
<ul>
<li class="submenu">
<a href="javascript:void(0);" class="subdrop active"><i class="ti ti-layout-dashboard"></i><span>Dashboard</span><span class="menu-arrow" hidden></span></a>
<ul>
<li><a href="index.php" class="active">Admin Dashboard</a></li>
<li hidden><a href="teacher-dashboard.php">Teacher Dashboard</a></li>
<li hidden><a href="student-dashboard.php">Student Dashboard</a></li>
<li hidden><a href="parent-dashboard.php">Parent Dashboard</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-layout-list"></i><span>Application</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="chat.php">Chat</a></li>
<li><a href="call.php">Call</a></li>
<li><a href="calendar.php">Calendar</a></li>
<li><a href="email.php">Email</a></li>
<li><a href="todo.php">To Do</a></li>
<li><a href="notes.php">Notes</a></li>
<li><a href="file-manager.php">File Manager</a></li>
</ul>
</li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>Layout</span></h6>
<ul>
<li><a href="layout-default.php"><i class="ti ti-layout-sidebar"></i><span>Default
</span></a></li>
<li><a href="layout-mini.php"><i class="ti ti-layout-align-left"></i><span>Mini</span></a></li>
<li><a href="layout-rtl.php"><i class="ti ti-text-direction-rtl"></i><span>RTL</span></a></li>
<li><a href="layout-box.php"><i class="ti ti-layout-distribute-vertical"></i><span>Box</span></a></li>
<li><a href="layout-dark.php"><i class="ti ti-moon"></i><span>Dark</span></a></li>
</ul>
</li>
<li>
<ul>
<li class="submenu">
<a href="javascript:void(0);" >
<i class="ti ti-school"></i><span>Students</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="student-grid.php">All Students</a></li>
<li><a href="students.php">Student List</a></li>
<li><a href="student-details.php">Student Details</a></li>
<li><a href="student-promotion.php">Student Promotion</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-user-bolt"></i><span>Parents</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="parent-grid.php">All Parents</a></li>
<li><a href="parents.php">Parent List</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-user-shield"></i><span>Guardians</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="guardian-grid.php">All Guardians</a></li>
<li><a href="guardians.php">Guardian List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="ti ti-users"></i><span>Teachers</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="teacher-grid.php">All Teachers</a></li>
<li><a href="teachers.php">Teacher List</a></li>
<li><a href="teacher-details.php">Teacher Details</a></li>
<li><a href="routine-teachers.php">Routine</a></li>
</ul>
</li>
</ul>
</li>
<li>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i class="ti ti-school-bell"></i><span>Classes</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="classes.php">All Classes</a></li>
<li><a href="schedule-classes.php">Schedule</a></li>
</ul>
</li>
<li><a href="class-room.php"><i class="ti ti-building"></i><span>Class Room</span></a>
</li>
<li><a href="class-routine.php"><i class="ti ti-bell-school"></i><span>Class
Routine</span></a></li>
<li><a href="class-section.php"><i class="ti ti-square-rotated-forbid-2"></i><span>Section</span></a></li>
<li><a href="class-subject.php"><i class="ti ti-book"></i><span>Subject</span></a></li>
<li hidden><a href="class-syllabus.php"><i class="ti ti-book-upload"></i><span>Syllabus</span></a></li>
<li hidden><a href="class-time-table.php"><i class="ti ti-table"></i><span>Time
Table</span></a></li>
<li hidden><a href="class-home-work.php"><i class="ti ti-license"></i><span>Home
Work</span></a></li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-hexagonal-prism-plus"></i><span>Examinations</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="exam.php">Exam</a></li>
<li><a href="exam-schedule.php">Exam Schedule</a></li>
<li><a href="grade.php">Grade</a></li>
<li><a href="exam-attendance.php">Exam Attendance</a></li>
<li><a href="exam-results.php">Exam Results</a></li>
</ul>
</li>
<li hidden><a href="academic-reasons.php"><i class="ti ti-lifebuoy"></i><span>Reasons</span></a></li>
</ul>
</li>
<li>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i class="ti ti-report-money"></i><span>Fees
Collection</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="fees-group.php">Fees Group</a></li>
<li><a href="fees-type.php">Fees Type</a></li>
<li><a href="fees-master.php">Fees Master</a></li>
<li hidden><a href="fees-assign.php">Fees Assign</a></li>
<li><a href="collect-fees.php">Collect Fees</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-notebook"></i><span>Library</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="library-members.php">Library Members</a></li>
<li><a href="library-books.php">Books</a></li>
<li><a href="library-issue-book.php">Issue Book</a></li>
<li><a href="library-return.php">Return</a></li>
</ul>
</li>
<li hidden><a href="sports.php"><i class="ti ti-run"></i><span>Sports</span></a></li>
<li hidden><a href="players.php"><i class="ti ti-play-football"></i><span>Players</span></a>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-building-fortress"></i><span>Hostel</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="hostel-list.php">Hostel List</a></li>
<li><a href="hostel-rooms.php">Hostel Rooms</a></li>
<li><a href="hostel-room-type.php">Room Type</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-bus"></i><span>Transport</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="transport-routes.php">Routes</a></li>
<li><a href="transport-pickup-points.php">Pickup Points</a></li>
<li><a href="transport-vehicle-drivers.php">Vehicle Drivers</a></li>
<li><a href="transport-vehicle.php">Vehicle</a></li>
<li><a href="transport-assign-vehicle.php">Assign Vehicle</a></li>
</ul>
</li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>HRM</span></h6>
<ul>
<li><a href="staffs.php"><i class="ti ti-users-group"></i><span>Staffs</span></a></li>
<li><a href="departments.php"><i class="ti ti-layout-distribute-horizontal"></i><span>Departments</span></a>
</li>
<li><a href="designation.php"><i class="ti ti-user-exclamation"></i><span>Designation</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"><i class="ti ti-calendar-share"></i><span>Attendance</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="student-attendance.php">Student Attendance</a></li>
<li><a href="teacher-attendance.php">Teacher Attendance</a></li>
<li><a href="staff-attendance.php">Staff Attendance</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-calendar-stats"></i><span>Leaves</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="list-leaves.php">List of leaves</a></li>
<li><a href="approve-request.php">Approve Request</a></li>
</ul>
</li>
<li><a href="holidays.php"><i class="ti ti-briefcase"></i><span>Holidays</span></a>
</li>
<li><a href="payroll.php"><i class="ti ti-moneybag"></i><span>Payroll</span></a></li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>Finance &amp; Accounts</span></h6>
<ul>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-swipe"></i><span>Accounts</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="expenses.php">Expenses</a></li>
<li><a href="expenses-category.php">Expense Category</a></li>
<li><a href="accounts-income.php">Income</a></li>
<li><a href="accounts-invoices.php">Invoices</a></li>
<li><a href="invoice.php">Invoice View</a></li>
<li><a href="accounts-transactions.php">Transactions</a></li>
</ul>
</li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>Announcements</span></h6>
<ul>
<li><a href="notice-board.php"><i class="ti ti-clipboard-data"></i><span>Notice
Board</span></a></li>
<li><a href="events.php"><i class="ti ti-calendar-question"></i><span>Events</span></a>
</li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>Reports</span></h6>
<ul>
<li><a href="attendance-report.php"><i class="ti ti-calendar-due"></i><span>Attendance
Report</span></a></li>
<li><a href="class-report.php"><i class="ti ti-graph"></i><span>Class Report</span></a>
</li>
<li><a href="student-report.php"><i class="ti ti-chart-infographic"></i><span>Student
Report</span></a></li>
<li><a href="grade-report.php"><i class="ti ti-calendar-x"></i><span>Grade
Report</span></a></li>
<li><a href="leave-report.php"><i class="ti ti-line"></i><span>Leave Report</span></a>
</li>
<li><a href="fees-report.php"><i class="ti ti-mask"></i><span>Fees Report</span></a>
</li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>User Management</span></h6>
<ul>
<li><a href="users.php"><i class="ti ti-users-minus"></i><span>Users</span></a></li>
<li><a href="roles-permission.php"><i class="ti ti-shield-plus"></i><span>Roles &amp;
Permissions</span></a></li>
<li><a href="delete-account.php"><i class="ti ti-user-question"></i><span>Delete
Account Request</span></a></li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>Membership</span></h6>
<ul>
<li><a href="membership-plans.php"><i class="ti ti-user-plus"></i><span>Membership
Plans</span></a></li>
<li><a href="membership-addons.php"><i class="ti ti-cone-plus"></i><span>Membership
Addons</span></a></li>
<li><a href="membership-transactions.php"><i class="ti ti-file-power"></i><span>Transactions</span></a></li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>Content</span></h6>
<ul>
<li><a href="pages.php"><i class="ti ti-page-break"></i><span>Pages</span></a></li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-brand-blogger"></i><span>Blog</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="blog.php">All Blogs</a></li>
<li><a href="blog-categories.php">Categories</a></li>
<li><a href="blog-comments.php">Comments</a></li>
<li><a href="blog-tags.php">Tags</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-map-pin-search"></i><span>Location</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="countries.php">Countries</a></li>
<li><a href="states.php">States</a></li>
<li><a href="cities.php">Cities</a></li>
</ul>
</li>
<li><a href="testimonials.php"><i class="ti ti-quote"></i><span>Testimonials</span></a>
</li>
<li><a href="faq.php"><i class="ti ti-question-mark"></i><span>FAQ</span></a></li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>Support</span></h6>
<ul>
<li><a href="contact-messages.php"><i class="ti ti-message"></i><span>Contact
Messages</span></a></li>
<li><a href="tickets.php"><i class="ti ti-ticket"></i><span>Tickets</span></a></li>
</ul>
</li>
<li>
<ul>
<li><a href="profile.php"><i class="ti ti-user"></i><span>Profile</span></a></li>
<li class="submenu">
<a href="javascript:void(0);">
<i class="ti ti-lock-open"></i><span>Authentication</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="login-2.php" class="">Login<span></span></a>
<ul>
<li hidden><a href="login.php">Cover</a></li>
<li hidden><a href="login-2.php">Illustration</a></li>
<li hidden><a href="login-3.php">Basic</a></li>
</ul>
</li>
<li><a href="register-2.php" class="">Register<span></span></a>
<ul>
<li hidden><a href="register.php">Cover</a></li>
<li hidden><a href="register-2.php">Illustration</a></li>
<li hidden><a href="register-3.php">Basic</a></li>
</ul>
</li>
<li><a href="forgot-2.php">Forgot
Password<span></span></a>
<ul>
<li hidden><a href="forgot-password.php">Cover</a></li>
<li hidden><a href="forgot-password-2.php">Illustration</a></li>
<li hidden><a href="forgot-password-3.php">Basic</a></li>
</ul>
</li>
<li><a href="reset-password-2.php">Reset
Password<span></span></a>
<ul>
<li hidden><a href="reset-password.php">Cover</a></li>
<li hidden><a href="reset-password-2.php">Illustration</a></li>
<li hidden><a href="reset-password-3.php">Basic</a></li>
</ul>
</li>
<li class="submenu submenu-two" hidden><a href="javascript:void(0);">Email
Verification<span class="menu-arrow inside-submenu"></span></a>
<ul>
<li><a href="email-verification.php">Cover</a></li>
<li><a href="email-verification-2.php">Illustration</a></li>
<li><a href="email-verification-3.php">Basic</a></li>
</ul>
</li>
<li class="submenu submenu-two" hidden><a href="javascript:void(0);">2 Step
Verification<span class="menu-arrow inside-submenu"></span></a>
<ul>
<li><a href="two-step-verification.php">Cover</a></li>
<li><a href="two-step-verification-2.php">Illustration</a></li>
<li><a href="two-step-verification-3.php">Basic</a></li>
</ul>
</li>
<li><a href="lock-screen.php">Lock Screen</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-error-404"></i><span>Error Pages</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="404-error.php">404 Error</a></li>
<li><a href="500-error.php">500 Error</a></li>
</ul>
</li>
<li hidden><a href="blank-page.php"><i class="ti ti-brand-nuxt"></i><span>Blank
Page</span></a></li>
<li hidden><a href="coming-soon.php"><i class="ti ti-file"></i><span>Coming Soon</span></a>
</li>
<li hidden><a href="under-maintenance.php"><i class="ti ti-moon-2"></i><span>Under
Maintenance</span></a></li>
</ul>
</li>
<li>
<ul>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-shield-cog"></i><span>General Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="profile-settings.php">Profile Settings</a></li>
<li><a href="security-settings.php">Security Settings</a></li>
<li><a href="notifications-settings.php">Notifications Settings</a></li>
<li><a href="connected-apps.php">Connected Apps</a></li>
</ul>
</li>

<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-device-laptop"></i><span>Website Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="company-settings.php">Company Settings</a></li>
<li><a href="localization.php">Localization</a></li>
<li><a href="prefixes.php">Prefixes</a></li>
<li><a href="preferences.php">Preferences</a></li>
<li><a href="social-authentication.php">Social Authentication</a></li>
<li><a href="language.php">Language</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-apps"></i><span>App Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="invoice-settings.php">Invoice Settings</a></li>
<li><a href="custom-fields.php">Custom Fields</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-file-symlink"></i><span>System Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="email-settings.php">Email Settings</a></li>
<li><a href="email-templates.php">Email Templates</a></li>
<li><a href="sms-settings.php">SMS Settings</a></li>
<li><a href="otp-settings.php">OTP</a></li>
<li><a href="gdpr-cookies.php">GDPR Cookies</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-zoom-money"></i><span>Financial Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="payment-gateways.php">Payment Gateways </a></li>
<li><a href="tax-rates.php">Tax Rates</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-calendar-repeat"></i><span>Academic Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="school-settings.php">School Settings </a></li>
<li><a href="religion.php">Religion</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-flag-cog"></i><span>Other Settings</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="storage.php">Storage</a></li>
<li><a href="ban-ip-address.php">Ban IP Address</a></li>
</ul>
</li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>UI Interface</span></h6>
<ul>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-hierarchy-2"></i><span>Base UI</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="ui-alerts.php">Alerts</a></li>
<li><a href="ui-accordion.php">Accordion</a></li>
<li><a href="ui-avatar.php">Avatar</a></li>
<li><a href="ui-badges.php">Badges</a></li>
<li><a href="ui-borders.php">Border</a></li>
<li><a href="ui-buttons.php">Buttons</a></li>
<li><a href="ui-buttons-group.php">Button Group</a></li>
<li><a href="ui-breadcrumb.php">Breadcrumb</a></li>
<li><a href="ui-cards.php">Card</a></li>
<li><a href="ui-carousel.php">Carousel</a></li>
<li><a href="ui-colors.php">Colors</a></li>
<li><a href="ui-dropdowns.php">Dropdowns</a></li>
<li><a href="ui-grid.php">Grid</a></li>
<li><a href="ui-images.php">Images</a></li>
<li><a href="ui-lightbox.php">Lightbox</a></li>
<li><a href="ui-media.php">Media</a></li>
<li><a href="ui-modals.php">Modals</a></li>
<li><a href="ui-offcanvas.php">Offcanvas</a></li>
<li><a href="ui-pagination.php">Pagination</a></li>
<li><a href="ui-popovers.php">Popovers</a></li>
<li><a href="ui-progress.php">Progress</a></li>
<li><a href="ui-placeholders.php">Placeholders</a></li>
<li><a href="ui-spinner.php">Spinner</a></li>
<li><a href="ui-sweetalerts.php">Sweet Alerts</a></li>
<li><a href="ui-nav-tabs.php">Tabs</a></li>
<li><a href="ui-toasts.php">Toasts</a></li>
<li><a href="ui-tooltips.php">Tooltips</a></li>
<li><a href="ui-typography.php">Typography</a></li>
<li><a href="ui-video.php">Video</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-hierarchy-3"></i><span>Advanced UI</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="ui-ribbon.php">Ribbon</a></li>
<li><a href="ui-clipboard.php">Clipboard</a></li>
<li><a href="ui-drag-drop.php">Drag &amp; Drop</a></li>
<li><a href="ui-rangeslider.php">Range Slider</a></li>
<li><a href="ui-rating.php">Rating</a></li>
<li><a href="ui-text-editor.php">Text Editor</a></li>
<li><a href="ui-counter.php">Counter</a></li>
<li><a href="ui-scrollbar.php">Scrollbar</a></li>
<li><a href="ui-stickynote.php">Sticky Note</a></li>
<li><a href="ui-timeline.php">Timeline</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-chart-line"></i>
<span>Charts</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="chart-apex.php">Apex Charts</a></li>
<li><a href="chart-c3.php">Chart C3</a></li>
<li><a href="chart-js.php">Chart Js</a></li>
<li><a href="chart-morris.php">Morris Charts</a></li>
<li><a href="chart-flot.php">Flot Charts</a></li>
<li><a href="chart-peity.php">Peity Charts</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-icons"></i>
<span>Icons</span><span class="menu-arrow"></span>
</a>
<ul>
<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
<li><a href="icon-feather.php">Feather Icons</a></li>
<li><a href="icon-ionic.php">Ionic Icons</a></li>
<li><a href="icon-material.php">Material Icons</a></li>
<li><a href="icon-pe7.php">Pe7 Icons</a></li>
<li><a href="icon-simpleline.php">Simpleline Icons</a></li>
<li><a href="icon-themify.php">Themify Icons</a></li>
<li><a href="icon-weather.php">Weather Icons</a></li>
<li><a href="icon-typicon.php">Typicon Icons</a></li>
<li><a href="icon-flag.php">Flag Icons</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);">
<i class="ti ti-input-search"></i><span>Forms</span><span class="menu-arrow"></span>
</a>
<ul>
<li class="submenu submenu-two">
<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
<ul>
<li><a href="form-basic-inputs.php">Basic Inputs</a></li>
<li><a href="form-checkbox-radios.php">Checkbox &amp; Radios</a></li>
<li><a href="form-input-groups.php">Input Groups</a></li>
<li><a href="form-grid-gutters.php">Grid &amp; Gutters</a></li>
<li><a href="form-select.php">Form Select</a></li>
<li><a href="form-mask.php">Input Masks</a></li>
<li><a href="form-fileupload.php">File Uploads</a></li>
</ul>
</li>
<li class="submenu submenu-two" hidden>
<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
<ul>
<li><a href="form-horizontal.php">Horizontal Form</a></li>
<li><a href="form-vertical.php">Vertical Form</a></li>
<li><a href="form-floating-labels.php">Floating Labels</a></li>
</ul>
</li>
<li><a href="form-validation.php">Form Validation</a></li>
<li><a href="form-select2.php">Select2</a></li>
<li><a href="form-wizard.php">Form Wizard</a></li>
</ul>
</li>
<li class="submenu" hidden>
<a href="javascript:void(0);"><i class="ti ti-table-plus"></i><span>Tables</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="tables-basic.php">Basic Tables </a></li>
<li><a href="data-tables.php">Data Table </a></li>
</ul>
</li>
</ul>
</li>
<li hidden>
<h6 class="submenu-hdr"><span>Help</span></h6>
<ul>
<li><a href="https://preschool.dreamstechnologies.com/documentation/index.php"><i class="ti ti-file-text"></i><span>Documentation</span></a></li>
<li><a href="https://preschool.dreamstechnologies.com/documentation/changelog.php"><i class="ti ti-exchange"></i><span>Changelog</span><span class="badge badge-primary badge-xs text-white fs-10 ms-auto">v1.8.3</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"><i class="ti ti-menu-2"></i><span>Multi
Level</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);">Multilevel 1</a></li>
<li class="submenu submenu-two"><a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
<ul>
<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
<ul>
<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="javascript:void(0);">Multilevel 3</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content">

<div class="d-md-flex d-block align-items-center justify-content-between mb-3">
<div class="my-auto mb-2">
<h3 class="page-title mb-1">Admin Dashboard</h3>
<nav>
<ol class="breadcrumb mb-0">
<li class="breadcrumb-item">
<a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
</ol>
</nav>
</div>
<div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
<div class="mb-2">
<a href="add-student.php" class="btn btn-primary d-flex align-items-center me-3"><i class="ti ti-square-rounded-plus me-2"></i>Add New Student</a>
</div>
<div class="mb-2">
<a href="collect-fees.php" class="btn btn-light d-flex align-items-center">Fees Details</a>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="alert-message">
<div class="alert alert-success rounded-pill d-flex align-items-center justify-content-between border-success mb-4" role="alert">
<div class="d-flex align-items-center">
<span class="me-1 avatar avatar-sm flex-shrink-0"><img src="images/avatar-27.jpg" alt="Img" class="img-fluid rounded-circle"></span>
<p>Fahed III,C has paid Fees for the <strong class="mx-1">“Term1”</strong></p>
</div>
<button type="button" class="btn-close p-0" data-bs-dismiss="alert" aria-label="Close"><span><i class="ti ti-x"></i></span></button>
</div>
</div>

<div class="card bg-dark">
<div class="overlay-img">
<img src="images/shape-04.png" alt="img" class="img-fluid shape-01">
<img src="images/shape-01.png" alt="img" class="img-fluid shape-02">
<img src="images/shape-02.png" alt="img" class="img-fluid shape-03">
<img src="images/shape-03.png" alt="img" class="img-fluid shape-04">
</div>
<div class="card-body">
<div class="d-flex align-items-xl-center justify-content-xl-between flex-xl-row flex-column">
<div class="mb-3 mb-xl-0">
<div class="d-flex align-items-center flex-wrap mb-2">
<h1 class="text-white me-2">Welcome Back, Mr. Herald</h1>
<a href="profile.php" class="avatar avatar-sm img-rounded bg-gray-800 dark-hover"><i class="ti ti-edit text-white"></i></a>
</div>
<p class="text-white">Have a Good day at work</p>
</div>
<p class="text-white"><i class="ti ti-refresh me-1"></i>Updated Recently on 15 Jun
2024</p>
</div>
</div>
</div>

</div>
</div>
<div class="row">

<div class="col-xxl-3 col-sm-6 d-flex">
<div class="card flex-fill animate-card border-0">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="avatar avatar-xl bg-danger-transparent me-2 p-1">
<img src="images/student.svg" alt="img">
</div>
<div class="overflow-hidden flex-fill">
<div class="d-flex align-items-center justify-content-between">
<h2 class="counter">3654</h2>
<span class="badge bg-danger">1.2%</span>
</div>
<p>Total Students</p>
</div>
</div>
<div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
<p class="mb-0">Active : <span class="text-dark fw-semibold">3643</span></p>
<span class="text-light">|</span>
<p>Inactive : <span class="text-dark fw-semibold">11</span></p>
</div>
</div>
</div>
</div>


<div class="col-xxl-3 col-sm-6 d-flex">
<div class="card flex-fill animate-card border-0">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="avatar avatar-xl me-2 bg-secondary-transparent p-1">
<img src="images/teacher.svg" alt="img">
</div>
<div class="overflow-hidden flex-fill">
<div class="d-flex align-items-center justify-content-between">
<h2 class="counter">284</h2>
<span class="badge bg-skyblue">1.2%</span>
</div>
<p>Total Teachers</p>
</div>
</div>
<div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
<p class="mb-0">Active : <span class="text-dark fw-semibold">254</span></p>
<span class="text-light">|</span>
<p>Inactive : <span class="text-dark fw-semibold">30</span></p>
</div>
</div>
</div>
</div>


<div class="col-xxl-3 col-sm-6 d-flex">
<div class="card flex-fill animate-card border-0">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="avatar avatar-xl me-2 bg-warning-transparent p-1">
<img src="images/staff.svg" alt="img">
</div>
<div class="overflow-hidden flex-fill">
<div class="d-flex align-items-center justify-content-between">
<h2 class="counter">162</h2>
<span class="badge bg-warning">1.2%</span>
</div>
<p>Total Staff</p>
</div>
</div>
<div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
<p class="mb-0">Active : <span class="text-dark fw-semibold">161</span></p>
<span class="text-light">|</span>
<p>Inactive : <span class="text-dark fw-semibold">02</span></p>
</div>
</div>
</div>
</div>


<div class="col-xxl-3 col-sm-6 d-flex">
<div class="card flex-fill animate-card border-0">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="avatar avatar-xl me-2 bg-success-transparent p-1">
<img src="images/subject.svg" alt="img">
</div>
<div class="overflow-hidden flex-fill">
<div class="d-flex align-items-center justify-content-between">
<h2 class="counter">82</h2>
<span class="badge bg-success">1.2%</span>
</div>
<p>Total Subjects</p>
</div>
</div>
<div class="d-flex align-items-center justify-content-between border-top mt-3 pt-3">
<p class="mb-0">Active : <span class="text-dark fw-semibold">81</span></p>
<span class="text-light">|</span>
<p>Inactive : <span class="text-dark fw-semibold">01</span></p>
</div>
</div>
</div>
</div>

</div>
<div class="row">

<div class="col-xxl-4 col-xl-6 col-md-12 d-flex">
<div class="card flex-fill">
<div class="card-header d-flex align-items-center justify-content-between">
<div>
<h4 class="card-title">Schedules</h4>
</div>
<a href="#" class="link-primary fw-medium me-2" data-bs-toggle="modal" data-bs-target="#add_event"><i class="ti ti-square-plus me-1"></i>Add New</a>
</div>
<div class="card-body">
<div class="datepic mb-4"></div>
<h5 class="mb-3">Upcoming Events</h5>
<div class="event-wrapper event-scroll">

<div class="border-start border-skyblue border-3 shadow-sm p-3 mb-3">
<div class="d-flex align-items-center mb-3 pb-3 border-bottom">
<span class="avatar p-1 me-2 bg-teal-transparent flex-shrink-0">
<i class="ti ti-user-edit text-info fs-20"></i>
</span>
<div class="flex-fill">
<h6 class="mb-1">Parents, Teacher Meet</h6>
<p class="d-flex align-items-center"><i class="ti ti-calendar me-1"></i>15 July 2024</p>
</div>
</div>
<div class="d-flex align-items-center justify-content-between">
<p class="mb-0"><i class="ti ti-clock me-1"></i>09:10AM - 10:50PM</p>
<div class="avatar-list-stacked avatar-group-sm">
<span class="avatar border-0">
<img src="images/parent-01.jpg" class="rounded-circle" alt="img">
</span>
<span class="avatar border-0">
<img src="images/parent-07.jpg" class="rounded-circle" alt="img">
</span>
<span class="avatar border-0">
<img src="images/parent-02.jpg" class="rounded-circle" alt="img">
</span>
</div>
</div>
</div>


<div class="border-start border-info border-3 shadow-sm p-3 mb-3">
<div class="d-flex align-items-center mb-3 pb-3 border-bottom">
<span class="avatar p-1 me-2 bg-info-transparent flex-shrink-0">
<i class="ti ti-user-edit fs-20"></i>
</span>
<div class="flex-fill">
<h6 class="mb-1">Parents, Teacher Meet</h6>
<p class="d-flex align-items-center"><i class="ti ti-calendar me-1"></i>15 July 2024</p>
</div>
</div>
<div class="d-flex align-items-center justify-content-between">
<p class="mb-0"><i class="ti ti-clock me-1"></i>09:10AM - 10:50PM</p>
<div class="avatar-list-stacked avatar-group-sm">
<span class="avatar border-0">
<img src="images/parent-05.jpg" class="rounded-circle" alt="img">
</span>
<span class="avatar border-0">
<img src="images/parent-06.jpg" class="rounded-circle" alt="img">
</span>
<span class="avatar border-0">
<img src="images/parent-07.jpg" class="rounded-circle" alt="img">
</span>
</div>
</div>
</div>


<div class="border-start border-danger border-3 shadow-sm p-3 mb-3">
<div class="d-flex align-items-center mb-3 pb-3 border-bottom">
<span class="avatar p-1 me-2 bg-danger-transparent flex-shrink-0">
<i class="ti ti-vacuum-cleaner fs-24"></i>
</span>
<div class="flex-fill">
<h6 class="mb-1">Vacation Meeting</h6>
<p class="d-flex align-items-center"><i class="ti ti-calendar me-1"></i>07 July 2024 - 07 July 2024</p>
</div>
</div>
<div class="d-flex align-items-center justify-content-between">
<p class="mb-0"><i class="ti ti-clock me-1"></i>09:10 AM - 10:50 PM</p>
<div class="avatar-list-stacked avatar-group-sm">
<span class="avatar border-0">
<img src="images/parent-11.jpg" class="rounded-circle" alt="img">
</span>
<span class="avatar border-0">
<img src="images/parent-13.jpg" class="rounded-circle" alt="img">
</span>
</div>
</div>
</div>

</div>
</div>
</div>
</div>


<div class="col-xxl-4 col-xl-6 col-md-12 d-flex flex-column">
<div class="card">
<div class="card-header d-flex align-items-center justify-content-between">
<h4 class="card-title">Attendance</h4>
<div class="dropdown">
<a href="javascript:void(0);" class="bg-white dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-calendar-due me-1"></i>Today
</a>
<ul class="dropdown-menu mt-2 p-3">
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Week
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last Week
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last Week
</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="list-tab mb-4">
<ul class="nav">
<li>
<a href="#" class="active" data-bs-toggle="tab" data-bs-target="#students">Students</a>
</li>
<li>
<a href="#" data-bs-toggle="tab" data-bs-target="#teachers">Teachers</a>
</li>
<li>
<a href="#" data-bs-toggle="tab" data-bs-target="#staff">Staff</a>
</li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane fade active show" id="students">
<div class="row gx-3">
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>28</h5>
<p class="fs-12">Emergency</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>01</h5>
<p class="fs-12">Absent</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>01</h5>
<p class="fs-12">Late</p>
</div>
</div>
</div>
</div>
<div class="text-center">
<div id="student-chart" class="mb-4"></div>
<a href="student-attendance.php" class="btn btn-light"><i class="ti ti-calendar-share me-1"></i>View All</a>
</div>
</div>
<div class="tab-pane fade" id="teachers">
<div class="row gx-3">
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>30</h5>
<p class="fs-12">Emergency</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>03</h5>
<p class="fs-12">Absent</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>03</h5>
<p class="fs-12">Late</p>
</div>
</div>
</div>
</div>
<div class="text-center">
<div id="teacher-chart" class="mb-4"></div>
<a href="teacher-attendance.php" class="btn btn-light"><i class="ti ti-calendar-share me-1"></i>View All</a>
</div>
</div>
<div class="tab-pane fade" id="staff">
<div class="row gx-3">
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>45</h5>
<p class="fs-12">Emergency</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>01</h5>
<p class="fs-12">Absent</p>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="card bg-light-300 shadow-none border-0">
<div class="card-body p-3 text-center">
<h5>10</h5>
<p class="fs-12">Late</p>
</div>
</div>
</div>
</div>
<div class="text-center">
<div id="staff-chart" class="mb-4"></div>
<a href="staff-attendance.php" class="btn btn-light"><i class="ti ti-calendar-share me-1"></i>View All</a>
</div>
</div>
</div>
</div>
</div>
<div class="row flex-fill">

<div class="col-sm-6 d-flex flex-column">
<div class="bg-success-800 p-3 br-5 text-center flex-fill mb-4 pb-0  owl-height bg-01">
<div class="owl-carousel student-slider h-100">
<div class="item h-100">
<div class="d-flex justify-content-between flex-column h-100">
<div>
<h5 class="mb-3 text-white">Best Performer</h5>
<h4 class="mb-1 text-white">Rubell</h4>
<p class="text-light">Physics Teacher</p>
</div>
<img src="images/performer-01.png" alt="img">
</div>
</div>
<div class="item h-100">
<div class="d-flex justify-content-between flex-column h-100">
<div>
<h5 class="mb-3 text-white">Best Performer</h5>
<h4 class="mb-1 text-white">George Odell</h4>
<p class="text-light">English Teacher</p>
</div>
<img src="images/performer-02.png" alt="img">
</div>
</div>
</div>
</div>
</div>


<div class="col-sm-6 d-flex flex-column">
<div class="bg-info p-3 br-5 text-center flex-fill mb-4 pb-0 owl-height bg-02">
<div class="owl-carousel teacher-slider h-100">
<div class="item h-100">
<div class="d-flex justify-content-between flex-column h-100">
<div>
<h5 class="mb-3 text-white">Star Students</h5>
<h4 class="mb-1 text-white">Tenesa</h4>
<p class="text-light">XII, A</p>
</div>
<img src="images/student-performer-01.png" alt="img">
</div>
</div>
<div class="item h-100">
<div class="d-flex justify-content-between flex-column h-100">
<div>
<h5 class="mb-3 text-white">Star Students</h5>
<h4 class="mb-1 text-white">Michael </h4>
<p>XII, B</p>
</div>
<img src="images/student-performer-02.png" alt="img">
</div>
</div>
</div>
</div>
</div>

</div>
</div>

<div class="col-xxl-4 col-md-12 d-flex flex-column">

<div class="card flex-fill">
<div class="card-header d-flex align-items-center justify-content-between">
<h4 class="card-title">Quick Links</h4>
</div>
<div class="card-body pb-1">
<div class="owl-carousel link-slider">
<div class="item">
<a href="class-time-table.php" class="d-block bg-success-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg border p-1 border-success rounded-circle mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-success rounded-circle"><i class="ti ti-calendar"></i></span>
</div>
<p class="text-dark">Calendar</p>
</a>
<a href="fees-group.php" class="d-block bg-secondary-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg border p-1 border-secondary rounded-circle mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-secondary rounded-circle"><i class="ti ti-license"></i></span>
</div>
<p class="text-dark">Fees</p>
</a>
</div>
<div class="item">
<a href="exam-results.php" class="d-block bg-primary-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg border p-1 border-primary rounded-circle mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-primary rounded-circle"><i class="ti ti-hexagonal-prism"></i></span>
</div>
<p class="text-dark">Exam Result</p>
</a>
<a href="class-home-work.php" class="d-block bg-danger-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg border p-1 border-danger rounded-circle mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-danger rounded-circle"><i class="ti ti-report-money"></i></span>
</div>
<p class="text-dark">Home Works</p>
</a>
</div>
<div class="item">
<a href="student-attendance.php" class="d-block bg-warning-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg border p-1 border-warning rounded-circle mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-warning rounded-circle"><i class="ti ti-calendar-share"></i></span>
</div>
<p class="text-dark">Attendance</p>
</a>
<a href="attendance-report.php" class="d-block bg-skyblue-transparent ronded p-2 text-center mb-3 class-hover">
<div class="avatar avatar-lg border p-1 border-skyblue rounded-circle mb-2">
<span class="d-inline-flex align-items-center justify-content-center w-100 h-100 bg-skyblue rounded-circle"><i class="ti ti-file-pencil"></i></span>
</div>
<p class="text-dark">Reports</p>
</a>
</div>
</div>
</div>
</div>


<div class="card flex-fill">
<div class="card-header d-flex align-items-center justify-content-between">
<h4 class="card-title">Class Routine</h4>
<a href="#" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#add_class_routine"><i class="ti ti-square-plus me-1"></i>Add
New</a>
</div>
<div class="card-body">
<div class="d-flex align-items-center rounded border p-3 mb-3">
<span class="avatar avatar-md flex-shrink-0 border rounded me-2">
<img src="images/teacher-01.jpg" class="rounded" alt="Profile">
</span>
<div class="w-100">
<p class="mb-1">Oct 2024</p>
<div class="progress progress-xs  flex-grow-1 mb-1">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="d-flex align-items-center rounded border p-3 mb-3">
<span class="avatar avatar-md flex-shrink-0 border rounded me-2">
<img src="images/teacher-02.jpg" class="rounded" alt="Profile">
</span>
<div class="w-100">
<p class="mb-1">Nov 2024</p>
<div class="progress progress-xs  flex-grow-1 mb-1">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="d-flex align-items-center rounded border p-3 mb-0">
<span class="avatar avatar-md flex-shrink-0 border rounded me-2">
<img src="images/teacher-03.jpg" class="rounded" alt="Profile">
</span>
<div class="w-100">
<p class="mb-1">Oct 2024</p>
<div class="progress progress-xs  flex-grow-1 mb-1">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-success rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>


<div class="card flex-fill">
<div class="card-header d-flex align-items-center justify-content-between">
<h4 class="card-title">Performance</h4>
<div class="dropdown">
<a href="javascript:void(0);" class="bg-white dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-school-bell  me-2"></i>Class II
</a>
<ul class="dropdown-menu mt-2 p-3">
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Class I
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Class II
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Class III
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Class IV
</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="d-md-flex align-items-center justify-content-between">
<div class="me-md-3 mb-3 mb-md-0 w-100">
<div class="border border-dashed p-3 rounded d-flex align-items-center justify-content-between mb-1">
<p class="mb-0 me-2"><i class="ti ti-arrow-badge-down-filled me-2 text-primary"></i>Top</p>
<h5>45</h5>
</div>
<div class="border border-dashed p-3 rounde d-flex align-items-center justify-content-between mb-1">
<p class="mb-0 me-2"><i class="ti ti-arrow-badge-down-filled me-2 text-warning"></i>Average
</p>
<h5>11</h5>
</div>
<div class="border border-dashed p-3 rounded d-flex align-items-center justify-content-between mb-0">
<p class="mb-0 me-2"><i class="ti ti-arrow-badge-down-filled me-2 text-danger"></i>Below Avg
</p>
<h5>02</h5>
</div>
</div>
<div id="class-chart" class="text-center text-md-left"></div>
</div>
</div>
</div>

</div>
</div>
<div class="row">

<div class="col-xxl-8 col-xl-6 d-flex">
<div class="card flex-fill">
<div class="card-header  d-flex align-items-center justify-content-between">
<h4 class="card-title">Fees Collection</h4>
<div class="dropdown">
<a href="javascript:void(0);" class="bg-white dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-calendar  me-2"></i>Last 8 Quater
</a>
<ul class="dropdown-menu mt-2 p-3">
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Month
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Year
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last 12 Quater
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last 16 Quater
</a>
</li>
</ul>
</div>
</div>
<div class="card-body pb-0">
<div id="fees-chart"></div>
</div>
</div>
</div>


<div class="col-xxl-4 col-xl-6 d-flex">
<div class="card flex-fill">
<div class="card-header  d-flex align-items-center justify-content-between">
<h4 class="card-title">Leave Requests</h4>
<div class="dropdown">
<a href="javascript:void(0);" class="bg-white dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-calendar-due me-1"></i>Today
</a>
<ul class="dropdown-menu mt-2 p-3">
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Week
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last Week
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last Week
</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="card mb-2">
<div class="card-body p-3">
<div class="d-flex align-items-center justify-content-between mb-3">
<div class="d-flex align-items-center overflow-hidden me-2">
<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0 me-2">
<img src="images/avatar-14.jpg" alt="student">
</a>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate"><a href="javascript:void(0);">James</a><span class="badge badge-soft-danger ms-1">Emergency</span></h6>
<p class="text-truncate">Physics Teacher</p>
</div>
</div>
<div class="d-flex align-items-center">
<a href="#" class="avatar avatar-xs p-0 btn btn-success me-1"><i class="ti ti-checks"></i></a>
<a href="#" class="avatar avatar-xs p-0 btn btn-danger"><i class="ti ti-x"></i></a>
</div>
</div>
<div class="d-flex align-items-center justify-content-between border-top pt-3">
<p class="mb-0">Leave : <span class="fw-semibold">12 -13 May</span></p>
<p>Apply on : <span class="fw-semibold">12 May</span></p>
</div>
</div>
</div>
<div class="card mb-0">
<div class="card-body p-3">
<div class="d-flex align-items-center justify-content-between mb-3">
<div class="d-flex align-items-center overflow-hidden me-2">
<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0 me-2">
<img src="images/avatar-19.jpg" alt="student">
</a>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate "><a href="javascript:void(0);">Ramien</a><span class="badge badge-soft-warning ms-1">Casual</span></h6>
<p class="text-truncate">Accountant</p>
</div>
</div>
<div class="d-flex align-items-center">
<a href="#" class="avatar avatar-xs p-0 btn btn-success me-1"><i class="ti ti-checks"></i></a>
<a href="#" class="avatar avatar-xs p-0 btn btn-danger"><i class="ti ti-x"></i></a>
</div>
</div>
<div class="d-flex align-items-center justify-content-between border-top pt-3">
<p class="mb-0">Leave : <span class="fw-semibold">12 -13 May</span></p>
<p>Apply on : <span class="fw-semibold">11 May</span></p>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="row">

<div class="col-xl-3 col-md-6 d-flex">
<a href="student-attendance.php" class="card bg-warning-transparent border border-5 border-white animate-card flex-fill">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center">
<span class="avatar avatar-lg bg-warning rounded flex-shrink-0 me-2"><i class="ti ti-calendar-share fs-24"></i></span>
<div class="overflow-hidden">
<h6 class="fw-semibold text-default">View Attendance</h6>
</div>
</div>
<span class="btn btn-white warning-btn-hover avatar avatar-sm p-0 flex-shrink-0 rounded-circle"><i class="ti ti-chevron-right fs-14"></i></span>
</div>
</div>
</a>
</div>


<div class="col-xl-3 col-md-6 d-flex">
<a href="events.php" class="card bg-success-transparent border border-5 border-white animate-card flex-fill ">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center">
<span class="avatar avatar-lg bg-success rounded flex-shrink-0 me-2"><i class="ti ti-speakerphone fs-24"></i></span>
<div class="overflow-hidden">
<h6 class="fw-semibold text-default">New Events</h6>
</div>
</div>
<span class="btn btn-white success-btn-hover avatar avatar-sm p-0 flex-shrink-0 rounded-circle"><i class="ti ti-chevron-right fs-14"></i></span>
</div>
</div>
</a>
</div>


<div class="col-xl-3 col-md-6 d-flex">
<a href="membership-plans.php" class="card bg-danger-transparent border border-5 border-white animate-card flex-fill">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center">
<span class="avatar avatar-lg bg-danger rounded flex-shrink-0 me-2"><i class="ti ti-sphere fs-24"></i></span>
<div class="overflow-hidden">
<h6 class="fw-semibold text-default">Membership Plans</h6>
</div>
</div>
<span class="btn btn-white avatar avatar-sm p-0 flex-shrink-0 rounded-circle danger-btn-hover"><i class="ti ti-chevron-right fs-14"></i></span>
</div>
</div>
</a>
</div>


<div class="col-xl-3 col-md-6 d-flex">
<a href="student-attendance.php" class="card bg-secondary-transparent border border-5 border-white animate-card flex-fill">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center">
<span class="avatar avatar-lg bg-secondary rounded flex-shrink-0 me-2"><i class="ti ti-moneybag fs-24"></i></span>
<div class="overflow-hidden">
<h6 class="fw-semibold text-default">Finance &amp; Accounts</h6>
</div>
</div>
<span class="btn btn-white secondary-btn-hover avatar avatar-sm p-0 flex-shrink-0 rounded-circle"><i class="ti ti-chevron-right fs-14"></i></span>
</div>
</div>
</a>
</div>

</div>
<div class="row">

<div class="col-xxl-4 col-xl-6 d-flex flex-column">
<div class="card flex-fill">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div>
<h6 class="mb-1">Total Earnings</h6>
<h2>$64,522,24</h2>
</div>
<span class="avatar avatar-lg bg-primary">
<i class="ti ti-user-dollar"></i>
</span>
</div>
</div>
<div id="total-earning"></div>
</div>
<div class="card flex-fill">
<div class="card-body">
<div class="d-flex align-items-center justify-content-between">
<div>
<h6 class="mb-1">Total Expenses</h6>
<h2>$60,522,24</h2>
</div>
<span class="avatar avatar-lg bg-danger">
<i class="ti ti-user-dollar"></i>
</span>
</div>
</div>
<div id="total-expenses"></div>
</div>
</div>


<div class="col-xxl-5 col-xl-12 order-3 order-xxl-2 d-flex">
<div class="card flex-fill">
<div class="card-header  d-flex align-items-center justify-content-between">
<h4 class="card-title">Notice Board</h4>
<a href="notice-board.php" class="fw-medium">View All</a>
</div>
<div class="card-body">
<div class="notice-widget">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="d-flex align-items-center overflow-hidden me-2 mb-2 mb-sm-0">
<span class="bg-primary-transparent avatar avatar-md me-2 rounded-circle flex-shrink-0">
<i class="ti ti-books fs-16"></i>
</span>
<div class="overflow-hidden">
<h6 class="text-truncate mb-1">New Syllabus Instructions</h6>
<p><i class="ti ti-calendar me-2"></i>Added on : 11 Mar 2024</p>
</div>
</div>
<span class="badge bg-light text-dark"><i class="ti ti-clck me-1"></i>20
Days</span>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="d-flex align-items-center overflow-hidden me-2 mb-2 mb-sm-0">
<span class="bg-success-transparent avatar avatar-md me-2 rounded-circle flex-shrink-0">
<i class="ti ti-note fs-16"></i>
</span>
<div class="overflow-hidden">
<h6 class="text-truncate mb-1">World Environment Day Program.....!!!
</h6>
<p><i class="ti ti-calendar me-2"></i>Added on : 21 Apr 2024</p>
</div>
</div>
<span class="badge bg-light text-dark"><i class="ti ti-clck me-1"></i>15
Days</span>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="d-flex align-items-center overflow-hidden me-2 mb-2 mb-sm-0">
<span class="bg-danger-transparent avatar avatar-md me-2 rounded-circle flex-shrink-0">
<i class="ti ti-bell-check fs-16"></i>
</span>
<div class="overflow-hidden">
<h6 class="text-truncate mb-1">Exam Preparation Notification!</h6>
<p><i class="ti ti-calendar me-2"></i>Added on : 13 Mar 2024</p>
</div>
</div>
<span class="badge bg-light text-dark"><i class="ti ti-clck me-1"></i>12
Days</span>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="d-flex align-items-center overflow-hidden me-2 mb-2 mb-sm-0">
<span class="bg-skyblue-transparent avatar avatar-md me-2 rounded-circle flex-shrink-0">
<i class="ti ti-notes fs-16"></i>
</span>
<div class="overflow-hidden">
<h6 class="text-truncate mb-1">Online Classes Preparation</h6>
<p><i class="ti ti-calendar me-2"></i>Added on : 24 May 2024</p>
</div>
</div>
<span class="badge bg-light text-dark"><i class="ti ti-clck me-1"></i>02
Days</span>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-0">
<div class="d-flex align-items-center overflow-hidden me-2 mb-2 mb-sm-0">
<span class="bg-warning-transparent avatar avatar-md me-2 rounded-circle flex-shrink-0">
<i class="ti ti-package fs-16"></i>
</span>
<div class="overflow-hidden">
<h6 class="text-truncate mb-1">Exam Time Table Release</h6>
<p><i class="ti ti-calendar me-2"></i>Added on : 24 May 2024</p>
</div>
</div>
<span class="badge bg-light text-dark"><i class="ti ti-clck me-1"></i>06
Days</span>
</div>
</div>
</div>
</div>
</div>


<div class="col-xxl-3 col-xl-6 order-2 order-xxl-3 d-flex flex-column">
<div class="card flex-fill mb-2">
<div class="card-body">
<p class="mb-2">Total Fees Collected</p>
<div class="d-flex align-items-end justify-content-between">
<h4>$25,000,02</h4>
<span class="badge badge-soft-success"><i class="ti ti-chart-line me-1"></i>1.2%</span>
</div>
</div>
</div>
<div class="card flex-fill mb-2">
<div class="card-body">
<p class="mb-2">Fine Collected till date</p>
<div class="d-flex align-items-end justify-content-between">
<h4>$4,56,64</h4>
<span class="badge badge-soft-danger"><i class="ti ti-chart-line me-1"></i>1.2%</span>
</div>
</div>
</div>
<div class="card flex-fill mb-2">
<div class="card-body">
<p class="mb-2">Student Not Paid</p>
<div class="d-flex align-items-end justify-content-between">
<h4>$545</h4>
<span class="badge badge-soft-info"><i class="ti ti-chart-line me-1"></i>1.2%</span>
</div>
</div>
</div>
<div class="card flex-fill mb-4">
<div class="card-body">
<p class="mb-2">Total Outstanding</p>
<div class="d-flex align-items-end justify-content-between">
<h4>$4,56,64</h4>
<span class="badge badge-soft-danger"><i class="ti ti-chart-line me-1"></i>1.2%</span>
</div>
</div>
</div>
</div>

</div>
<div class="row">

<div class="col-xxl-4 col-xl-6 d-flex">
<div class="card flex-fill">
<div class="card-header  d-flex align-items-center justify-content-between">
<h4 class="card-title">Top Subjects</h4>
<div class="dropdown">
<a href="javascript:void(0);" class="bg-white dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-school-bell  me-2"></i>Class II
</a>
<ul class="dropdown-menu mt-2 p-3">
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Class I
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Class II
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Class III
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Class IV
</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="alert alert-success d-flex align-items-center mb-24" role="alert">
<i class="ti ti-info-square-rounded me-2 fs-14"></i>
<div class="fs-14">
These Result are obtained from the syllabus completion on the respective Class
</div>
</div>
<ul class="list-group">
<li class="list-group-item">
<div class="row align-items-center">
<div class="col-sm-4">
<p class="text-dark">Maths</p>
</div>
<div class="col-sm-8">
<div class="progress progress-xs flex-grow-1">
<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 20%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row align-items-center">
<div class="col-sm-4">
<p class="text-dark">Physics</p>
</div>
<div class="col-sm-8">
<div class="progress progress-xs flex-grow-1">
<div class="progress-bar bg-secondary rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row align-items-center">
<div class="col-sm-4">
<p class="text-dark">Chemistry</p>
</div>
<div class="col-sm-8">
<div class="progress progress-xs flex-grow-1">
<div class="progress-bar bg-info rounded" role="progressbar" style="width: 40%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row align-items-center">
<div class="col-sm-4">
<p class="text-dark">Botany</p>
</div>
<div class="col-sm-8">
<div class="progress progress-xs flex-grow-1">
<div class="progress-bar bg-success rounded" role="progressbar" style="width: 50%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row align-items-center">
<div class="col-sm-4">
<p class="text-dark">English</p>
</div>
<div class="col-sm-8">
<div class="progress progress-xs flex-grow-1">
<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row align-items-center">
<div class="col-sm-4">
<p class="text-dark">Spanish</p>
</div>
<div class="col-sm-8">
<div class="progress progress-xs flex-grow-1">
<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 80%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="row align-items-center">
<div class="col-sm-4">
<p class="text-dark">Japanese</p>
</div>
<div class="col-sm-8">
<div class="progress progress-xs flex-grow-1">
<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 85%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>


<div class="col-xxl-4 col-xl-6 d-flex">
<div class="card flex-fill">
<div class="card-header  d-flex align-items-center justify-content-between">
<h4 class="card-title">Student Activity</h4>
<div class="dropdown">
<a href="javascript:void(0);" class="bg-white dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-calendar me-2"></i>This Month
</a>
<ul class="dropdown-menu mt-2 p-3">
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Month
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Year
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last Week
</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="d-flex align-items-center overflow-hidden p-3 mb-3 border rounded">
<span class="avatar avatar-lg flex-shrink-0 rounded me-2">
<img src="images/student-09.jpg" alt="student">
</span>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">1st place in "Chess”</h6>
<p>This event took place in Our School</p>
</div>
</div>
<div class="d-flex align-items-center overflow-hidden p-3 mb-3 border rounded">
<span class="avatar avatar-lg flex-shrink-0 rounded me-2">
<img src="images/student-12.jpg" alt="student">
</span>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">Participated in "Carrom"</h6>
<p>Justin Lee participated in "Carrom"</p>
</div>
</div>
<div class="d-flex align-items-center overflow-hidden p-3 mb-3 border rounded">
<span class="avatar avatar-lg flex-shrink-0 rounded me-2">
<img src="images/student-11.jpg" alt="student">
</span>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">1st place in "100M”</h6>
<p>This event took place in Our School</p>
</div>
</div>
<div class="d-flex align-items-center overflow-hidden p-3 mb-0 border rounded">
<span class="avatar avatar-lg flex-shrink-0 rounded me-2">
<img src="images/student-10.jpg" alt="student">
</span>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">International conference</h6>
<p class="text-truncate">We attended international conference</p>
</div>
</div>
</div>
</div>
</div>


<div class="col-xxl-4 col-xl-12 d-flex">
<div class="card flex-fill">
<div class="card-header  d-flex align-items-center justify-content-between">
<h4 class="card-title">Todo</h4>
<div class="dropdown">
<a href="javascript:void(0);" class="bg-white dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-calendar me-2"></i>Today
</a>
<ul class="dropdown-menu mt-2 p-3">
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Month
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
This Year
</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item rounded-1">
Last Week
</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<ul class="list-group list-group-flush todo-list">
<li class="list-group-item py-3 px-0 pt-0">
<div class="d-sm-flex align-items-center justify-content-between">
<div class="d-flex align-items-center overflow-hidden me-2 todo-strike-content">
<div class="form-check form-check-md me-2">
<input class="form-check-input" type="checkbox" checked="">
</div>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">Send Reminder to Students</h6>
<p>01:00 PM</p>
</div>
</div>
<span class="badge badge-soft-success mt-2 mt-sm-0">Compeleted</span>
</div>
</li>
<li class="list-group-item py-3 px-0">
<div class="d-sm-flex align-items-center justify-content-between">
<div class="d-flex align-items-center overflow-hidden me-2">
<div class="form-check form-check-md me-2">
<input class="form-check-input" type="checkbox">
</div>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">Create Routine to new staff</h6>
<p>04:50 PM</p>
</div>
</div>
<span class="badge badge-soft-skyblue mt-2 mt-sm-0">Inprogress</span>
</div>
</li>
<li class="list-group-item py-3 px-0">
<div class="d-sm-flex align-items-center justify-content-between">
<div class="d-flex align-items-center overflow-hidden me-2">
<div class="form-check form-check-md me-2">
<input class="form-check-input" type="checkbox">
</div>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">Extra Class Info to Students</h6>
<p>04:55 PM</p>
</div>
</div>
<span class="badge badge-soft-warning mt-2 mt-sm-0">Yet to Start</span>
</div>
</li>
<li class="list-group-item py-3 px-0">
<div class="d-sm-flex align-items-center justify-content-between">
<div class="d-flex align-items-center overflow-hidden me-2">
<div class="form-check form-check-md me-2">
<input class="form-check-input" type="checkbox">
</div>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">Fees for Upcoming Academics</h6>
<p>04:55 PM</p>
</div>
</div>
<span class="badge badge-soft-warning mt-2 mt-sm-0">Yet to Start</span>
</div>
</li>
<li class="list-group-item py-3 px-0 pb-0">
<div class="d-sm-flex align-items-center justify-content-between">
<div class="d-flex align-items-center overflow-hidden me-2">
<div class="form-check form-check-md me-2">
<input class="form-check-input" type="checkbox">
</div>
<div class="overflow-hidden">
<h6 class="mb-1 text-truncate">English - Essay on Visit</h6>
<p>05:55 PM</p>
</div>
</div>
<span class="badge badge-soft-warning mt-2 mt-sm-0">Yet to Start</span>
</div>
</li>
</ul>
</div>
</div>
</div>

</div>
</div>
</div>


<div class="modal fade" id="add_class_routine">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-wrapper">
<div class="modal-header">
<h4 class="modal-title">Add Class Routine</h4>
<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<form action="index.php">
<div class="modal-body">
<div class="row">
<div class="col-md-12">
<div class="mb-3">
<label class="form-label">Teacher</label>
<select class="select">
<option>Select</option>
<option>Erickson</option>
<option>Mori</option>
<option>Joseph</option>
<option>James</option>
</select>
</div>
<div class="mb-3">
<label class="form-label">Class</label>
<select class="select">
<option>Select</option>
<option>I</option>
<option>II</option>
<option>III</option>
<option>IV</option>
</select>
</div>
<div class="mb-3">
<label class="form-label">Section</label>
<select class="select">
<option>Select</option>
<option>A</option>
<option>B</option>
<option>C</option>
</select>
</div>
<div class="mb-3">
<label class="form-label">Day</label>
<select class="select">
<option>Select</option>
<option>Monday</option>
<option>Tuesday</option>
<option>Wedneshday</option>
<option>Thursday</option>
<option>Friday</option>
</select>
</div>
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<label class="form-label">Start Time</label>
<div class="date-pic">
<input type="text" class="form-control timepicker" placeholder="Choose">
<span class="cal-icon"><i class="ti ti-clock"></i></span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="mb-3">
<label class="form-label">End Time</label>
<div class="date-pic">
<input type="text" class="form-control timepicker" placeholder="Choose">
<span class="cal-icon"><i class="ti ti-clock"></i></span>
</div>
</div>
</div>
</div>
<div class="mb-3">
<label class="form-label">Class Room</label>
<select class="select">
<option>Select</option>
<option>101</option>
<option>102</option>
<option>103</option>
<option>104</option>
<option>105</option>
</select>
</div>
<div class="modal-satus-toggle d-flex align-items-center justify-content-between">
<div class="status-title">
<h5>Status</h5>
<p>Change the Status by toggle </p>
</div>
<div class="status-toggle modal-status">
<input type="checkbox" id="user1" class="check">
<label for="user1" class="checktoggle"> </label>
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
<button type="submit" class="btn btn-primary">Add Class Routine</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal fade" id="add_event">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">New Event</h4>
<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
<i class="ti ti-x"></i>
</button>
</div>
<form action="index.php">
<div class="modal-body">
<div class="row">
<div class="col-md-12">
<div>
<label class="form-label">Event For</label>
<div class="d-flex align-items-center flex-wrap">
<div class="form-check me-3 mb-3">
<input class="form-check-input" type="radio" name="event" id="all" checked="">
<label class="form-check-label" for="all">
All
</label>
</div>
<div class="form-check me-3 mb-3">
<input class="form-check-input" type="radio" name="event" id="students">
<label class="form-check-label" for="students">
Students
</label>
</div>
<div class="form-check me-3 mb-3">
<input class="form-check-input" type="radio" name="event" id="staffs">
<label class="form-check-label" for="staffs">
Staffs
</label>
</div>
</div>
</div>
<div class="all-content" id="all-student">
<div class="mb-3">
<label class="form-label">Classes</label>
<select class="select">
<option>All Classes</option>
<option>I</option>
<option>II</option>
<option>III</option>
<option>IV</option>
</select>
</div>
<div class="mb-3">
<label class="form-label">Sections</label>
<select class="select">
<option>All Sections</option>
<option>A</option>
<option>B</option>
</select>
</div>
</div>
<div class="all-content" id="all-staffs">
<div class="mb-3">
<div class="bg-light-500 p-3 pb-2 rounded">
<label class="form-label">Role</label>
<div class="row">
<div class="col-md-6">
<div class="form-check form-check-sm mb-2">
<input class="form-check-input" type="checkbox">Admin
</div>
<div class="form-check form-check-sm mb-2">
<input class="form-check-input" type="checkbox" checked="">Teacher
</div>
<div class="form-check form-check-sm mb-2">
<input class="form-check-input" type="checkbox">Driver
</div>
</div>
<div class="col-md-6">
<div class="form-check form-check-sm mb-2">
<input class="form-check-input" type="checkbox">Accountant
</div>
<div class="form-check form-check-sm mb-2">
<input class="form-check-input" type="checkbox">Librarian
</div>
<div class="form-check form-check-sm mb-2">
<input class="form-check-input" type="checkbox">Receptionist
</div>
</div>
</div>
</div>
</div>
<div class="mb-3">
<label class="form-label">All Teachers</label>
<select class="select">
<option>Select</option>
<option>I</option>
<option>II</option>
<option>III</option>
<option>IV</option>
</select>
</div>
</div>
</div>
<div class="mb-3">
<label class="form-label">Event Title</label>
<input type="text" class="form-control" placeholder="Enter Title">
</div>
<div class="mb-3">
<label class="form-label">Event Category</label>
<select class="select">
<option>Select</option>
<option>Celebration</option>
<option>Training</option>
<option>Meeting</option>
<option>Holidays</option>
</select>
</div>
<div class="col-md-6">
<div class="mb-3">
<label class="form-label">Start Date</label>
<div class="date-pic">
<input type="text" class="form-control datetimepicker" placeholder="15 May 2024">
<span class="cal-icon"><i class="ti ti-calendar"></i></span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="mb-3">
<label class="form-label">End Date</label>
<div class="date-pic">
<input type="text" class="form-control datetimepicker" placeholder="21 May 2024">
<span class="cal-icon"><i class="ti ti-calendar"></i></span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="mb-3">
<label class="form-label">Start Time</label>
<div class="date-pic">
<input type="text" class="form-control timepicker" placeholder="09:10 AM">
<span class="cal-icon"><i class="ti ti-clock"></i></span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="mb-3">
<label class="form-label">End Time</label>
<div class="date-pic">
<input type="text" class="form-control timepicker" placeholder="12:50 PM">
<span class="cal-icon"><i class="ti ti-clock"></i></span>
</div>
</div>
</div>
<div class="col-md-12">
<div class="mb-3">
<div class="bg-light p-3 pb-2 rounded">
<div class="mb-3">
<label class="form-label">Attachment</label>
<p>Upload size of 4MB, Accepted Format PDF</p>
</div>
<div class="d-flex align-items-center flex-wrap">
<div class="btn btn-primary drag-upload-btn mb-2 me-2">
<i class="ti ti-file-upload me-1"></i>Upload
<input type="file" class="form-control image_sign" multiple="">
</div>
<p class="mb-2">Fees_Structure.pdf</p>
</div>
</div>
</div>
<div class="mb-0">
<label class="form-label">Message</label>
<textarea class="form-control" rows="4">Meeting with Staffs on the Quality Improvement s and completion of syllabus before the August,  enhance the students health issue</textarea>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
<button type="submit" class="btn btn-primary">Save Changes</button>
</div>
</form>
</div>
</div>
</div>

</div>


<script src="js/jquery-3.7.1.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<script src="js/bootstrap.bundle.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<script src="js/moment.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>
<script src="js/daterangepicker.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>
<script src="js/bootstrap-datetimepicker.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<script src="js/feather.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<script src="js/jquery.slimscroll.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<script src="js/apexcharts.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>
<script src="js/chart-data.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<script src="js/owl.carousel.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<script src="js/select2.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>

<script src="js/jquery.counterup.min.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>
<script src="js/jquery.waypoints.min.js" type="bf53d738d199abd8fc8b758c-text/javascript">	</script>

<script src="js/script.js" type="bf53d738d199abd8fc8b758c-text/javascript"></script>
<script src="js/rocket-loader.min.js" data-cf-settings="bf53d738d199abd8fc8b758c-|49" defer=""></script>
</body></html>