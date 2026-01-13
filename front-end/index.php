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

    <div class="top-home">
        <div class="home-text">
            <h1 class="home-text-h1">
                Optimaliseer jouw bedrijfsprocessen met de kracht van Microsoft
            </h1>
            <p class="home-text-p">
                Maak jouw organisatie slimmer, sneller en toekomstbestendig met Microsoft Business Central en de Microsoft-suite. 
                Als Solutions Partner helpen wij bedrijven digitaliseren en innoveren, zodat systemen naadloos samenwerken en processen optimaal verlopen. 
                Van Business Central tot Power Platform en SharePoint – wij bieden de juiste oplossing voor jouw organisatie.
            </p>
        </div>
        <img src="images/3a62392207b373e557cd73a1f1fb304a41b93464.jpg" 
        alt="home-image" 
        decoding="async" 
        fetchpriority="high">
    </div>

    <section class="home-sections">

    <div class="home-section">
        <h1>Slimmer werken.</h1>
        <p>
            Business Central integreert naadloos met de hele Microsoft-suite. Deel projectplanningen eenvoudig, 
            verstuur offertes rechtstreeks vanuit Outlook en werk efficiënter met Word en Teams.
            <br><strong>Meer info</strong>
        </p>
    </div>

    <div class="home-section">
        <h1>Sneller resultaten.</h1>
        <p>
            Optimaliseer je bedrijfsprocessen met onze expertise en oplossingen. Profiteer standaard van 
            uitgebreide managementrapportages met Power BI.
            <br><strong>Meer info</strong>
        </p>
    </div>

    <div class="home-section">
        <h1>Samen groeien.</h1>
        <p>
            Wij begeleiden je bij de implementatie en digitale transformatie van jouw organisatie. 
            Samen bouwen we aan een efficiëntere en toekomstbestendige werkomgeving.
        </p>
    </div>

</section>


    <div id="feedback-chat">
        <div id="chat-header">
            <svg fill="#000000" 
            width="20px" 
            height="20px" 
            viewBox="0 0 24 24" id="chat" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><path id="primary" d="M18.81,16.23,20,21l-4.95-2.48A9.84,9.84,0,0,1,12,19c-5,0-9-3.58-9-8s4-8,9-8,9,3.58,9,8A7.49,7.49,0,0,1,18.81,16.23Z" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
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

    <div class="footer-home">
          <footer class="footer">
        <button class="button is-large">
          <span>GitHub</span>
        </button>
      </p>
        <div class="">
          <p class="is-centered ">
            <strong>Site</strong> by Jay
            <br>
            The source code is licensed by <strong>MIT</strong>ty.<img src="Mitty_Narehate_Anime_Square.webp" alt="Mitty" class="image is-32x32 is-responsive is-rounded">
          </p>
        </div>
  </footer>
    </div>


<script src="script.js">
    window.CHAT_CSRF = "<?= $_SESSION['csrf'] ?>";
</script>
</body>
</html>