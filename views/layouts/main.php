<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <?= Html::csrfMetaTags() ?>

    <?php $this->head() ?>

    <!-- Bootstrap CSS-->
<!--    <link rel="stylesheet" href="themes/vendor/bootstrap/css/bootstrap.min.css">-->
    <!-- Font Awesome CSS-->
<!--    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">-->
    <!-- Custom icon font-->
<!--    <link rel="stylesheet" href="css/fontastic.css">-->
    <!-- Google fonts - Roboto -->
<!--    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">-->
    <!-- jQuery Circle-->
<!--    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">-->
    <!-- Custom Scrollbar-->
<!--    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">-->
    <!-- theme stylesheet-->
<!--    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">-->
    <!-- Custom stylesheet - for your changes-->
<!--    <link rel="stylesheet" href="themes/css/custom.css">-->
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->



    <style type="text/css">

    </style>
</head>
<body>

<?php $this->beginBody() ?>

<!-- Side Navbar -->
<?= $this->render('side-navbar') ?>


<div class="page home-page">
    <!-- navbar-->
    <?= $this->render('navbar') ?>

    <!-- Breadcrumbs-->
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
        </div>
    </div>

    <section class="section-padding">

        <?= Alert::widget() ?>
        <?=$content?>
    </section>

    <!-- footer-->
    <?= $this->render('footer') ?>
</div>

<?php $this->endBody() ?>

<!-- Javascript files-->
<!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/jquery.cookie.js"> </script>-->
<!--<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>-->
<!--<script src="js/jquery.validate.min.js"></script>-->
<!--<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>-->
<!--<script src="themes/js/charts-home.js"></script>-->
<!--<script src="js/front.js"></script>-->
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
<!---->
<script>
    // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    //     function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    //     e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    //     e.src='//www.google-analytics.com/analytics.js';
    //     r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    // ga('create','UA-XXXXX-X');ga('send','pageview');
</script>



</body>
</html>

<?php $this->endPage() ?>