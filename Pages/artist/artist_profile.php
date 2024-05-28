<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Dashboard - ArtisanLink</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-size: 14px;
        }
        .content {
            padding: 20px;
            padding-top: 76px; /* Space for navbar */
        }
        .profile-header {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        .profile-header img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
            margin-right: 20px;
        }
        .profile-header h4 {
            margin-top: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand mx-5" href="index.html">ArtisanLink</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="padding-left: 50px;">
                <li class="nav-item">
                    <a class="nav-link" href="">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artist_patronage.html">Patronage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artist_system_updates.html">Ticket Transactions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artist_mentor_offers.html">Mentor Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artist_my_courses.html">My Courses</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://via.placeholder.com/30" class="rounded-circle mr-2" alt="Profile Image">John Doe (Artist)
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Edit Profile</a>
                        <a class="dropdown-item" href="#">Help Desk</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login/signin.html">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content container-fluid mt-0">
    <div class="row mt-4">
        <!-- Profile Card Section -->
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-header">
                        <div style="display: flex; align-items: center;">
                            <img src="https://via.placeholder.com/150" alt="Profile Image">
                            <div>
                                <h4>John Doe</h4>
                                <p><strong>Email:</strong> johndoe@example.com</p>
                                <p><strong>Location:</strong> New York, USA</p>
                            </div>
                        </div>
                        <button class="btn btn-primary" style="margin-left: auto; margin-top: -100px;">Edit Profile</button>
                    </div>

                    <!-- Tabbed Content Section -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="false">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Skills</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="p-3">
                                <h5>About Me</h5>
                                <p>I'm a passionate artist specializing in digital illustrations and character design. I love creating art that tells a story and brings characters to life.</p>
                                <p><strong>Joined:</strong> January 2023</p>
                            </div>
                        </div>
                        <!-- Add this code inside the tab-pane with id="portfolio" -->
                        <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                            <img src="https://via.placeholder.com/200" class="card-img-top" alt="Portfolio Item 1" style="max-width: 100%; height: 300px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Portfolio Item 1</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                            <img src="https://via.placeholder.com/200" class="card-img-top" alt="Portfolio Item 2" style="max-width: 100%; height: 300px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Portfolio Item 2</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                            <img src="https://via.placeholder.com/200" class="card-img-top" alt="Portfolio Item 3" style="max-width: 100%; height: 300px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Portfolio Item 3</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more portfolio items as needed -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                            <div class="p-3">
                                <h5>Skills</h5>
                                <p><strong>Skills:</strong> Digital Illustration, Character Design, Concept Art, Graphic Design</p>
                                <!-- Add more detailed skill information or a skills list here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Finished Artworks</div>
                <div class="card-body">
                    <h5 class="card-title">10</h5>
                    <p class="card-text">You have completed 10 drawings.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Pending Requests</div>
                <div class="card-body">
                    <h5 class="card-title">5</h5>
                    <p class="card-text">You have 5 pending requests.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Ratings</div>
                <div class="card-body">
                    <h5 class="card-title">4.5/5</h5>
                    <p class="card-text">Your current rating is 4.5 out of 5.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>