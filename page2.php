<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omg slayyyy</title>
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
            top: 20%; /* Adjusted for visual balance */
            left: 50%;
            transform: translateX(-50%);
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
            margin: 10px 0;
        }
        .link {
            color: #ff69b4; /* Pink color for links */
            text-decoration: none;
            font-weight: bold;
        }
        .link:hover {
            color: #ff1493;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<video class="background-video" autoplay loop muted playsinline>
    <source src="background.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="content">
    <h1>Omg slayyyy</h1>
    <p>Mornington Peninsula Hot Springs</p>
    <p>Website: <a href="https://www.peninsulahotsprings.com/" target="_blank" class="link">https://www.peninsulahotsprings.com/</a></p>
    <p>Address: <a href="https://maps.app.goo.gl/e6jDLHv4dXkCmBKt5" target="_blank" class="link">https://maps.app.goo.gl/e6jDLHv4dXkCmBKt5</a></p>
    <p>Price: $55</p>
</div>
</body>
</html>
