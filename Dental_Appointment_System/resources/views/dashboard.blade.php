<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        /* Navbar styles */
        .navbar-custom {
            background-color: white;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            border-bottom: 2px solid grey;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-custom img {
            height: 30px;
        }
        .navbar-custom .user-info {
            display: flex;
            align-items: center;
        }
        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        /* Sidebar */
        .sidebar {
            background-color: #c68383;
            width: 220px;
            height: calc(100vh - 60px); /* Full height minus navbar */
            position: fixed;
            top: 60px; /* Below navbar */
            left: 0;
            padding-top: 20px;
        }
        .sidebar ul {
            padding: 0;
            list-style: none;
        }
        .sidebar li {
            padding: 15px 20px;
            display: flex;
            align-items: center;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px; /* Adds space between icon and text */
            font-size: 16px;
        }
        .sidebar a:hover {
            background-color: #a96363;
            border-radius: 5px;
        }
        /* Main content */
        .content {
            margin-left: 230px;
            margin-top: 80px; /* Space for navbar */
            padding: 20px;
        }
        .banner {
            background-color: #b39ddb;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .doctor-img {
            height: 100px;
        }
        .card-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .card {
            width: 200px;
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar-custom">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo"> <!-- Replace with actual logo -->
            <span class="ms-2">Dental Clinic</span>
        </div>
        <div class="user-info">
            <img src="https://via.placeholder.com/40" alt="User Avatar">
            <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
        </div>
    </div>

        <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="#"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="#"><i class="fa-solid fa-calendar-check"></i> Appointment</a></li>
            <li><a href="#"><i class="fa-solid fa-clock-rotate-left"></i> Session</a></li>
            <li><a href="#"><i class="fa-solid fa-user"></i> Account</a></li>
            <li class="mt-5"><a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="banner">
            <div>
                <h2>Lorem Ipsum</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <img src="https://via.placeholder.com/100" alt="Doctor" class="doctor-img">
        </div>

        <div class="card-container">
            <div class="card">
                <div class="placeholder-img" style="background:#ddd; height:100px;"></div>
                <h5 class="mt-2"><b>Doc. Charlize</b></h5>
                <p>Root canal treatment</p>
                <button class="btn btn-light btn-sm">Book now</button>
            </div>
            <div class="card">
                <div class="placeholder-img" style="background:#ddd; height:100px;"></div>
                <h5 class="mt-2"><b>Doc. Charlize</b></h5>
                <p>Root canal treatment</p>
                <button class="btn btn-light btn-sm">Book now</button>
            </div>
            <div class="card">
                <div class="placeholder-img" style="background:#ddd; height:100px;"></div>
                <h5 class="mt-2"><b>Doc. Charlize</b></h5>
                <p>Root canal treatment</p>
                <button class="btn btn-light btn-sm">Book now</button>
            </div>
            <div class="card">
                <div class="placeholder-img" style="background:#ddd; height:100px;"></div>
                <h5 class="mt-2"><b>Doc. Charlize</b></h5>
                <p>Root canal treatment</p>
                <button class="btn btn-light btn-sm">Book now</button>
            </div>
        </div>
    </div>

</body>
</html>
