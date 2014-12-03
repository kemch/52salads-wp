<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>52 Salads</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/main.css">
        <script src="<? bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div class="container">
            <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="entry">
                  <? the_content(); ?>
                </div>
            <? endwhile; else : ?>
                <p><? _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <? endif; ?>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<? bloginfo('template_directory'); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<? bloginfo('template_directory'); ?>/js/plugins.js"></script>
        <script src="<? bloginfo('template_directory'); ?>/js/main.js"></script>

    </body>
</html>
