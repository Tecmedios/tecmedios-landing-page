window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar')
    if (window.scrollY > 50) {
        navbar.classList.add('bg-light')
    } else {
        navbar.classList.remove('bg-light')
    }
})