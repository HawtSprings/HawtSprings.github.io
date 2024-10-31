<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotspringing</title>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Styles here (same as provided earlier) -->
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
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 80%;
            padding: 10px;
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
            text-shadow: 2px 2px 4px #8b005f; /* Subtle dark pink shadow */
        }
        p {
            font-size: 1.2em;
            margin: 5px 0 15px;
            text-shadow: 2px 2px 4px #8b005f; /* Subtle dark pink shadow */
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .button, .nah-button {
            display: inline-block;
            padding: 12px 20px;
            font-size: 1em;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .button {
            background-color: #ff69b4;
        }
        .button:hover {
            background-color: #ff1493;
        }
        .nah-button {
            background-color: #8b0000;
            position: relative;
        }
        .nah-button:hover {
            background-color: #b22222;
        }

        /* Responsive design for tablets */
        @media (max-width: 768px) {
            .content {
                top: 35%;
            }
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1em;
            }
            .button, .nah-button {
                padding: 10px 15px;
                font-size: 0.9em;
            }
        }

        /* Responsive design for mobile devices */
        @media (max-width: 480px) {
            .content {
                top: 35%;
                max-width: 100%;
                padding: 5px;
            }
            h1 {
                font-size: 1.8em;
            }
            p {
                font-size: 0.9em;
            }
            .button, .nah-button {
                padding: 8px 12px;
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body>
<video class="background-video" autoplay loop muted playsinline>
    <source src="background.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="content">
    <h1>Ahhhh it's already my bday??</h1>
    <p>We're going to the hot springs!!!</p>
    <p>November 17th ... will figure out the time</p>
    <p>+Dinner TBD</p>

    <div class="button-container">
        <a href="page1.php" class="button">I'm Coming!</a>
        <a href="javascript:void(0);" id="nah-button" class="nah-button" onclick="moveNahButton()">Nah, Mate</a>
    </div>
</div>

<script>
    function moveNahButton() {
        const button = document.getElementById("nah-button");
        const randomX = Math.floor(Math.random() * 60) - 30;
        const randomY = Math.floor(Math.random() * 60) - 30;
        button.style.transform = `translate(${randomX}px, ${randomY}px) scale(0.9)`;
    }
</script>
</body>
</html>