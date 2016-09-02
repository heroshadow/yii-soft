<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="footer">
        <div class="footer_center">
            <div class="about">
                <a href="about_us.html"><h1>|&nbsp;关于我们&nbsp;|</h1></a>
                <a href="about_us.html"><span><img src="img/classification_250.png">平台简介</span></a>
                <a href="merchants_settled.html"><span><img src="img/classification_250.png">合作加盟</span></a>
                <a href="about_us.html"><span><img src="img/classification_250.png">关于售后</span></a>
                <a href="about_us.html"><span><img src="img/classification_250.png">联系客服</span></a>
            </div>
            <div class="qr_code">
                <img src="img/code.jpg" />
                <h6>扫码了解更多</h6><br><br>
                <h5>路保驰（天津）汽车维修服务有限公司</h5>
                <h5>Copyright &copy 2016. domain.com All rights reserved.</h5>
            </div>
            <div class="service_guide">
                <a href="service_guide.html"><h1>|&nbsp;服务指南&nbsp;|</h1></a>
                <a href="service_guide.html"><span><img src="img/classification_250.png">服务流程</span></a>
                <a href="service_guide.html"><span><img src="img/classification_250.png">常见问题</span></a>
                <a href="service_guide.html"><span><img src="img/classification_250.png">发票相关</span></a>
                <a href="service_guide.html"><span><img src="img/classification_250.png">安全保障</span></a>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
