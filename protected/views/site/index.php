<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<!--<h1><i>--><?php //echo CHtml::encode(Yii::app()->name); ?><!--</i></h1>-->

<!--<ol class="breadcrumb">-->
<!--	<li class="active">Главная</li>-->
<!--</ol>-->


<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
            </div>
<!--            <div class="span4">-->
                <!--				<ul class="breadcrumb pull-right">-->
                <!--					<li class="active">Главная</li>-->
                <!--				</ul>-->
<!--            </div>-->
        </div>
    </div>
</section>
<br>
<section class="container main">
    <div class="row-fluid">
        <div class="span9">
            <div class="blog">
                <?php

                $posts = Post::model()->findAll(array('order' => 'date DESC'));
                $p = array_slice($posts, 0, 5);
                foreach ($p as $post) {
                    ?>

                    <div class="blog-item well">
                        <a href="index.php?r=post/view&id=<?php echo $post->id; ?>"><h2><?php echo $post->head; ?></h2>
                        </a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                                <!--<i class="fa fa-folder"></i> Категория: <a href="#">Новости</a>--> <i
                                    class="fa fa-calendar"></i> <?php echo date('d.m.Y, H:i', $post->date); ?> | <i
                                    class="fa fa-comments"></i> <a href="#"><?php
                                    echo $a = count(Comment::model()->findAllByAttributes(array('post_id' => $post->id))) . " комментари";
                                    if ($a > 4 && $a < 21) echo "ев";
                                    else if ($a % 10 == 0) echo "ев";
                                    else if ($a % 10 == 1) echo "й";
                                    else echo "я";
                                    ?></a>
                            </p>
                            <!--							<p class="pull-right"></p>-->
                        </div>
                        <!--						<p><img src="images/sample/blog1.jpg" width="100%" alt="" /></p>-->
                        <?php $pices = explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content);
                        echo $pices[0]; ?>
                        <a class="btn btn-link" href="index.php?r=post/view&id=<?php echo $post->id; ?>">Читать далее <i
                                class="fa fa-angle-double-right"></i></a>
                    </div>
                    <!-- End Blog Item -->

                    <!--					<h2>-->
                    <!--						<a href="index.php?r=post/view&id=--><?php //echo $post->id;
                    ?><!--">--><?php //echo $post->head;
                    ?><!--</a>-->
                    <!--					</h2>-->
                    <!--					<p><i class="fa fa-clock-o"></i> --><?php //echo date('d.m.Y, H:i', $post->date);
                    ?><!--</p>-->
                    <!--					<br>-->
                    <!--					--><?php //$pices = explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content); echo $pices[0];
                    ?><!--<br>-->
                    <!--					<a class="btn btn-primary" href="index.php?r=post/view&id=--><?php //echo $post->id;
                    ?><!--">Читать далее <i class="fa fa-angle-right"></i></a>-->
                    <!--					<hr>-->

                    <?php
                }
                ?>

                <div class="gap"></div>

            </div>
            <a href="index.php?r=post" class="btn btn-primary btn-large pull-right">Все записи</a>
            <br><br>
        </div>
        <div class="span3">
            <?php
            $timetable = Timetable::model()->findAll();
            ?>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $timetable[0]->weekday; ?></h3>
                </div>
                <div class="panel-body">
                    <?php
                    echo $timetable[0]->list;
                    ?>
                    <a href="#"><i class="fa fa-backward"></i> </a>
                    <a href="#" style="float: right"><i class="fa fa-forward"></i> </a>
                </div>
            </div>
        </div>
        <?php
        //
        //$posts = Post::model()->findAll(array('order'=>'date DESC'));
        //$p = array_slice($posts, 0, 5);
        //foreach ($p as $post)
        //{
        //	?>
        <!---->
        <!--	<h2>-->
        <!--		<a href="index.php?r=post/view&id=--><?php //echo $post->id; ?><!--">-->
        <?php //echo $post->head;?><!--</a>-->
        <!--	</h2>-->
        <!--	<p><i class="fa fa-clock-o"></i> --><?php //echo date('d.m.Y, H:i', $post->date); ?><!--</p>-->
        <!--	<br>-->
        <!--	-->
        <?php //$pices = explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content); echo $pices[0]; ?><!--<br>-->
        <!--	<a class="btn btn-primary" href="index.php?r=post/view&id=-->
        <?php //echo $post->id; ?><!--">Читать далее <i class="fa fa-angle-right"></i></a>-->
        <!--	<hr>-->
        <!---->
        <?php
        //}
        //?>


        </div>
    </section>

<?php
$timetable = Timetable::model()->findAll();
?>
<script>
    var currentDay = new Date();
    var day = currentDay.getDay();
    var days = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Чтверг", "Пятница", "Суббота"];
    var lists = [<?php echo "'".$timetable[6]->list."'"; for ($i=0; $i<6; $i++) echo ",'".$timetable[$i]->list."'"; ?>];
    alert[lists];
    function nextDay() {

    }
</script>