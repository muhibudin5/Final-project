<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background-color: #FFBD59;
            overflow-x: hidden;
        }

        /* Headbar */
        .headbar {
            background-color: #FFBD59;
            color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .headbar .logo img {
            width: 150px;
            height: auto;
        }

        .profile-menu {
            display: flex;
            align-items: center;
            cursor: pointer;
            border-radius: 20px;
            padding: 5px 10px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-menu img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border: 2px solid #3A89FF;
            object-fit: cover;
        }

        .profile-dropdown {
            display: none;
            position: absolute;
            background-color: #fff;
            border-radius: 5px;
            top: 70px;
            right: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 150px;
            border: 2px solid #3A89FF;
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
            height: calc(100vh - 60px); /* Mengurangi tinggi untuk menghindari menutupi headbar */
            position: fixed;
            top: 60px; /* Menjauhkan sidebar dari headbar */
            left: -250px;
            background: #fff;
            color: #000;
            padding-top: 20px; /* Memberikan ruang di atas sidebar */
            transition: left 0.3s ease;
            z-index: 5;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column; /* Membuat sidebar menjadi kolom */
        }

        .sidebar.open {
            left: 0;
        }

        .sidebar a {
            text-decoration: none;
            padding: 10px 20px;
            color: #333;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #f1f1f1;
        }

        .sidebar h4 {
            padding: 10px 20px;
            background-color: #FFBD59;
            color: white;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            margin-left: 0;
            margin-top: 60px; /* Menambahkan ruang untuk headbar */
            padding: 20px;
            transition: margin-left 0.3s ease;
            background-color: #f4f4f9;
            margin-right: 20px; /* Memberikan ruang di kanan */
            margin-left: 20px;  /* Memberikan ruang di kiri */
        }

        .content.sidebar-open {
            margin-left: 250px;
        }
    </style>
</head>
<body>
    <!-- Headbar -->
    <div class="headbar d-flex justify-content-between align-items-center">
        <button class="btn btn-light me-3" onclick="toggleSidebar()"> ☰ </button>
        <div class="logo">
            <img src="layout/img/logo0.png" alt="Logo">
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
        <h4>Days</h4>
        <a href="dashboard.html" class="btn btn-primary mx-3 my-2">Kembali ke Dashboard</a>
        <a href="#" onclick="showDayContent(1)">Day 1</a>
        <a href="#" onclick="showDayContent(2)">Day 2</a>
        <a href="#" onclick="showDayContent(3)">Day 3</a>
        <a href="#" onclick="showDayContent(4)">Day 4</a>
        <a href="#" onclick="showDayContent(5)">Day 5</a>
    </div>

    <!-- Main Content -->
    <div class="main-content p-4" id="dayContent">
        <h2>Welcome to Your Course Dashboard</h2>
        <p>Select a day from the sidebar to view the available materials.</p>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
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

        function showDayContent(day) {
            const dayContent = {
                1: `<h2>Day 1</h2><p>Welcome to Day 1 of the course! Below are the available materials:</p><ul class="list-group"><li class="list-group-item"><a href="day1_video.mp4">Video Lecture</a></li><li class="list-group-item"><a href="day1_notes.pdf">PDF Notes</a></li><li class="list-group-item"><a href="day1_presentation.pptx">PowerPoint Presentation</a></li></ul>`,
                2: `<h2>Day 2</h2><p>Welcome to Day 2 of the course! Below are the available materials:</p><ul class="list-group"><li class="list-group-item"><a href="day2_video.mp4">Video Lecture</a></li><li class="list-group-item"><a href="day2_notes.pdf">PDF Notes</a></li><li class="list-group-item"><a href="day2_presentation.pptx">PowerPoint Presentation</a></li></ul>`,
                3: `<h2>Day 3</h2><p>Welcome to Day 3 of the course! Below are the available materials:</p><ul class="list-group"><li class="list-group-item"><a href="day3_video.mp4">Video Lecture</a></li><li class="list-group-item"><a href="day3_notes.pdf">PDF Notes</a></li><li class="list-group-item"><a href="day3_presentation.pptx">PowerPoint Presentation</a></li></ul>`,
                4: `<h2>Day 4</h2><p>Welcome to Day 4 of the course! Below are the available materials:</p><ul class="list-group"><li class="list-group-item"><a href="day4_video.mp4">Video Lecture</a></li><li class="list-group-item"><a href="day4_notes.pdf">PDF Notes</a></li><li class="list-group-item"><a href="day4_presentation.pptx">PowerPoint Presentation</a></li></ul>`,
                5: `<h2>Day 5</h2><p>Welcome to Day 5 of the course! Below are the available materials:</p><ul class="list-group"><li class="list-group-item"><a href="day5_video.mp4">Video Lecture</a></li><li class="list-group-item"><a href="day5_notes.pdf">PDF Notes</a></li><li class="list-group-item"><a href="day5_presentation.pptx">PowerPoint Presentation</a></li></ul>`
            };
            document.getElementById('dayContent').innerHTML = dayContent[day] || `<h2>Course Material</h2><p>Please select a day from the sidebar.</p>`;
        }
    </script>
</body>
</html>
