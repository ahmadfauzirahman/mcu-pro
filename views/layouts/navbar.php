<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-12 22:56:20 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-14 00:13:30
 */

use yii\helpers\Url;

?>

<nav class="navbar navbar-light navbar-expand-lg topnav-menu">

    <div class="collapse navbar-collapse" id="topnav-menu-content">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="<?= Url::to(['site/index']) ?>" id="topnav-dashboard" aria-haspopup="true" aria-expanded="false">
                    Unit Pemeriksaan
                </a>

            </li>

            <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="<?= Url::to(['site/about']) ?>" id="topnav-dashboard" aria-haspopup="true" aria-expanded="false">
                    Unit Lab. PK
                </a>

            </li> -->

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Spesialis
                    <div class="arrow-down"></div>
                </a>

                <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg dropdown-menu-left" aria-labelledby="topnav-components">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <a href="<?= Url::to(['spesialis-gigi/periksa']) ?>" class="dropdown-item">Gigi</a>
                                <a href="<?= Url::to(['spesialis-mata/periksa']) ?>" class="dropdown-item">Mata</a>
                                <a href="<?= Url::to(['spesialis-tht/periksa']) ?>" class="dropdown-item">THT</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <a href="<?= Url::to(['spesialis-psikologi/periksa']) ?>" class="dropdown-item">Psikologi</a>
                                <a href="<?= Url::to(['spesialis-kejiwaan/periksa']) ?>" class="dropdown-item">Kejiwaan</a>
                                <a href="ui-modals.html" class="dropdown-item">Narkoba</a>
                            </div>
                        </div>
                    </div>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pengaturan
                    <div class="arrow-down"></div>
                </a>

                <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg dropdown-menu-left" aria-labelledby="topnav-components">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <a href="ui-alerts.html" class="dropdown-item">Kategori Setting</a>
                                <a href="ui-buttons.html" class="dropdown-item">Item Setting</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <a href="ui-cards.html" class="dropdown-item">Setting Manual</a>
                                <a href="ui-carousel.html" class="dropdown-item">Setting Global</a>
                            </div>
                        </div>
                    </div>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Master
                    <div class="arrow-down"></div>
                </a>

                <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg dropdown-menu-left" aria-labelledby="topnav-components">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <a href="ui-alerts.html" class="dropdown-item">Data Pelayanan</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <a href="ui-alerts.html" class="dropdown-item">Data Dokter</a>
                            </div>
                        </div>
                    </div>

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="<?= Url::to(['site/about']) ?>" id="topnav-dashboard" aria-haspopup="true" aria-expanded="false">
                    Laporan
                </a>

            </li>


        </ul>
    </div>
</nav>