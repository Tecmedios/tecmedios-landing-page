<div class="hero fade-in delay-level1">
    <div class="overlay">
        <div class="container">
            <div class="content-wrapper">
                <h1 class="fade-in delay-level2">
                    <?php echo $hero['title']; ?>
                </h1>
                <p class="fade-in delay-level2">
                    <?php echo $hero['text']; ?>
                </p>
                <div class="buttons fade-in delay-level3">
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
