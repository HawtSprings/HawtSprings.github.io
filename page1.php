<?php
include 'db.php'; // Include the database connection

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']); // Sanitize user input

    // Insert the name into the database
    $stmt = $pdo->prepare("INSERT INTO names (name) VALUES (:name)");
    $stmt->bindParam(':name', $name);
    $stmt->execute();

    // Redirect to page2.php after saving the name
    header("Location: page2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayy!!!</title>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        /* Fullscreen video styling */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            font-family: 'Cherry Bomb One', cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .content {
            position: absolute;
            top: 15%; /* Moved up significantly */
            left: 50%;
            transform: translateX(-50%); /* Centered horizontally */
            max-width: 80%;
            padding: 20px;
            z-index: 1; /* Ensure content is above video */
            text-shadow: 2px 2px 4px #8b005f; /* Subtle dark pink shadow */
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
        }
        p {
            font-size: 1.2em;
            margin: 10px 0 20px;
        }
        .input-box {
            padding: 12px;
            font-size: 1em;
            border: 2px solid #ff69b4;
            border-radius: 5px;
            background-color: #ffebf1; /* Light pink background */
            color: #8b005f;
            width: 100%;
            max-width: 300px;
            text-align: left; /* Align placeholder text to the left */
            margin: 10px 0;
        }
        .button {
            display: inline-block;
            padding: 12px 20px;
            font-size: 1em;
            color: white;
            background-color: #ff69b4;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .button:hover {
            background-color: #ff1493;
        }
    </style>
<body>
<video class="background-video" autoplay loop muted playsinline>
    <source src="background.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="content">
    <h1>Yayy!!!</h1>
    <p>I'm so glad you're coming!!</p>
    <p>Add your name below :3</p>
    <form action="page1.php" method="post">
        <input type="text" name="name" placeholder="Name please :3" class="input-box" required>
        <button type="submit" class="button">Done</button>
    </form>
</div>
</body>
</html>
