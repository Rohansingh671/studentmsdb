<!DOCTYPE html>
<html lang="en" data-theme="light" data-sidebar="light" data-color="primary" data-layout="default" data-topbar="white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Preskool - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Preskool Admin Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <script src="js/theme-script.js" defer="" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/feather.css">

    <link rel="stylesheet" href="css/tabler-icons.css">

    <link rel="stylesheet" href="css/daterangepicker.css">

    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">

    <link rel="stylesheet" href="css/select2.min.css">

    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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
                                                        <p class="mb-1"><span class="text-dark fw-semibold">Shawn</span> performance in Math is
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
                                                        <p class="mb-1"><span class="text-dark fw-semibold">Sylvia</span> added appointment on
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
                                                            created by <span class="text-dark fw-semibold"> Teressa</span></p>
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
                                    <a class="dropdown-item d-inline-flex align-items-center p-2" href="profile.php"> <i class="ti ti-user-circle me-2"></i>My Profile</a>
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
                                    <a href="javascript:void(0);"><i class="ti ti-layout-dashboard"></i><span>Dashboard</span><span class="menu-arrow" hidden></span></a>
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
                                    <a href="javascript:void(0);" class="active"><i class="ti ti-school"></i><span>Students</span><span class="menu-arrow"></span></a>
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
                                        <li><a href="login-2.php" class="">Login<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li hidden><a href="login.php">Cover</a></li>
                                                <li hidden><a href="login-2.php">Illustration</a></li>
                                                <li hidden><a href="login-3.php">Basic</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two"><a href="javascript:void(0);" class="">Register<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="register.php">Cover</a></li>
                                                <li><a href="register-2.php">Illustration</a></li>
                                                <li><a href="register-3.php">Basic</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot
                                                Password<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="forgot-password.php">Cover</a></li>
                                                <li><a href="forgot-password-2.php">Illustration</a></li>
                                                <li><a href="forgot-password-3.php">Basic</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two"><a href="javascript:void(0);">Reset
                                                Password<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="reset-password.php">Cover</a></li>
                                                <li><a href="reset-password-2.php">Illustration</a></li>
                                                <li><a href="reset-password-3.php">Basic</a></li>
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
            <div class="content content-two">

                <div class="d-md-flex d-block align-items-center justify-content-between mb-3">
                    <div class="my-auto mb-2">
                        <h4 class="mb-1">Edit Student</h4>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.php">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="students.php">Students</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <form action="php/updateStudent.php" method="POST" enctype="multipart/form-data">
                            <?php

                            require_once 'php/allStudentGrid.php';
                            ?>
                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-info-square-rounded fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">Personal Information</h4>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center flex-wrap row-gap-3 mb-4">
                                                <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                    <img src="<?php echo $image_path; ?>">
                                                </div>
                                                <div class="profile-upload">
                                                    <div class="profile-uploader d-flex align-items-center">
                                                        <div class="drag-upload-btn mb-3">
                                                            Upload
                                                            <input type="file" class="form-control image-sign" multiple="" name="image" value="<?php echo $image_path; ?>">
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-primary mb-3">Remove</a>
                                                    </div>
                                                    <p class="fs-12">Upload image size 4MB, Format JPG, PNG, SVG</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-md-6">
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Academic Year</label>
                                                <select class="select" name="academic_year">
                                                    <option>Choose</option>
                                                    <option <?php if ($academic_year == 'June 2024/25') {
                                                                echo 'selected';
                                                            } ?>>June 2024/25</option>
                                                    <option <?php if ($academic_year == 'June 2023/24') {
                                                                echo 'selected';
                                                            } ?>>June 2023/24</option>
                                                    <option <?php if ($academic_year == 'Female') {
                                                                echo 'selected';
                                                            } ?>>June 2022/23</option>
                                                </select>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Admission Number</label>
                                                <input type="text" class="form-control" name="admission_number" value="<?php echo $admission_number; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Admission Date</label>
                                                <input type="date" class="form-control" name="admission_date" value="<?php echo $admission_date; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Roll Number</label>
                                                <input type="text" class="form-control" name="roll_number" value="<?php echo $roll_number; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Status</label>
                                                <select class="select" name="status">
                                                    <option disabled>Select</option>
                                                    <option value="Active" <?php if ($status == 'Active') {
                                                                                echo 'selected';
                                                                            } ?>>Active</option>
                                                    <option value="Inactive" <?php if ($status == 'Inactive') {
                                                                                    echo 'selected';
                                                                                } ?>>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Class</label>
                                                <select class="select" name="class">
                                                    <option disabled>Select</option>
                                                    <option value="I" <?php if ($class == 'I') {
                                                                            echo 'selected';
                                                                        } ?>>I</option>
                                                    <option value="II" <?php if ($class == 'II') {
                                                                            echo 'selected';
                                                                        } ?>>II</option>
                                                    <option value="III" <?php if ($class == 'III') {
                                                                            echo 'selected';
                                                                        } ?>>III</option>
                                                    <option value="IV" <?php if ($class == 'IV') {
                                                                            echo 'selected';
                                                                        } ?>>IV</option>
                                                    <option value="V" <?php if ($class == 'V') {
                                                                            echo 'selected';
                                                                        } ?>>V</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Section</label>
                                                <select class="select" name="section">
                                                    <option disabled>Select</option>
                                                    <option value="A" <?php if ($section == 'A') {
                                                                            echo 'selected';
                                                                        } ?>>A</option>
                                                    <option value="B" <?php if ($section == 'B') {
                                                                            echo 'selected';
                                                                        } ?>>B</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Gender</label>
                                                <select class="select" name="gender">
                                                    <option disabled>Select</option>
                                                    <option value="Male" <?php if ($gender == 'Male') {
                                                                                echo 'selected';
                                                                            } ?>>Male</option>
                                                    <option value="Female" <?php if ($gender == 'Female') {
                                                                                echo 'selected';
                                                                            } ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Blood Group</label>
                                                <select class="select" name="blood_group">
                                                    <option disabled>Select</option>
                                                    <option value="A+" <?php if ($blood_group == 'A+') {
                                                                            echo 'selected';
                                                                        } ?>>A+</option>
                                                    <option value="A-" <?php if ($blood_group == 'A-') {
                                                                            echo 'selected';
                                                                        } ?>>A-</option>
                                                    <option value="B+" <?php if ($blood_group == 'B+') {
                                                                            echo 'selected';
                                                                        } ?>>B+</option>
                                                    <option value="B-" <?php if ($blood_group == 'B-') {
                                                                            echo 'selected';
                                                                        } ?>>B-</option>
                                                    <option value="AB+" <?php if ($blood_group == 'AB+') {
                                                                            echo 'selected';
                                                                        } ?>>AB+</option>
                                                    <option value="AB-" <?php if ($blood_group == 'AB-') {
                                                                            echo 'selected';
                                                                        } ?>>AB-</option>
                                                    <option value="O+" <?php if ($blood_group == 'O+') {
                                                                            echo 'selected';
                                                                        } ?>>O+</option>
                                                    <option value="O-" <?php if ($blood_group == 'O-') {
                                                                            echo 'selected';
                                                                        } ?>>O-</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">House</label>
                                                <select class="select" name="house">
                                                    <option disabled>Select</option>
                                                    <option value="Red" <?php if ($house == 'Red') {
                                                                            echo 'selected';
                                                                        } ?>>Red</option>
                                                    <option value="Blue" <?php if ($house == 'Blue') {
                                                                                echo 'selected';
                                                                            } ?>>Blue</option>
                                                    <option value="Green" <?php if ($house == 'Green') {
                                                                                echo 'selected';
                                                                            } ?>>Green</option>
                                                    <option value="Yellow" <?php if ($house == 'Yellow') {
                                                                                echo 'selected';
                                                                            } ?>>Yellow</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Religion</label>
                                                <select class="select" name="religion">
                                                    <option disabled>Select</option>
                                                    <option value="Hindu" <?php if ($religion == 'Hindu') {
                                                                                echo 'selected';
                                                                            } ?>>Hindu</option>
                                                    <option value="Muslim" <?php if ($religion == 'Muslim') {
                                                                                echo 'selected';
                                                                            } ?>>Muslim</option>
                                                    <option value="Christian" <?php if ($religion == 'Christian') {
                                                                                    echo 'selected';
                                                                                } ?>>Christian</option>
                                                    <option value="Sikh" <?php if ($religion == 'Sikh') {
                                                                                echo 'selected';
                                                                            } ?>>Sikh</option>
                                                    <option value="Buddhist" <?php if ($religion == 'Buddhist') {
                                                                                    echo 'selected';
                                                                                } ?>>Buddhist</option>
                                                    <option value="Jain" <?php if ($religion == 'Jain') {
                                                                                echo 'selected';
                                                                            } ?>>Jain</option>
                                                    <option value="Other" <?php if ($religion == 'Other') {
                                                                                echo 'selected';
                                                                            } ?>>Other</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Category</label>
                                                <select class="select" name="category">
                                                    <option disabled>Select</option>
                                                    <option value="General" <?php if ($category == 'General') {
                                                                                echo 'selected';
                                                                            } ?>>General</option>
                                                    <option value="OBC" <?php if ($category == 'OBC') {
                                                                            echo 'selected';
                                                                        } ?>>OBC</option>
                                                    <option value="SC" <?php if ($category == 'SC') {
                                                                            echo 'selected';
                                                                        } ?>>SC</option>
                                                    <option value="ST" <?php if ($category == 'ST') {
                                                                            echo 'selected';
                                                                        } ?>>ST</option>
                                                    <option value="EWS" <?php if ($category == 'EWS') {
                                                                            echo 'selected';
                                                                        } ?>>EWS</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Primary Contact Number</label>
                                                <input type="text" class="form-control" name="primary_contact" value="<?php echo $primary_contact; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Email Address</label>
                                                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Caste</label>
                                                <input type="text" class="form-control" name="caste" value="<?php echo $caste; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Mother Tongue</label>
                                                <select class="select" name="mother_tongue">
                                                    <option disabled>Select</option>
                                                    <option value="Hindi" <?php if ($mother_tongue == 'Hindi') {
                                                                                echo 'selected';
                                                                            } ?>>Hindi</option>
                                                    <option value="English" <?php if ($mother_tongue == 'English') {
                                                                                echo 'selected';
                                                                            } ?>>English</option>
                                                    <option value="Bengali" <?php if ($mother_tongue == 'Bengali') {
                                                                                echo 'selected';
                                                                            } ?>>Bengali</option>
                                                    <option value="Telugu" <?php if ($mother_tongue == 'Telugu') {
                                                                                echo 'selected';
                                                                            } ?>>Telugu</option>
                                                    <option value="Tamil" <?php if ($mother_tongue == 'Tamil') {
                                                                                echo 'selected';
                                                                            } ?>>Tamil</option>
                                                    <option value="Gujarati" <?php if ($mother_tongue == 'Gujarati') {
                                                                                    echo 'selected';
                                                                                } ?>>Gujarati</option>
                                                    <option value="Marathi" <?php if ($mother_tongue == 'Marathi') {
                                                                                echo 'selected';
                                                                            } ?>>Marathi</option>
                                                    <option value="Punjabi" <?php if ($mother_tongue == 'Punjabi') {
                                                                                echo 'selected';
                                                                            } ?>>Punjabi</option>
                                                    <option value="Kannada" <?php if ($mother_tongue == 'Kannada') {
                                                                                echo 'selected';
                                                                            } ?>>Kannada</option>
                                                    <option value="Malayalam" <?php if ($mother_tongue == 'Malayalam') {
                                                                                    echo 'selected';
                                                                                } ?>>Malayalam</option>
                                                    <option value="Other" <?php if ($mother_tongue == 'Other') {
                                                                                echo 'selected';
                                                                            } ?>>Other</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xxl col-xl-3 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Language Known</label>
                                                <input class="input-tags form-control" type="text" data-role="tagsinput" name="languages_known" value="<?php echo $languages_known; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-user-shield fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">Parents &amp; Guardian Information</h4>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="border-bottom mb-4">
                                        <h5 class="mb-3">Father’s Info</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex align-items-center flex-wrap row-gap-3 mb-4">
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                        <img src="<?php echo $father_image_path; ?>">
                                                    </div>
                                                    <div class="profile-upload">
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn mb-3">
                                                                Upload
                                                                <input type="file" class="form-control image-sign" name="father_image" multiple="" value="<?php echo $father_image_path; ?>">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-primary mb-3">Remove</a>
                                                        </div>
                                                        <p class="fs-12">Upload image size 4MB, Format JPG, PNG, SVG</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Father Name</label>
                                                    <input type="text" class="form-control" name="father_name" value="<?php echo $father_name; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="father_email" value="<?php echo $fatherEmail; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="father_contact" value="<?php echo $father_contact; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Father Occupation</label>
                                                    <input type="text" class="form-control" name="father_occupation" value="<?php echo $father_occupation; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom mb-4">
                                        <h5 class="mb-3">Mother’s Info</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex align-items-center flex-wrap row-gap-3 mb-4">
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                        <img src="<?php echo $mother_image_path; ?>">
                                                    </div>
                                                    <div class="profile-upload">
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn mb-3">
                                                                Upload
                                                                <input type="file" class="form-control image-sign" multiple="" name="mother_image" value="<?php echo $mother_image_path; ?>">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-primary mb-3">Remove</a>
                                                        </div>
                                                        <p class="fs-12">Upload image size 4MB, Format JPG, PNG, SVG</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Mother Name</label>
                                                    <input type="text" class="form-control" name="mother_name" value="<?php echo $mother_name; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="mother_email" value="<?php echo $motherEmail; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="mother_contact" value="<?php echo $mother_contact; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Mother Occupation</label>
                                                    <input type="text" class="form-control" name="mother_occupation" value="<?php echo $mother_occupation; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-3">Guardian Details</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-2" hidden>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <label class="form-label text-dark fw-normal me-2">If Guardian Is</label>
                                                        <div class="form-check me-3 mb-2">
                                                            <input class="form-check-input" type="radio" name="guardian" id="parents" checked="">
                                                            <label class="form-check-label" for="parents">
                                                                Parents
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-2">
                                                            <input class="form-check-input" type="radio" name="guardian" id="guardian">
                                                            <label class="form-check-label" for="guardian">
                                                                Guardian
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="guardian" id="other">
                                                            <label class="form-check-label" for="other">
                                                                Others
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center flex-wrap row-gap-3 mb-4">
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                        <img src="<?php echo $guardian_image_path; ?>">
                                                    </div>
                                                    <div class="profile-upload">
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn mb-3">
                                                                Upload
                                                                <input type="file" class="form-control image-sign" multiple="" name="guardian_image" value="<?php echo $guardian_image_path; ?>">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-primary mb-3">Remove</a>
                                                        </div>
                                                        <p class="fs-12">Upload image size 4MB, Format JPG, PNG, SVG</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Guardian Name</label>
                                                    <input type="text" class="form-control" name="guardian_name" value="<?php echo $guardian_name; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Guardian Relation</label>
                                                    <input type="text" class="form-control" name="guardian_relation" value="<?php echo $guardian_relation; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="guardian_contact" value="<?php echo $guardian_contact; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="guardian_email" value="<?php echo $guardianEmail; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Occupation</label>
                                                    <input type="text" class="form-control" name="guardian_occupation" value="<?php echo $guardian_occupation; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="guardian_address" value="<?php echo $guardian_address; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card" hidden>
                                <div class="card-header bg-light">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-users fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">Sibilings</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="addsibling-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-2">
                                                    <label class="form-label">Sibiling Info</label>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <label class="form-label text-dark fw-normal me-2">Is Sibiling studying in same school</label>
                                                        <div class="form-check me-3 mb-2">
                                                            <input class="form-check-input" type="radio" name="sibling" id="yes" checked="">
                                                            <label class="form-check-label" for="yes">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="sibling" id="no">
                                                            <label class="form-check-label" for="no">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Name</label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option selected="">Ralph Claudia</option>
                                                        <option>Julie Scott</option>
                                                        <option>Maria</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Roll No</label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option selected="">35013</option>
                                                        <option>35011</option>
                                                        <option>35010</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Admission No</label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option selected="">AD9892434</option>
                                                        <option>AD9892433</option>
                                                        <option>AD9892432</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-100">
                                                            <label class="form-label">Class</label>
                                                            <select class="select w-100">
                                                                <option>Select</option>
                                                                <option selected="">I</option>
                                                                <option>II</option>
                                                                <option>III</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label class="form-label">�&nbsp;</label>
                                                            <a href="javascript:void(0);" class="trash-icon ms-3"><i class="ti ti-trash-x"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top pt-4">
                                        <a href="javascript:void(0);" class="add-sibling btn btn-primary d-inline-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add New</a>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-map fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">Address</h4>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Current Address</label>
                                                <input type="text" class="form-control" placeholder="Enter Current Address" name="current_addressOfStudent" value="<?php echo $current_addressOfStudent; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Permanent Address</label>
                                                <input type="text" class="form-control" name="permanent_addressOfStudent" value="<?php echo $permanent_addressOfStudent; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">District</label>
                                                <input type="text" class="form-control" name="districtOfStudent" value="<?php echo $districtOfStudent; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Select Province</label>
                                                <select class="select" name="provinceOfStudent">
                                                    <option disabled selected>Select</option>
                                                    <option value="Province 1" <?php if ($provinceOfStudent == 'Province 1') {
                                                                                    echo 'selected';
                                                                                } ?>>Province 1</option>
                                                    <option value="Madhesh Pradesh" <?php if ($provinceOfStudent == 'Madhesh Pradesh') {
                                                                                        echo 'selected';
                                                                                    } ?>>Madhesh Pradesh</option>
                                                    <option value="Bagmati Province" <?php if ($provinceOfStudent == 'Bagmati Province') {
                                                                                            echo 'selected';
                                                                                        } ?>>Bagmati Province</option>
                                                    <option value="Gandaki" <?php if ($provinceOfStudent == 'Gandaki') {
                                                                                echo 'selected';
                                                                            } ?>>Gandaki</option>
                                                    <option value="Lumbini" <?php if ($provinceOfStudent == 'Lumbini') {
                                                                                echo 'selected';
                                                                            } ?>>Lumbini</option>
                                                    <option value="Karnali" <?php if ($provinceOfStudent == 'Karnali') {
                                                                                echo 'selected';
                                                                            } ?>>Karnali</option>
                                                    <option value="Sudurpaschim" <?php if ($provinceOfStudent == 'Sudurpaschim') {
                                                                                        echo 'selected';
                                                                                    } ?>>Sudurpaschim</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header bg-light d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-bus-stop fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">Transport Information</h4>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch">
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Route</label>
                                                <select class="select" name="transportationRoute">
                                                    <option disabled>Select Transportation Route</option>
                                                    <option <?php if ($transportationRoute == 'NewYork') echo 'selected'; ?>>NewYork</option>
                                                    <option <?php if ($transportationRoute == 'Denver') echo 'selected'; ?>>Denver</option>
                                                    <option <?php if ($transportationRoute == 'Chicago') echo 'selected'; ?>>Chicago</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Vehicle Number</label>
                                                <select class="select" name="vehicleNumber">
                                                    <option>Select</option>
                                                    <option value="AM 54548" <?php if ($vehicleNumber == 'AM 54548') echo 'selected'; ?>>AM 54548</option>
                                                    <option value="AM 64528" <?php if ($vehicleNumber == 'AM 64528') echo 'selected'; ?>>AM 64528</option>
                                                    <option value="AM 123548" <?php if ($vehicleNumber == 'AM 123548') echo 'selected'; ?>>AM 123548</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Pickup Point</label>
                                                <select class="select" name="pickUpPoint">
                                                    <option>Select</option>
                                                    <option value="Cincinatti" <?php if ($pickUpPoint == 'Cincinatti') echo 'selected'; ?>>Cincinatti</option>
                                                    <option value="Illinois" <?php if ($pickUpPoint == 'Illinois') echo 'selected'; ?>>Illinois</option>
                                                    <option value="Morgan" <?php if ($pickUpPoint == 'Morgan') echo 'selected'; ?>>Morgan</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header bg-light d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-building-fortress fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">Hostel Information</h4>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch">
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Hostel</label>
                                                <select class="select" name="hostel">
                                                    <option>Select</option>
                                                    <option value="Phoenix Residence" <?php if ($hostel == 'Phoenix Residence') echo 'selected'; ?>>Phoenix Residence</option>
                                                    <option value="Tranquil Haven" <?php if ($hostel == 'Tranquil Haven') echo 'selected'; ?>>Tranquil Haven</option>
                                                    <option value="Radiant Towers" <?php if ($hostel == 'Radiant Towers') echo 'selected'; ?>>Radiant Towers</option>
                                                    <option value="Nova Nest" <?php if ($hostel == 'Nova Nest') echo 'selected'; ?>>Nova Nest</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Room No</label>
                                                <select class="select" name="hostelRoomNumber">
                                                    <option>Select</option>
                                                    <option value="20" <?php if ($hostelRoomNumber == '20') echo 'selected'; ?>>20</option>
                                                    <option value="22" <?php if ($hostelRoomNumber == '22') echo 'selected'; ?>>22</option>
                                                    <option value="24" <?php if ($hostelRoomNumber == '24') echo 'selected'; ?>>24</option>
                                                    <option value="26" <?php if ($hostelRoomNumber == '26') echo 'selected'; ?>>26</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-file fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">Documents</h4>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1">Update Birth Certificate</label>
                                                    <p>Upload image size of 4MB, Accepted Format PDF</p>
                                                </div>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <div class="btn btn-primary drag-upload-btn mb-2 me-2">
                                                        <i class="ti ti-file-upload me-1"></i>Change Document
                                                        <input type="file" class="form-control image_sign" multiple="" name="birthCertificate" value="<?php echo $birthCertificate_image_path; ?>">
                                                    </div>
                                                    <p class="mb-2">BirthCertificate.pdf</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1">Update Transfer Certificate</label>
                                                    <p>Upload image size of 4MB, Accepted Format PDF</p>
                                                </div>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <div class="btn btn-primary drag-upload-btn mb-2">
                                                        <i class="ti ti-file-upload me-1"></i>Change Document
                                                        <input type="file" class="form-control image_sign" multiple="" name="transferCertificate" value="<?php echo $transferCertificate_image_path; ?>">
                                                    </div>
                                                    <p class="mb-2">TransferCertificate.pdf</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                            <i class="ti ti-medical-cross fs-16"></i>
                                        </span>
                                        <h4 class="text-dark">Medical History</h4>
                                    </div>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-2" hidden>
                                                <label class="form-label">Medical Condition</label>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <label class="form-label text-dark fw-normal me-2">Medical Condition of a Student</label>
                                                    <div class="form-check me-3 mb-2">
                                                        <input class="form-check-input" type="radio" name="medicalConditionSelected" id="good" checked="">
                                                        <label class="form-check-label" for="good">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 mb-2">
                                                        <input class="form-check-input" type="radio" name="medicalConditionSelected" id="bad">
                                                        <label class="form-check-label" for="bad">
                                                            Bad
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="medicalConditionSelected" id="others">
                                                        <label class="form-check-label" for="others">
                                                            Others
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Allergies</label>
                                            <input class="input-tags form-control" type="text" data-role="tagsinput" name="allergiesOfStudent" value="Allergy, Skin Allergy">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Medications</label>
                                            <input class="input-tags form-control" type="text" data-role="tagsinput" name="medicationOfStudent" value="Medecine Name">
                                        </div>
                                    </div>
                                </div>
                            </div>


                                <div class="card">
                                    <div class="card-header bg-light">
                                        <div class="d-flex align-items-center">
                                            <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                                <i class="ti ti-building fs-16"></i>
                                            </span>
                                            <h4 class="text-dark">Previous School Details</h4>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">School Name</label>
                                                    <input type="text" class="form-control" name="previousSchoolName" value="<?php echo $previousSchoolName; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="previousSchoolAddress" value="<?php echo $previousSchoolAddress; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header bg-light">
                                        <div class="d-flex align-items-center">
                                            <span class="bg-white avatar avatar-sm me-2 text-gray-7 flex-shrink-0">
                                                <i class="ti ti-building-bank fs-16"></i>
                                            </span>
                                            <h4 class="text-dark">Other Details</h4>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="mb-4">
                                                    <label class="form-label">Bank Name</label>
                                                    <input type="text" class="form-control" name="bankName" value="<?php echo $bankName; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="mb-4">
                                                    <label class="form-label">Branch</label>
                                                    <input type="text" class="form-control" name="branchOfBank" value="<?php echo $branchOfBank; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="mb-4">
                                                    <label class="form-label">IFSC Number</label>
                                                    <input type="text" class="form-control" name="ifscNumber" value="<?php echo $ifscNumber; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Other Information</label>
                                                    <textarea class="form-control" placeholder="Other Information" rows="3" name="otherInfo"><?php echo $otherInfo; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="button" class="btn btn-light me-3">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="js/jquery-3.7.1.min.js" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <script src="js/bootstrap.bundle.min.js" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <script src="js/moment.js" type="7480e71b2a16261724c725e9-text/javascript"></script>
    <script src="js/daterangepicker.js" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <script src="js/feather.min.js" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <script src="js/jquery.slimscroll.min.js" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <script src="js/select2.min.js" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <script src="js/moment.js" type="7480e71b2a16261724c725e9-text/javascript"></script>
    <script src="js/bootstrap-datetimepicker.min.js" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <script src="js/bootstrap-tagsinput.js" type="7480e71b2a16261724c725e9-text/javascript"></script>

    <script src="js/script.js" type="7480e71b2a16261724c725e9-text/javascript"></script>
    <script src="js/rocket-loader.min.js" data-cf-settings="7480e71b2a16261724c725e9-|49" defer=""></script>
</body>

</html>