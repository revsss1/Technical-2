<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .header {
            background-color: #333;
            padding: 10px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .header a:hover {
            background-color: #555;
        }

        .header .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        .header nav {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">My Resume</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="career_objective.php">Career Objective</a>
            <a href="educational_attainment.php">Educational Attainment</a>
            <a href="skills.php">Skills</a>
            <a href="affiliation.php">Affiliation</a>
            <a href="work_experience.php">Work Experience</a>
        </nav>
    </div>
</body>
</html>
