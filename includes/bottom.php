<section class="bottom">
    <article class="container fade-in delay-level3">
        <div class="row">
            <div class="col-lg-4 mb-5 about">
                <div class="content-wrapper">
                    <img src="./assets/white-logo.png" alt="Logo">
                    <small><?php echo $companySlogan; ?></small>
                </div>
            </div>
            <div class="col-lg-4 mb-5 contact">
                <h6>Datos de contacto</h6>
                <div class="contact-wrapper">
                    <?php foreach($contact as $contactItem) : ?>
                        <a 
                            href="<?php echo $contactItem['link']; ?>"
                            title="<?php echo $contactItem['title']; ?>"
                            target="_blank"
                        >
                            <i class="<?php echo $contactItem['icon']; ?>"></i>
                            <?php echo $contactItem['title']; ?>
                        </a>
                    <?php  endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4 mb-5 links">
                <h6>Seguinos en las redes</h6>
                <div class="links-wrapper">
                    <?php foreach($socialLinks as $socialLink) : ?>
                        <a 
                            href="<?php echo $socialLink['link']; ?>"
                            title="<?php echo $socialLink['title']; ?>"
                            target="_blank"
                        >
                            <i class="<?php echo $socialLink['icon']; ?>"></i>
                        </a>
                    <?php  endforeach; ?>
                </div>
            </div>
        </div>
    </article>
</section>