<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/nova/css/bootstrap.min.css">
    <link rel="stylesheet" href="/nova/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/nova/css/font-awesome.min.css">
    <link rel="stylesheet" href="/nova/css/main.css">
    <link rel="stylesheet" href="/nova/css/sl-slide.css">

    <script src="/nova/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/nova/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/nova/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/nova/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/nova/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/nova/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="/font-awesome-4.5.0/css/font-awesome.min.css">
</head>

<body>
<?php
$user = User::model()->findByPk(Yii::app()->user->getId());

?>
<!--Header-->
<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" class="pull-left" href="index.php"></a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
<!--                    <li><a href="index.php"><i class="fa fa-home"></i> </a> </li>-->
                    <?php
                    if (!Yii::app()->user->isGuest && ($user->groupId==1 || $user->groupId==2 || $user->groupId==3)) {
                        ?>
                        <li><a href="index.php?r=site/page&view=tests">Тесты</a></li>
                        <?php
                    }
                    ?>
                    <li class="dropdown" id="forpupil">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ученикам <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            $list = Forpupils::model()->findAll();
                            foreach ($list as $li) {
                                ?>
                                <li>
                                    <a href="index.php?r=forpupils/view&id=<?php echo $li->id; ?>"><?php echo $li->head; ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="dropdown" id="forparents">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Родителям <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            $list = Forparents::model()->findAll();
                            foreach ($list as $li) {
                                ?>
                                <li>
                                    <a href="index.php?r=forparents/view&id=<?php echo $li->id; ?>"><?php echo $li->head; ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="dropdown" id="forteachers">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Коллегам<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            $list = Forteachers::model()->findAll();
                            foreach ($list as $li) {
                                ?>
                                <li>
                                    <a href="index.php?r=forteachers/view&id=<?php echo $li->id; ?>"><?php echo $li->head; ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li id="contact">
                        <a href="index.php?r=site/contact">Контактная информация</a>
                    </li>
                    <li id="about">
                        <a href="index.php?r=site/page&view=about">Обо мне</a>
                    </li>
                    <?php
                    if (Yii::app()->user->isGuest) {
                        ?>

                        <li id="login">
                            <a href="index.php?r=site/login">Вход</a>
                        </li>
                        <li id="reg">
                            <a href="index.php?r=user/create">Регистрация</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="dropdown" id="user">
                            <a href="#" class="dropdown-toggle"
                               data-toggle="dropdown"><?php echo Yii::app()->user->name; ?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php?r=user/view&id=<?php echo Yii::app()->user->id; ?>">Профиль</a>
                                </li>
                                <li>
                                    <a href="index.php?r=site/logout">Выход</a>
                                </li>
                            </ul>
                        </li>

                        <?php
                    }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>
<!-- /header -->


<?php echo $content; ?>

<br>
<!--<div class="clear"></div>-->
<?php
if(!Yii::app()->user->isGuest && ($user->groupId==1 || $user->groupId==2)) {
?>
<a href="index.php?r=teacher" class="btn btn-inverse"><i class="fa fa-dashboard"></i> Панель учителя</a>
<?php
}
?>
<div id="footer" style="text-align: center">
    Copyright &copy; <?php echo date('Y'); ?> by Maxon & Vitalya.<br/>
    All Rights Reserved.<br/>
    <?php echo Yii::powered(); ?>
</div><!-- footer -->

<script src="/nova/js/vendor/jquery-1.9.1.min.js"></script>
<script src="/nova/js/vendor/bootstrap.min.js"></script>
<script src="/nova/js/main.js"></script>
<!-- Required/nova/ javascript files for Slider -->
<script src="/nova/js/jquery.ba-cond.min.js"></script>
<script src="/nova/js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

</body>
</html>