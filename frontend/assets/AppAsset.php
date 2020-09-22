<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/custom.css',
        'theme/assets/vendor/bootstrap/css/bootstrap.min.css',
        'theme/assets/vendor/icofont/icofont.min.css',
        'theme/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
        'theme/assets/vendor/boxicons/css/boxicons.min.css',
        'theme/assets/vendor/venobox/venobox.css',
        'theme/assets/vendor/aos/aos.css',
        'theme/assets/css/style.css',
   ];
    public $js = [
        'theme/assets/vendor/jquery/jquery.min.js',
        'theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'theme/assets/vendor/jquery.easing/jquery.easing.min.js',
        'theme/assets/vendor/php-email-form/validate.js',
        'theme/assets/vendor/waypoints/jquery.waypoints.min.js',
        'theme/assets/vendor/counterup/counterup.min.js',
        'theme/assets/vendor/owl.carousel/owl.carousel.min.js',
        'theme/assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'theme/assets/vendor/venobox/venobox.min.js',
        'theme/assets/vendor/aos/aos.js',
        'assets/js/main.js',
        'theme/js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}