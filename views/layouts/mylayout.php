<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
    <header>
        <div class="head">
            <div class="head_top">
                <div class="head_top_center">
                    <span class="head_top_lift"><a href="Login_page.html">登录</a>&nbsp;/&nbsp;<a
                            href="registration_page.html">注册</a></span>
                    <span class="head_top_right">客服电话：<b>400-088-9000</b></span>
                </div>
            </div>
            <div class="head_center">
                <img src="img/logo.jpg">
                <ul>
                    <li><a style=" color:#0b559c; border-bottom:2px #0b559c solid;" href="index.html">首页</a></li>
                    <li><a href="vehicle.html" target="_blank">我要修车</a></li>
                    <li><a href="vehicle_repair.html">爱车管理</a></li>
                    <li><a href="merchants_settled.html" target="_blank">商家入驻</a></li>
                    <li><a href="about_us.html" target="_blank">关于我们</a></li>
                </ul>
            </div>
        </div>
    </header>
    <?= $content ?>
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
                    <img src="img/code.jpg"/>
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