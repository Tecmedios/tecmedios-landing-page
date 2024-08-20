<div class="hero">
    <div class="overlay">
        <div class="container">
            <div class="content-wrapper">
                <h1><?php echo $hero['title']; ?></h1>
                <p><?php echo $hero['text']; ?></p>
                <div class="buttons">
                    <?php foreach($hero['buttons'] as $item) : ?>
                        <a href="<?php echo $item['link']; ?>" class="<?php echo $item['btnClass']; ?>">
                            <i class="<?php echo $item['icon']; ?>"></i>
                            <?php echo $item['title']; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
