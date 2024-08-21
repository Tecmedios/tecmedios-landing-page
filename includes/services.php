<section id="services" class="services bg-light">
    <article class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3><?php echo $services['sectionTitle'] ?></h3>
                <p><?php echo $services['sectionsubtitle'] ?></p>
            </div>
        </div>
        <div class="row content">
            <?php foreach($services['items'] as $item ) : ?>
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="content-wrapper">
                        <i class="<?php echo $item['icon']; ?>"></i>
                        <h5><?php echo $item['title']; ?></h5>
                        <p><?php echo $item['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
</section>