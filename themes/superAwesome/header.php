<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>

<header>
    <nav>
        <div class="menu">
            <ul>
                <a href="<?php echo is_home() ? '#about' : home_url('#about');?>">
                    <li>About</li>
                </a>
                <a href="<?php echo is_home() ? '#projects' : home_url('#projects');?>">
                    <li>Projects</li>
                </a>
                <a href="<?php echo is_home() ? '#contact' : home_url('#contact');?>">
                    <li>Contact</li>
                </a>
            </ul>
        </div>
        <button class="hamburger hamburger--3dx" type="button">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>
    </nav>
</header>