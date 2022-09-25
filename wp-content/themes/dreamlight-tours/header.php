<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
        <title><?php  bloginfo('name'); ?>>>Home</title>
</head>
<body>
    <nav>
        <div class="logo">
    
            <img src="<?php the_field('website_logo','options'); ?>">
        </div>
        <ul class="nav-ul">
            <a href="<?php echo site_url('/'); ?>"><li class="hover-underline-animation">Home</li>
            </a>
            <a href="<?php echo site_url('/about-us'); ?>">
                <li class="hover-underline-animation">About Us</li>
            </a>
            <a href="<?php echo site_url('/tour-package'); ?>">
                <li class="hover-underline-animation">Tour Package</li>
            </a>
            <a href="<?php echo site_url('/contacts'); ?>">
                <li class="hover-underline-animation">Contacts</li>
            </a>
            <a href="<?php echo site_url('/services'); ?>">
                <li class="hover-underline-animation">Services</li>
            </a>
            <a href="<?php echo site_url('/tour-destination'); ?>">
                <li class="hover-underline-animation">Tour Destination</li>
            </a>
        </ul>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="<?php echo site_url('/') ?>">Home</a>
            <a href="<?php echo site_url('/about-us') ?>">About</a>
            <a href="<?php echo site_url('/services'); ?>">Our Services</a>
            <a href="<?php echo site_url('contacts'); ?>">Our Contacts</a>
          </div>
        <div class="nav-btn">
            <!-- <button class="log">LOG IN</button>
            <button class="sign">Sign Up</button> -->
            <div class="nav-bar">
                <button class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars home"></i></button>
            </div>
            <div class="call-btn">
                <i class="fa-solid fa-phone"></i>
                <?php the_field('office_contact_number','option'); ?>
            </div>
        </div>
    </nav>