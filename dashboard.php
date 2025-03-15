<?php
session_start();
include "db_connect.php"; // Ensure database connection works

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit;
}

$user_id = $_SESSION['user_id'];





$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SoumiTattva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { background: linear-gradient(to bottom right, #283c46, #1d262f); color: white; font-family: 'Poppins', sans-serif; }
        .sidebar { width: 250px; background: rgba(28, 44, 58, 0.8); height: 100vh; padding: 20px; position: fixed; }
        .sidebar a { color: white; text-decoration: none; padding: 15px; display: block; margin-bottom: 10px; border-radius: 10px; }
        .sidebar a:hover { background: rgba(255, 255, 255, 0.1); }
        .main-content { margin-left: 270px; padding: 40px; }
        .test-card { background: rgba(255, 255, 255, 0.08); border-radius: 20px; padding: 30px; text-align: center; cursor: pointer; }
        .test-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); }
        a {
            text-decoration: none; 
            color: inherit;
            display: block;
        }

        /* Ensure test-card link looks normal */
        a .test-card {
            color: white;
        }

        /* Optional: Prevent hover effect on clicked links */
        a:hover {
            color: inherit;
            background: none;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>SoumiTattva</h3>
        <hr>
        <p>"Build up your health. Do not dwell in silence upon your sorrows."<br>-Swami Vivekananda</p>
        <hr>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main-content">
        <h2>Welcome to Your Mental Health Dashboard</h2>
        <p>Select an assessment to begin.</p>
        <hr>
        <h4>Your Very Own Journal</h4>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="week.php">
                    <div class="test-card">
                        <h3>Write about how you feel</h3>
                    </div>
                </a>
            </div>
        </div>
        <h4>Pre-Loaded Tests</h4>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test.php">
                    <div class="test-card">
                        <h3>UCLA Loneliness Scale</h3>
                    </div>
                </a>
            </div>
        </div>
        <h5>Resilience and Stress Assessment</h5>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test1.php">
                    <div class="test-card">
                        <h3>Perceived Stress Scale</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test2.php">
                    <div class="test-card">
                        <h3>Depression Anxiety Stress Scales (DASS 21)</h3>
                    </div>
                </a>
            </div>
        </div>
        <h5>General Well-being and Psychological Fitness</h5>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test3.php">
                    <div class="test-card">
                        <h3>The WHO-Five Well-Being Index (WHO-5)</h3>
                    </div>
                </a>
            </div>
        </div>
        <h5>Alcohol and Substance Use Screening</h5>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test4.php">
                    <div class="test-card">
                        <h3>CAGE</h3>
                    </div>
                </a>
            </div>
        </div>
        <h5>Depression and Anxiety Screening</h5>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test5.php">
                    <div class="test-card">
                        <h3>GAD-7 Anxiety</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test6.php">
                    <div class="test-card">
                        <h3>PHQ-9 (Patient Health Questionnaire-9)</h3>
                    </div>
                </a>
            </div>
        </div>
        <h5>PTSD and Trauma Screening</h5>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test7.php">
                    <div class="test-card">
                        <h3>PCL-5 (PTSD Checklist for DSM-5)</h3>
                    </div>
                </a>
            </div>
        </div>
        <h5>Moral Injury and Coping Mechanisms</h5>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test8.php">
                    <div class="test-card">
                        <h3>IES-R</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="test9.php">
                    <div class="test-card">
                        <h3>Brief COPE Inventory</h3>
                    </div>
                </a>
            </div>
        </div>
        
        
    </div>
    
</body>
</html>
