<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <li class="logo">
            <a href="index.php">
                <img src="images/logo-black.svg" alt="Logo">
            </a>
        </li>


        <li class="icon-link">
            <a href="#" class="menu-toggle">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 7a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1zm0 5a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1zm0 5a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1z" fill="#0D0D0D"/></svg>
            </a>
        </li>
    </ul>

    <div id="overlay-menu">
        <ul>
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
            <li><a href="#">Option 4</a></li>
            <li><a href="#" id="close-overlay" class="close-btn">✖</a></li>
        </ul>
    </div>

    <?php
    // echo "Fuuu!";
    ?>

    <div>
        <h1 class="home-text-h1">
            Gibberish
        </h1>
        <p class="home-text-p">
            More gibberish, the gibberish, but the one and the only gibberish.
        </p>
    </div>

    <div>
        <img src="images/3a62392207b373e557cd73a1f1fb304a41b93464.jpg" alt="home-image">
    </div>

    <div id="feedback-chat">
        <div id="chat-header">
            <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24" id="chat" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><path id="primary" d="M18.81,16.23,20,21l-4.95-2.48A9.84,9.84,0,0,1,12,19c-5,0-9-3.58-9-8s4-8,9-8,9,3.58,9,8A7.49,7.49,0,0,1,18.81,16.23Z" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
            Chat
        </div>

        <div id="chat-messages"></div>

        <div id="chat-input">
            <input
                type="text"
                id="chat-message"
                placeholder="Type your message..."
                maxlength="200"
                autocomplete="off"
            >
            <button id="send-message">Send</button>
        </div>
    </div>


<script src="script.js">
    window.CHAT_CSRF = "<?= $_SESSION['csrf'] ?>";
</script>
</body>
</html>