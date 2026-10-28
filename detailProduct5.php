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
        <h1>OCA Indonesia</h1>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/DDHCQtwtfhs?si=uSzXTqhAl_Lfqzqn" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <p>Along with Telkom Indonesia, OCA continues to innovate keeping up with the development of digital technology 
            for business progress on a national and international level.</p>

            <div class="buttons">
            <a href="https://youtu.be/DDHCQtwtfhs?si=uSzXTqhAl_Lfqzqn">Watch Video</a>
            <a href="https://ocaindonesia.co.id/en/" class="website">Website</a>
        </div>

<h1>OCA Interaction</h1>
<p>The interaction between your company and customers can be done in real-time anywhere, anytime, and through various channels. 
Controlling all channels with ease using one dashboard that is equipped with various features to facilitate communication activities with customers.</p>

<h1>OCA Blast</h1>
<p>You can send messages through various communication channels to millions of customers instantly and automatically. 
    Equipped with features that can help improve the customer experience of message recipients. 
Ranging from contact management, message templates, dynamic content, scheduler, and reporting can help your needs to send messages in large quantities easily.</p>

<h1>OCA API</h1>
<p>API service for you who want to complement the communication platform that you already have without having to change its appearance a lot. We can meet your needs. 
The OCA API can connect the features that OCA has with your systems, applications, and services</p>

<h1>OCA WhatsApp Business Account API</h1>
<p>WhatsApp API Business connects you with customers on WhatsApp in a simple, secure, and reliable way. 
Some of the advantages of WhatsApp Business API are; no agent limitation, they can send messages to more users, and can connect to many systems & features. </p>

<h1>OCA Chatbot</h1>
<p>Chatbot from OCA can help your business to reply to messages from customers faster, easier, always active 24/7, and organized so you can improve customer experience. </p>

        
    </main>
</body>
</html>

<?php include 'footer.php'; ?>
