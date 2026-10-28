<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antares</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
                   background: linear-gradient(to right, #ffffff, #3D74B6); /* Gradasi dari putih ke biru */

        }
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            text-align: center;
        }
        main h1 {
            font-size: 36px;
            margin-top: 100px;
        }
        main .video-container {
            margin-bottom: 30px;
        }
        .video-container iframe {
            width: 1000px;
            height: 500px;
            max-width: 1000px;
        }
        .buttons {
            display: flex;
            gap: 20px;
        }
        .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #0e76a8;
            color: white;
            border-radius: 5px;
            font-weight: bold;
        }
        .buttons a.website {
            background-color: #7f8c8d;
        }
    
    </style>
</head>
<body>
    <main>
        <h1>METRO</h1>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/AjIo8hMtpa8?si=kUOJ6o6Rop27dkIj" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <p> Telkom Indibiz Metro menghadirkan internet stabil dan andal, memastikan setiap transaksi, 
            meeting online, dan operasional bisnis berjalan lancar tanpa hambatan.</p>
        <div class="buttons">
            <a href="https://youtu.be/AjIo8hMtpa8?si=kUOJ6o6Rop27dkIj">Watch Video</a>
            <a href="https://myindibiz.com/id/metro/" class="website">Website</a>
        </div>
    </main>
</body>
</html>

<?php include 'footer.php'; ?>
