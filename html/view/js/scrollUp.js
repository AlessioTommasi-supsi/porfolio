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
function scrollToEducation() {

    window.scrollTo({
        top:  1700,
        behavior: 'smooth'
    });
}
function scrollToProject() {

    window.scrollTo({
        top: 2900,
        behavior: 'smooth'
    });
}

function scrollToExperience() {

    window.scrollTo({
        top: 6750,
        behavior: 'smooth'
    });
}

window.addEventListener('scroll', function () {
    var backToTopBtn = document.getElementById('backToTopBtn');
    if (window.scrollY > 0) {
        backToTopBtn.style.display = 'block';
        if (window.scrollY < 700) {
            backToTopBtn.style.transform= 'scale(1.5)';
        }
        else {
            backToTopBtn.style.transform= 'scale(1.0)';
        }
    } else {
        backToTopBtn.style.transform = 'scale(1.0)';
        //backToTopBtn.style.display = 'none';
    }

    var aboutMeBtn = document.getElementById('aboutMeBtn');
    if (window.scrollY > 400) {
        aboutMeBtn.style.display = 'block'; 
        if (window.scrollY < 2000) {
            aboutMeBtn.style.transform = 'scale(1.5)';
        }
        else {
            aboutMeBtn.style.transform = 'scale(1.0)';
        }
    } else {
        aboutMeBtn.style.transform = 'scale(1.0)';
        //backToTopBtn.style.display = 'none';
    }

    var EducationBtn = document.getElementById('EducationBtn');
    if (window.scrollY > 1700) {
        EducationBtn.style.display = 'block';
        if (window.scrollY < 3000) {
            EducationBtn.style.transform = 'scale(1.5)';
        }
        else {
            EducationBtn.style.transform = 'scale(1.0)';
        }
    } else {
        EducationBtn.style.transform = 'scale(1.0)';
        //backToTopBtn.style.display = 'none';
    }
    var ProjectBtn = document.getElementById('ProjectBtn');
    if (window.scrollY > 2700) {
        ProjectBtn.style.display = 'block';
        if (window.scrollY < 6000) {
            ProjectBtn.style.transform = 'scale(1.5)';
        }
        else {
            ProjectBtn.style.transform = 'scale(1.0)';
        }
    } else {
        ProjectBtn.style.transform = 'scale(1.0)';
        //backToTopBtn.style.display = 'none';
    }

    var ExperienceBtn = document.getElementById('ExperienceBtn');
    if (window.scrollY > 5500) {
        ExperienceBtn.style.display = 'block';
        if (window.scrollY < 10000) {
            ExperienceBtn.style.transform = 'scale(1.5)';
        }
        else {
            ExperienceBtn.style.transform = 'scale(1.0)';
        }
    } else {
        ExperienceBtn.style.transform = 'scale(1.0)';
        //backToTopBtn.style.display = 'none';
    }
});


document.getElementById('ExperienceBtn').addEventListener('click', scrollToExperience);
document.getElementById('ProjectBtn').addEventListener('click', scrollToProject);
document.getElementById('EducationBtn').addEventListener('click', scrollToEducation);
document.getElementById('aboutMeBtn').addEventListener('click', scrollToAboutMe);
document.getElementById('backToTopBtn').addEventListener('click', scrollToTop);
document.getElementById('goAboutMeBtn').addEventListener('click', scrollToAboutMe);