<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile img {
            border-radius: 50%;
            margin-right: 20px;
        }

        .personal_info {
            max-width: 70%;
        }

        .personal_info h3 {
            margin: 0;
            padding: 0;
        }

        section {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        section:hover {
            background-color: #e0e0e0;
        }

        section h4 {
            margin: 0 0 10px;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <img src="https://t4.ftcdn.net/jpg/00/97/58/97/360_F_97589769_t45CqXyzjz0KXwoBZT9PRaWGHRk5hQqQ.jpg" alt="Profile Picture">
            <div class="personal_info">
                <h3>Karl Alexis Revilla</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum a nulla a elementum. Sed eget semper nulla. Ut ante ligula, vestibulum sit amet ligula vitae, lobortis porttitor ipsum. In sed diam vel ante varius maximus. Maecenas aliquam gravida orci, sit amet luctus purus faucibus at. Donec ac orci leo. Donec sed faucibus ex. Sed eget dictum turpis, eget consectetur nibh. Aenean quis elit ullamcorper, maximus nulla ut, vehicula velit.</p>
            </div>
        </div>
        <a href="CareerObjective.php">
            <section>
                <h4>Career Objective</h4>
                <p></p>
            </section>
        </a>
        <a href="educational_attainment.php">
            <section>
                <h4>Educational Attainment</h4>
            </section>
        </a>
        <a href="skills.php">
            <section>
                <h4>Skills</h4>
            </section>
        </a>
        <a href="affiliation.php">
            <section>
                <h4>Affiliation</h4>
            </section>
        </a>
        <a href="work_experience.php">
            <section>
                <h4>Work Experience</h4>
            </section>
        </a>
    </div>
</body>
</html>
