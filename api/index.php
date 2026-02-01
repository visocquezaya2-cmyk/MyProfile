<?php
$project = "Student Information";
$name = "Name: Quezaya Visoc"; 
$Address = "Address: Dapdap, Catarman, Liloan, Cebu"; 
$email = "Email: quezayavisoc9@gmail.com"; 
$Year = "Year: 2nd Year";
$program = "Program: BSIT";
$Section = "Section: IT22C"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fad0c4, #fbc2eb, #a6c1ee);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
            padding: 30px;
            text-align: center;
        }

        h1 {
            color: #e74c3c;
            font-size: 28px;
            margin-bottom: 20px;
            border-bottom: 3px solid #e74c3c;
            display: inline-block;
            padding-bottom: 5px;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
            color: #2c3e50;
        }

        .highlight {
            font-weight: bold;
            color: #3498db;
        }

        .card {
            background: #f1f8ff;
            border-left: 5px solid #3498db;
            margin: 10px 0;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $project; ?></h1>
        <div class="card"><p class="highlight"><?php echo $name; ?></p></div>
        <div class="card"><p><?php echo $Address; ?></p></div>
        <div class="card"><p><?php echo $email; ?></p></div>
        <div class="card"><p><?php echo $Year; ?></p></div>
        <div class="card"><p><?php echo $program; ?></p></div>
        <div class="card"><p><?php echo $Section; ?></p></div>
    </div>
</body>
</html>
