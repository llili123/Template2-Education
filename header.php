<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title><?php get_bloginfo('name'); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link rel="shortcut icon" href="favicon.ico"/>
        <?php wp_head(); ?>
        <script>
            jQuery(document).ready(function () {
                Layout.init();
            });
        </script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-on-scroll" class to the body element to set fixed header layout -->
    <body  class="page-header-fixed">

        <!-- BEGIN MAIN LAYOUT -->
        <!-- Header BEGIN -->
        <header class="page-header">
            <nav class="navbar navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <a class="navbar-brand" href="#intro">
                            <img class="logo-default" src="<?php bloginfo('template_directory'); ?>/assets/onepage2/img/logo_default.png" alt="Logo">
                            <img class="logo-scroll" src="<?php bloginfo('template_directory'); ?>/assets/onepage2/img/logo_scroll.png" alt="Logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li class="page-scroll active">
                                <a href="#intro">首页</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#about">关于我们</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#features">业务范围</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#team">师资团队</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#clients">合作机构</a>
                            </li>                    
                            <li class="page-scroll">
                                <a href="#portfolio">教学环境</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#pricing">课程介绍</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#contact">联系我们</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
                <!--/container-->
            </nav>
        </header>



