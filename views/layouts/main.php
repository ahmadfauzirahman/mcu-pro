<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-12 22:53:58 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-12 23:34:14
 */


/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\Breadcrumbs as ComponentsBreadcrumbs;
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
    <script>
        const baseUrl = '<?= Yii::$app->homeUrl ?>';
    </script>
    <?php $this->head() ?>
</head>

<body data-layout="horizontal" data-topbar="dark">
    <?php $this->beginBody() ?>
    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?= Url::base() ?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= Url::to('@web/img/logo-mcu.png') ?>" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= Url::to('@web/img/logo-mcu.png') ?>" alt="" height="18">
                                </span>
                            </a>

                            <a href="<?= Url::base() ?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= Url::to('@web/img/logo-mcu.png') ?>" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= Url::to('@web/img/logo-mcu.png') ?>" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <?= $this->render('navbar') ?>
                        </div>
                    </div>

                    <div class="d-flex">
                        <?= $this->render('navbar-right') ?>
                    </div>
                </div>
            </header>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18"><?= $this->title ?></h4>

                                <div class="page-title-right">
                                    <?= ComponentsBreadcrumbs::widget([
                                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    ]) ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <?= Alert::widget() ?>
                    <?= $content ?>
                    <!-- end row -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Meckup
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by TIMS
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <?= $this->render('right-sidebar') ?>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>