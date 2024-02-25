function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
function scrollToAboutMe() {
    window.scrollTo({
        top: document.querySelector('#aboutMeTitle').offsetTop,
        behavior: 'smooth'
    });
}

window.addEventListener('scroll', function () {
    var backToTopBtn = document.getElementById('backToTopBtn');
    if (window.scrollY > 300) {
        backToTopBtn.style.display = 'block';
    } else {
        //backToTopBtn.style.display = 'none';
    }

    var aboutMeBtn = document.getElementById('aboutMeBtn');
    if (window.scrollY > 900) {
        aboutMeBtn.style.display = 'block';
    } else {
        //aboutMeBtn.style.display = 'none';
    }
});

document.getElementById('aboutMeBtn').addEventListener('click', scrollToAboutMe);
document.getElementById('backToTopBtn').addEventListener('click', scrollToTop);
