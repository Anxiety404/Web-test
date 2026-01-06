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
    const input = document.getElementById("chat-message");
    const button = document.getElementById("send-message");
    const messagesDiv = document.getElementById("chat-messages");

    if (!input || !button || !messagesDiv) return; // chat not on this page

    // Add message to chat
    function addMessage(text, self = false) {
        const msg = document.createElement("div");
        msg.className = self ? "message self" : "message";
        msg.textContent = text;
        messagesDiv.appendChild(msg);
        messagesDiv.scrollTop = messagesDiv.scrollHeight; // auto-scroll
    }

    // Send message (local only)
    function sendMessage() {
        const text = input.value.trim();
        if (!text) return;

        addMessage(text, true); // show message in chat
        input.value = "";
    }

    button.addEventListener("click", sendMessage);
    input.addEventListener("keydown", (e) => {
        if (e.key === "Enter") sendMessage();
    });
});
