const menuToggle = document.querySelector('.menu-toggle');
const overlayMenu = document.getElementById('overlay-menu');

menuToggle.addEventListener('click', function(e) {
    e.preventDefault();
    if (overlayMenu.style.display === 'block') {
        overlayMenu.style.display = 'none';
    } else {
        overlayMenu.style.display = 'block';
    }
});

const closeBtn = document.getElementById('close-overlay');

closeBtn.addEventListener('click', function(e) {
    e.preventDefault();
    overlayMenu.style.display = 'none';
});

//scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('ul');
    if (window.scrollY > 10) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});


//chat
document.addEventListener("DOMContentLoaded", () => {
    const chatRoot = document.getElementById("feedback-chat");
    if (!chatRoot) return;

    const messagesDiv = chatRoot.querySelector("#chat-messages");
    const inputWrapper = chatRoot.querySelector("#chat-input");
    const input = inputWrapper.querySelector("#chat-message");
    const button = inputWrapper.querySelector("#send-message");
    const headerSvg = chatRoot.querySelector("#chat-header svg");

    const page = window.location.pathname;

    const bannedWords = ["swear1", "swear2", "slur1", "slur2", "etc"];

    // JS censor function
    function censorMessage(message) {
        let censored = message;
        bannedWords.forEach(word => {
            const regex = new RegExp(`\\b${word}\\b`, "gi");
            censored = censored.replace(regex, "****");
        });
        return censored;
    }

    function addMessage(text, name, self = false) {
        const msg = document.createElement("div");
        msg.className = self ? "message self" : "message";

        const nameEl = document.createElement("div");
        nameEl.className = "message-name";
        nameEl.textContent = name;
        nameEl.style.fontWeight = "bold";

        const textEl = document.createElement("div");
        textEl.className = "message-text";
        textEl.textContent = text;

        msg.appendChild(nameEl);
        msg.appendChild(textEl);
        messagesDiv.appendChild(msg);
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    }

    async function loadMessages() {
        try {
            const res = await fetch(`/Github/Web-test/back-end/message.php?page=${encodeURIComponent(page)}`);
            const data = await res.json();
            messagesDiv.innerHTML = "";
            data.forEach(m => addMessage(censorMessage(m.message), m.username || "Anonymous"));
        } catch (err) {
            console.error(err);
        }
    }

    async function sendMessage(text, username) {
        const censoredText = censorMessage(text);
        addMessage(censoredText, username, true);

        try {
            const res = await fetch("/Github/Web-test/back-end/message.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ message: text, page: page, username: username })
            });
            const data = await res.json();
            if (data.warning) alert(data.warning);
            else if (data.error) alert(data.error);
        } catch (err) {
            console.error(err);
        }
    }

    // Store username in localStorage
    let userName = localStorage.getItem("chat_name") || null;

    function ensureName() {
        if (!userName) {
            inputWrapper.innerHTML = `
                <input id="chat-name" placeholder="Enter your name" style="flex:1; padding:6px;">
                <button id="set-name" style="padding:6px 10px;">Set Name</button>
            `;
            const setBtn = document.getElementById("set-name");
            const nameInput = document.getElementById("chat-name");
            // Press Enter also works
            nameInput.addEventListener("keydown", e => {
                if (e.key === "Enter") setName();
            });
            setBtn.addEventListener("click", setName);

            function setName() {
                const nameVal = nameInput.value.trim();
                if (!nameVal) return alert("Please enter a name");
                userName = nameVal;
                localStorage.setItem("chat_name", userName);
                inputWrapper.innerHTML = `
                    <input id="chat-message" placeholder="Type your message..." style="flex:1; padding:6px;">
                    <button id="send-message" style="padding:6px 10px;">Send</button>
                `;
                // Re-bind the input and button
                bindSend();
                loadMessages();
            }
            return false;
        }
        return true;
    }

    function bindSend() {
        const newInput = inputWrapper.querySelector("#chat-message");
        const newButton = inputWrapper.querySelector("#send-message");

        function handleSend() {
            if (!userName) return alert("Set your name first!");
            const text = newInput.value.trim();
            if (!text) return;
            newInput.value = "";
            sendMessage(text, userName);
        }

        newButton.addEventListener("click", handleSend);
        newInput.addEventListener("keydown", e => { if (e.key === "Enter") handleSend(); });
    }

    // Toggle chat expand
    headerSvg.addEventListener("click", () => {
        chatRoot.classList.toggle("expanded");
        if (ensureName()) loadMessages();
    });

    // Initial bind if user already has a name
    if (userName) bindSend();
});