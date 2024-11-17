<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Profile</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .profile-header {
            background-color: #ffcc4d;
            color: white;
            padding: 20px;
            border-radius: 8px;
        }
        .profile-header h1 {
            font-size: 2rem;
        }
        .profile-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .profile-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .course-info {
            font-size: 1.1rem;
            color: #555;
        }
        .btn-back {
            background-color: #0066cc;
            color: white;
            margin-left: 20px;
        }
        .course-list {
            list-style-type: none;
            padding-left: 0;
        }
        .course-list li {
            background-color: #f1f1f1;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
            font-size: 1rem;
        }
        footer {
            background-color: #0066cc;
            color: white;
            padding: 10px;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<!-- Header Bar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center py-3" style="background-color: #ffcc4d;">
                <a href="dashboard.html" class="btn btn-back">Back to Dashboard</a>
                <h4 class="ms-3">Course Profile</h4>
            </div>
        </div>
    </div>
</div>

<!-- Profile Section -->
<div class="container my-5">
    <div class="row justify-content-center">
        <!-- Profile Card -->
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="profile-card">
                <div class="text-center">
                    <!-- Profile Image with Placeholder -->
                    <img src="https://via.placeholder.com/150" alt="Instructor Image">
                    <h3>John Doe</h3>
                    <p class="course-info">Instructor of Multiple Courses</p>
                </div>
                <div class="mt-4">
                    <h4>Course Details</h4>
                    <p class="course-info">This is an advanced course in web development, designed for those who want to enhance their skills in building modern web applications.</p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Duration:</strong> 8 Weeks</li>
                        <li class="list-group-item"><strong>Level:</strong> Advanced</li>
                        <li class="list-group-item"><strong>Start Date:</strong> January 15, 2024</li>
                        <li class="list-group-item"><strong>Price:</strong> $299</li>
                    </ul>
                </div>

                <!-- List of Courses -->
                <div class="mt-4">
                    <h4>Courses Taught by John Doe</h4>
                    <ul class="course-list">
                        <li>Advanced Web Development</li>
                        <li>Responsive Design with HTML & CSS</li>
                        <li>JavaScript for Beginners</li>
                        <li>Node.js and Express.js Essentials</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="container">
    <footer class="py-3 text-center">
        <p>&copy; 2024 Course Platform</p>
    </footer>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
