const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 100) { // Adjust the scroll position where the color change occurs
        navbar.style.backgroundColor = '#333'; // Change to the desired background color
    } else {
        navbar.style.backgroundColor = 'transparent'; // Restore to the initial transparent background
    }
});
