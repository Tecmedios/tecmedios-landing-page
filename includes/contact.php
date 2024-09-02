<section id="contact" class="contact bg-light">
    <article class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-3 contact-call primary-background">
                <h3><?= $contactSectionContent['title']; ?></h3>
                <?php foreach($contactSectionContent['text'] as $pharagraph) : ?>
                    <p><?= $pharagraph; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-6 contact-form">
                <?php require('./includes/form.php'); ?>
            </div>
        </div>
    </article>
</section>