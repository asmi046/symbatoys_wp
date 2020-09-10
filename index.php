<?php get_header(); ?>
<div class="main-bnr">
    <div class="btn-wrap btn-wrap-mobile">
      <a href="#" class="button bg-blue">Играть</a>
      <a href="#" class="button bg-pink">Все призы</a>
    </div>
    <div class="container">

      <div class="main-bnr__item">
            <picture>
                <source srcset="<?php echo get_template_directory_uri();?>/img/bnr-3-min.jpg" media="(max-width: 812px)">
                <img src="<?php echo get_template_directory_uri();?>/img/bnr-1-min.jpg" alt="">
            </picture>
            <div class="btn-wrap">
                <a href="#" class="button bg-blue">Играть</a>
                <a href="#" class="button bg-pink">Все призы</a>
            </div>
      </div>
      
      <div class="main-bnr__item">
            <picture>
                <source srcset="<?php echo get_template_directory_uri();?>/img/bnr-3-min.jpg" media="(max-width: 812px)">
                <img src="<?php echo get_template_directory_uri();?>/img/bnr-1-min.jpg" alt="">
            </picture>
            <div class="btn-wrap">
                <a href="#" class="button bg-blue">Играть</a>
                <a href="#" class="button bg-pink">Все призы</a>
            </div>
      </div>

    </div>
</div>

<?php get_footer(); ?>