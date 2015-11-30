<?php /* @var $this Controller */ ?>
<?php

$user = User::model()->findByPk(Yii::app()->user->getId());
if (!Yii::app()->user->isGuest)
    if ($user->status == 1)
    {
    $mail = Mail::model()->findAllByAttributes(array("status"=>1));
?>
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


    <!-- Bootstrap Core CSS -->
    <link href="/startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/startbootstrap-sb-admin-1.0.4/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/startbootstrap-sb-admin-1.0.4/css/plugins/morris.css" rel="stylesheet">

    <link rel="stylesheet" href="/font-awesome-4.5.0/css/font-awesome.min.css">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?r=teacher">Панель учителя</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> (<?php echo count($mail); ?>)<b
                        class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">

                    <?php
                        foreach ($mail as $message)
                        {
                            ?>
                            <li class="message-preview">
                                <a href="index.php?r=teacher/mail/view&id=<?php echo $message->id; ?>">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong><?php echo $message->name; ?></strong>
                                            </h5>

                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> <?php echo date('d.m.Y, H:i', $message->date); ?></p>

                                            <p><?php echo substr($message->message, 0, 40); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                    <?php
                        }
                    ?>

                    <li class="message-footer">
                        <a href="index.php?r=teacher/mail">Все сообщения</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Yii::app()->user->name; ?> <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-power-off"></i> На сайт</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="index.php?r=teacher"><i class="fa fa-fw fa-dashboard"></i> Главная</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i
                            class="fa fa-fw fa-file-text-o"></i> Страницы <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="index.php?r=teacher/forpupils">Ученикам</a>
                        </li>
                        <li>
                            <a href="index.php?r=teacher/forparents">Родителям</a>
                        </li>
                        <li>
                            <a href="index.php?r=teacher/forteachers">Коллегам</a>
                        </li>

                        <li>
                            <a href="#">Обо мне</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?r=teacher/post"><i class="fa fa-fw fa-newspaper-o"></i> Записи</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-picture-o"></i> Фотоальбомы</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-pencil"></i> Тесты</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <?php
            echo $content;
            ?>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/startbootstrap-sb-admin-1.0.4/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/startbootstrap-sb-admin-1.0.4/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/startbootstrap-sb-admin-1.0.4/js/plugins/morris/raphael.min.js"></script>
<script src="/startbootstrap-sb-admin-1.0.4/js/plugins/morris/morris.min.js"></script>
<script src="/startbootstrap-sb-admin-1.0.4/js/plugins/morris/morris-data.js"></script>


</body>
</html>
<?php } else echo "Ошибка доступа";?>