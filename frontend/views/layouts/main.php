<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta content="My portfolio" name="descriptison">
    <meta content="Rancy, Chepchirchir, php" name="keywords">
    
      <!-- Favicons -->
  	<link href="assets/img/favicon.png" rel="icon">
  	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="index.html">Rancy Chep</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
          <li><a href="<?= Url::to(['site/about']) ?>">About</a></li>
          <li><a href="https://rancychep.co.ke/">My Site</a></li>
          <li><a href="https://www.linkedin.com/in/rancy-chepchirchir-06321341/">Resume</a></li>
          <li><a href="https://github.com/RancyChepchirchir">Portfolio</a></li>
          <li><a href="https://wordpress.com/view/rancychepchirchircom.wordpress.com?aff=13200">Creative Writing</a></li>
          <li><a href="<?= Url::to(['site/contact'])?>">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="https://twitter.com/rancy17" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/rancy.kosgey" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.linkedin.com/in/rancy-chepchirchir-06321341/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
            <div class="row">
            <div class="col-lg-4">
                <h2>Publications</h2>

                <p>Effectiveness of commodity futures as opposed to crop insurance in curbing spot price volatility.</p>
                <p>Currency portfolio optimization with an innovative covariance matrix estimator (QMLE). </p>
                <p>Weather Shocks and Commodity Spot Prices</p>
                <p>Credit Scoring Model with AI (With Imbalanced Dataset)</p>
                
                <p><a class="btn btn-default" href="https://rancychep.co.ke/"> My Website &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Skills</h2>

                <p>- Languages: Python, R, C, C++, Matlab/Octave    - Cloud: Amazon Web Services, Google, Azure </p>
                <p>- Databases: PostgreSQL, Hadoop/HDFS, SQL Server </p>
                <p>- ML frameworks: Tensorflow, Keras, SkLearn, PyTorch, Pandas, Seaborn, PySpark, NLTK, OpenCV </p>
                <p>- ML concepts: Regressions, SVM, Clustering, Time Series, NLP, CV, CNN, RNN, LSTM, Auto-encoders </p>
                <p>- Other software: Eviews, SPSS, SAS and Stata </p>
                
                <p><a class="btn btn-default" href="https://www.linkedin.com/in/rancy-chepchirchir-06321341/">LinkedIn &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Creative Writing</h2>

                <p>THE INEVITABLE LIGHT.</p>
                <p>MY ADVICE TO YOU AMORA.</p>
                <p>AN OPEN LETTER (FROM AMORA).</p>
                <p>SIGN OF VICTORY OR FAILURE?.</p>
                <p>AN OPEN LETTER TO MY LIL’ SISSY.</p>

                <p><a class="btn btn-default" href="https://wordpress.com/view/rancychepchirchircom.wordpress.com?aff=13200"> My_Wordpress &raquo;</a></p>
            </div>
        </div>
  </section><!-- End Hero -->
  
    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Rancy Chepchirchir</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
         Designed by <a href="#">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>