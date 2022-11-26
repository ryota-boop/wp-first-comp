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
            <a href="index.html">
            <svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	            y="0px" width="80px" height="20.73px" viewBox="0 0 540 140" enable-background="new 0 0 540 140" xml:space="preserve">
                <g>
	                <path d="M170.6,1l-38.644,138h-15.292l-31.5-114.649L53.937,139H39.102L0,1h17.49l30.311,110.711L77.746,1H93.77l29.945,111.719
		            L153.934,1H170.6z"/>
	                <path d="M342.245,139h-89.833V1h89.833v14.834h-72.8v40.2h70.968V70.87h-70.968v53.295h72.8V139z"/>
	                <path d="M424.515,139V1h33.24c19.414,0,34.675,2.534,45.786,7.6c11.11,5.068,19.887,12.806,26.328,23.214
		            c6.44,10.409,9.66,23.184,9.66,38.324c0,18.804-6.09,34.98-18.269,48.533C509.081,132.224,488.035,139,458.122,139H424.515z
		            M441.547,15.468v109.063h17.766c21.793,0,37.636-4.609,47.526-13.827c9.89-9.218,14.833-22.832,14.833-40.842
		            c0-17.093-5.007-30.432-15.017-40.018c-10.014-9.584-25.794-14.377-47.343-14.377H441.547z"/>
                </g>
            </svg>
            </a>
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
