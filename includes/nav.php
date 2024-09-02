<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
    <div class="container justify-content-between">
        <a class="navbar-brand" href="<?php echo $navigation[0]['link'] ?>">
            <img src="<?php echo $logoImagePath; ?>" alt="<?php echo $companyName; ?>">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav text-center p-5 p-lg-0">
            <?php foreach($navigation as $item) : ?>
                <li class="nav-item">
                    <a 
                        class="nav-link" 
                        href="<?php echo $item['link']; ?>"
                    >
                        <?php echo $item['title']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbarCollapse = document.getElementById('navbarNavDropdown')
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link')

        navLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                navbarCollapse.classList.remove('show')
            })
        })
    })
</script>