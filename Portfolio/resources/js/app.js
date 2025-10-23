import './bootstrap';


document.addEventListener('DOMContentLoaded', () => {
    window.toggleMenu = () => {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    };
});