<head>
    <?php
        $business = App\Models\Setting::find(1);
    ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', ($business->name ?? 'Xulu Mart') . ' | Online Shopping'); ?></title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Shop quality products online at ' . ($business->name ?? 'Xulu Mart') . '. Fast delivery, great prices, and a wide range of categories.'); ?>">
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical', url()->current()); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(\App\Helpers\Media::url('website', optional($business)->favicon, 'images/website/xulumart_favicon.png')); ?>">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/vendor/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/vendor/customFonts.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/select2.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/perfect-scrollbar.css">
    <!-- <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/swiper.min.css"> -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/nice-select.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/photoswipe.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/photoswipe-default-skin.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/plugins/slick.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/style.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets')); ?>/css/custom_style.css">

    <!-- Brand Font: Plus Jakarta Sans + Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Brand Design System (colors + typography overrides) -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/brand-theme.css')); ?>?v=<?php echo e(@filemtime(public_path('frontend/assets/css/brand-theme.css')) ?: time()); ?>">

    <!--aos animation -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- Include AOS JavaScript from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(\App\Helpers\Media::url('website', optional($business)->favicon, 'images/website/xulumart_favicon.png')); ?>">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <!-- Toastr  End -->

    <link rel="preload" href="<?php echo e(asset('')); ?>assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
    crossorigin="anonymous">
    <link rel="preload" href="<?php echo e(asset('assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2')); ?>" as="font" type="font/woff2"
    crossorigin="anonymous">
    <link rel="preload" href="<?php echo e(asset('assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2')); ?>" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="<?php echo e(asset('assets/fonts/wolmart87d5.ttf?png09e')); ?>" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/owl-carousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/animate/animate.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/magnific-popup/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/default-skin/default-skin.min.css">

    <!-- Default CSS -->
    

    <style>

        .scrollable-menu {
            background: var(--brand-primary, #05341A);
        }

        .custom-menu-item.active {
            color: #FEF5EE !important;
            font-weight: bold;
        }

        .btn-dark {
            background-color: var(--brand-secondary, #FD6000) !important;
            border-color: var(--brand-secondary, #FD6000) !important;
        }

        .btn-dark:hover {
            color: #F4EDE7 !important;
        }

        .productAnimationBtn {
            transition: all 0.3s ease-in-out 0s;
            cursor: pointer;
            outline: none;
            position: relative;
            padding: 10px;
        }

        .productAnimationBtn::after {
            content: '';
            border-radius: 100%;
            border: 6px solid #164A33;
            position: absolute;
            z-index: -1;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: ring 1.5s infinite;
        }

        .category-banner4 .inner .content1 {
            position: relative;
            z-index: 9;
            max-width: 92%;
            margin: -40px auto 0;
            padding: 15px 10px;
        }
        @media (max-width: 576px){
        .desktop-show{
            display: none;
        }
        }
        @media (min-width: 576px){
            .mobile-show {
            display: none;
        }
        }




        @media (max-width: 767px) {
            .zoom-card {
                transition: transform 0.3s;
                transform-origin: center bottom;
                
            }

            .mobile-padding {
                padding-left: 35px !important;
                padding-right: 35px !important;
            }
        }

    </style>
     
    <style>
        .rainbow {
            border: 2px solid transparent;
    
            border-image: conic-gradient(
                    from var(--angle),
                    #d53e33 0deg 90deg,
                    #ffeb3b 90deg 180deg,
                    #377af5 180deg 270deg,
                    #9c27b0 270deg 360deg
                )
                1 stretch;
            background: rgb(255 255 255 / var(--opacity));
        }

        /* This is to ensure the color is applied directly to the heart icon */

            .product-thumb .add-to-wishlist i {
                font-size:50px;
                line-height: 100px;
                color: red;
            }
    
    
        @supports (background: paint(houdini)) {
            @property  --opacity {
                syntax: "<number>";
                initial-value: 0.5;
                inherits: false;
            }
    
            @property  --angle {
                syntax: "<angle>";
                initial-value: 0deg;
                inherits: false;
            }
    
            @keyframes  opacityChange {
                to {
                --opacity: 1;
                }
            }
    
            @keyframes  rotate {
                to {
                --angle: 360deg;
                }
            }
    
            .rainbow {
                animation: rotate 7s linear infinite, opacityChange 20s infinite alternate;
            }
    
            .warning {
                display: none;
            }
        }
    
        @media (max-width: 767px) {
            .zoom-card {
                transition: transform 0.3s;
                transform-origin: center bottom;
            }
    
            .mobile-padding {
                padding-left: 35px !important;
                padding-right: 35px !important;
            }
        }
    
    </style>

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="PDTdEC1ficWFAP7kJB9dT2VCXPbuTPJHnNoi_xRVTWw" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QEHH299FKF"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-QEHH299FKF');
    </script>

    <?php echo $__env->yieldContent('style'); ?>
    <?php echo $__env->yieldContent('styles'); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>

</head><?php /**PATH /Users/hassan/Downloads/xulumart/resources/views/layouts/laramart/head.blade.php ENDPATH**/ ?>