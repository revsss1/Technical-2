<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Directory</title>
    <link rel="stylesheet" href="styles.css">
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

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f9f9f9;
        }

        td img {
            width: 20%;
            max-width: 100px;
            border-radius: 10px;
        }

        .fruit-name {
            width: 20%;
            font-size: 18px;
            font-weight: bold;
        }

        .fruit-description {
            width: 30%;
            font-size: 14px;
            color: #555;
        }

        .fruit-facts {
            width: 30%;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fruit Directory</h1>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Facts</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $fruits = [
                    ["name" => "Banana", "description" => "Yellow fruit", "facts" => "Rich in potassium"],
                    ["name" => "Apple", "description" => "Red or green fruit", "facts" => "Keeps the doctor away"],
                ];
                foreach ($fruits as $key => $fruit){ 
            ?>
                <tr class='fruit-list'>
                    <td><?php echo $fruit["name"];?></td>
                    <td><?php echo $fruit["name"];?></td>
                    <td><?php echo $fruit["description"];?></td>
                    <td><?php echo $fruit["facts"];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
