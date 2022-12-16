<?php
/*
Template name: wordpress practice
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo get_template_directory_uri(); ?>/reset.css">
    <title><?php bloginfo('name'); ?><?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header_left">
            <?php $tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
        <<?php echo $tag; ?> class="logo">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="Web Entertainment Design">
          </a>
        </<?php echo $tag; ?>>
          
            <div class="header_left-list">
                <ul>
                    <a href="news.html"><li>NEWS</li></a>
                    <a href="#about"><li>ABOUT</li></a>
                    <a href="#business"><li>BUSINESS</li></a>
                    <a href="#company"><li>COMPANY</li></a>
                </ul>              
            </div>
        </div>
        <a href="contact.html">
            <div class="header_right">
                <p>お問い合わせ</p>
            </div>
        </a>
    </header>
