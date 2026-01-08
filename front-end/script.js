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
document.addEventListener("DOMContentLoaded", () => {
    const chatRoot = document.getElementById("feedback-chat");
    if (!chatRoot) return;

    const input = chatRoot.querySelector("#chat-message");
    const button = chatRoot.querySelector("#send-message");
    const messagesDiv = chatRoot.querySelector("#chat-messages");

    const page = window.location.pathname;

    function addMessage(text, self = false) {
        const msg = document.createElement("div");
        msg.className = self ? "message self" : "message";
        msg.textContent = text;
        messagesDiv.appendChild(msg);
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    }

    async function loadMessages() {
        try {
            const res = await fetch(`/Github/Web-test/back-end/message.php?page=${encodeURIComponent(page)}`);
            const data = await res.json();
            messagesDiv.innerHTML = "";
            data.forEach(m => addMessage(m.message));
        } catch (err) {
            console.error("Error loading messages:", err);
        }
    }

    async function sendMessage() {
        const text = input.value.trim();
        if (!text) return;

        input.value = "";
        addMessage(text, true);

        try {
            const res = await fetch("/Github/Web-test/back-end/message.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ message: text, page: page })
            });

            const json = await res.json();
            console.log("Server response:", json);
        } catch (err) {
            console.error("Error sending message:", err);
        }
    }

    button.addEventListener("click", sendMessage);
    input.addEventListener("keydown", e => { if (e.key === "Enter") sendMessage(); });

    loadMessages();
});
