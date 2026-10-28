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
            background-color: #f5f5f5;
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
            margin-bottom: 20px;
        }
        main .video-container {
            margin-bottom: 30px;
        }
        .video-container iframe {
            width: 100%;
            height: 450px;
            max-width: 800px;
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
        <h1>Astinet</h1>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zq1HX3Q7gTg?si=8LPOo-9LkfwNMV55" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen></iframe>
        </div>
        <p>Penunjang Produktivitas, Jaringan Internet Stabil & Aman</p>
        <div class="buttons">
            <a href="https://youtu.be/zq1HX3Q7gTg?si=Sn5Pri_yVTzweN6Z">Watch Video</a>
            <a href="https://mycarrier.telkom.co.id/id/products/astinet" class="website">Website</a>
        </div>
    </main>
</body>
</html>

<?php include 'footer.php'; ?>
