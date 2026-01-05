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