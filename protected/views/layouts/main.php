<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="ru">

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print">
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection">
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

    <link rel="stylesheet" href="/startbootstrap-modern-business-1.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome-4.5.0/css/font-awesome.min.css">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i> Главная</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ученикам <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            $list = Forpupils::model()->findAll();
                            foreach ($list as $li)
                            {
                                ?>
                                <li>
                                    <a href="index.php?r=forpupils/view&id=<?php echo $li->id; ?>"><?php echo $li->head; ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Родителям <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                $list = Forparents::model()->findAll();
                            foreach ($list as $li)
                            {
                                ?>
                                <li>
                                    <a href="index.php?r=forparents/view&id=<?php echo $li->id; ?>"><?php echo $li->head; ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Коллегам<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Презентации</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Конспекты уроков</a>
                            </li>
                            <li>
                                <a href="faq.html">Классные часы</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?r=site/contact">Контактная информация</a>
                    </li>
                    <li>
                        <a href="index.php?r=site/page&view=about">Обо мне</a>
                    </li>
                    <?php
                    if (Yii::app()->user->isGuest) {
                        ?>

                        <li>
                            <a href="index.php?r=site/login">Вход</a>
                        </li>
                        <li>
                            <a href="index.php?r=user/create">Регистрация</a>
                        </li>
                        <?php
                    }
                    else{
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::app()->user->name; ?><b class="caret"></b></a>
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br>

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div><!-- footer -->

</div><!-- page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/startbootstrap-modern-business-1.0.3/js/bootstrap.min.js"></script>

</body>
</html>
