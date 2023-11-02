// Side bar
const hamburger = document.getElementById('hamburgerMenu');
const sideBar = document.getElementById('sidebar');
const hamburgerClose = document.getElementById('hamburgerMenuClose');

hamburger.addEventListener('click', function(){
    sideBar.classList.remove('-left-full');
});

hamburgerClose.addEventListener('click', function(){
    sideBar.classList.add('-left-full');
});