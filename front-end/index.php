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
            <li><a href="https://desaak.com/">Official site</a></li>
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
            <br><a href="https://desaak.com/business-central" target="_blank"><strong>Meer info</strong></a>
        </p>
    </div>

    <div class="home-section">
        <h1>Sneller resultaten.</h1>
        <p>
            Optimaliseer je bedrijfsprocessen met onze expertise en oplossingen. Profiteer standaard van 
            uitgebreide managementrapportages met Power BI.
            <br><a href="https://desaak.com/oplossingen" target="_blank"><strong>Meer info</strong></a>
        </p>
    </div>

    <div class="home-section">
        <h1>Samen groeien.</h1>
        <p>
            Wij begeleiden je bij de implementatie en digitale transformatie van jouw organisatie. 
            Samen bouwen we aan een efficiëntere en toekomstbestendige werkomgeving.
            <br><a href="https://desaak.com/contact" target="_blank"><strong>Meer info</strong></a>
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
    <a href="https://github.com/your-username" target="_blank" class="button is-large github-button">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="github-icon">
        <path d="M12 0.297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.744.084-.729.084-.729 1.205.084 1.838 1.237 1.838 1.237 1.07 1.835 2.809 1.305 3.495.998.108-.775.418-1.305.76-1.605-2.665-.305-5.466-1.335-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.304-.54-1.527.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.4 3-.405 1.02.005 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.65.24 2.872.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.435.372.825 1.102.825 2.222 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
      </svg>
      <span>GitHub</span>
    </a>

    <div class="footer-text">
      <p class="is-centered">
        <strong>Site</strong> by Jay<br>
        The source code is licensed by <strong>MIT</strong><span class="mit-ty">ty</span>
        <img src="images/Mitty_Narehate_Anime_Square.webp" alt="Mitty" class="footer-img">
      </p>
    </div>
  </footer>
</div>


<script src="script.js">
    window.CHAT_CSRF = "<?= $_SESSION['csrf'] ?>";
</script>
</body>
</html>