<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduscope | Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
            background-color: #FFBD59;
        }

        /* Headbar */
        .headbar {
            background-color: #FFBD59;
            color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            position: relative;
            z-index: 10;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .headbar .logo {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            display: flex;
            align-items: center;
        }

        .headbar .logo img {
            width: 180px;
            height: auto;
            margin-right: 10px;
        }

        .sidebar-toggle {
            border: 0px;
            background-color: #FFBD59;
            padding: 5px 12px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 30px;
            transition: border 0.3s, background-color 0.3s, color 0.3s;
        }

        .sidebar-toggle:hover {
            color: #fff;
        }

        /* Profile Menu */
        .profile-menu {
            display: flex;
            align-items: center;
            cursor: pointer;
            border-radius: 20px;
            padding: 5px 5px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-menu img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border: 2px solid #3A89FF;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        .profile-dropdown {
            display: none;
            position: absolute;
            background-color: #fff;
            border-radius: 5px;
            top: 60px;
            right: 30px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 150px;
            border: 2px solid #3A89FF;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-dropdown a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            display: block;
            font-size: 14px;
        }

        .profile-dropdown a:hover {
            background-color: #f1f1f1;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: -250px;
            background: #fff;
            color: #000;
            padding-top: 120px; /* Adjusted to push the options further down */
            transition: left 0.3s ease;
            z-index: 5;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .sidebar.open {
            left: 0;
        }

        .sidebar a {
            text-decoration: none;
            color: #000;
            display: block;
            padding: 15px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #34495e;
            color: white;
        }

        /* Main Content */
        .main-content {
            margin-left: 0;
            padding: 20px;
            transition: margin-left 0.3s ease;
            flex: 1;
            z-index: 0;
            border-radius: 10px;
            background: linear-gradient(135deg, #e6e6e6, white, #e6e6e6);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .main-content h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: bold;
            color: #000;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            border-radius: 8px;
        }

        .card h3 {
            margin-top: 15px;
            font-size: 1.5rem;
        }

        .card p {
            font-size: 1rem;
            color: #777;
        }

        /* Footer */
        .footer {
            background-color: #FFBD59;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Background Gradient for Courses Section */
        .courses-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .courses-section h2 {
            color: white;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 0;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar a {
                padding: 10px;
            }

            .footer {
                font-size: 12px;
            }

            .headbar .logo img {
                width: 120px; /* Adjusted for better portrait appearance */
            }
        }

    </style>
</head>
<body>
    <!-- Headbar -->
    <div class="headbar">
        <button class="sidebar-toggle" onclick="toggleSidebar()"> ☰ </button>
        <div class="logo">
            <img src="layout/img/logo0.png" alt="Logo" style="width: 180px; height: auto;">
        </div>
        <div class="profile-menu" onclick="toggleProfileMenu()">
            <img src="layout/img/murid.jpg" alt="Profile Picture">
            <span>Dimas Lystianto</span>
        </div>
        <div class="profile-dropdown" id="profileDropdown">
            <a href="#">Profile</a>
            <a href="#">Log Out</a>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="#">Home</a>
        <a href="#">Courses</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>My Courses</h1>

        <div class="courses-section">
            <h2>My Courses</h2>
            <div class="card-container">
                <div class="card">
                    <img src="layout/img/english.png" alt="Course Image">
                    <h3>Bahasa Inggris</h3>
                    <p>Pembelajaran mengenai bahasa inggris.</p>
                </div>
                <div class="card">
                    <img src="layout/img/aritmatika.png" alt="Course Image">
                    <h3>Matematika</h3>
                    <p>Teknik perhitungan dengan Matematika dasar</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 CourseHub. All Rights Reserved.
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open");
        }

        function toggleProfileMenu() {
            const profileDropdown = document.getElementById("profileDropdown");
            profileDropdown.style.display = profileDropdown.style.display === "block" ? "none" : "block";
        }

        // Close profile menu if clicked outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.profile-menu')) {
                document.getElementById("profileDropdown").style.display = "none";
            }
        });
    </script>
</body>
</html>
