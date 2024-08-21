<section id="portfolio" class="portfolio bg-light">
    <article class="container-fluid">
        <div class="grid">
            <?php foreach ($portfolio as $item) : ?>
                <div class="item" style="background-image: url('<?php echo $item['thumbSrc']; ?>');">
                    <div class="hidden-content">
                        <div class="content-wrapper">
                            <h6><?php echo $item['title']; ?></h6>
                            <span><?php echo $item['category']; ?></span>
                            <p><?php echo $item['shortDescription']; ?></p>
                            <a
                                href="<?php echo $item['liveLink']; ?>"
                                target="_blank">
                                Ver en línea <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
</section>