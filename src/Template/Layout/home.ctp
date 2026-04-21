<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta name="description" content="<?= (isset($title) ? $title : '') ?> รับปรึกษาเรื่องการซื้อ-รับฝากขายบ้าน-รับฝากขายที่ดินและอสังหาฯอื่นๆ ขายบ้าน ซื้อบ้าน ขายที่ดิน ซื้อที่ดิน รับขายบ้าน รับขายที่ดิน ฝากขายบ้าน" />
        <meta name="keywords" content="ขายบ้าน ซื้อบ้าน ขายที่ดิน ซื้อที่ดิน รับขายบ้าน รับขายที่ดิน <?= (isset($title) ? $title : '') ?>" />
        <meta name="author" content="Love Thai Home" />
        <title><?= (isset($title) ? $title : '') ?> รับปรึกษาเรื่องการซื้อ-รับฝากขายบ้าน-รับฝากขายที่ดินและอสังหาฯอื่นๆ</title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('master.css') ?>
        <?= $this->Html->script('jquery-2.2.3.min.js') ?>
        <?= $this->Html->script('jquery.bxslider.js') ?>
        <?= $this->Html->css('jquery.bxslider.css') ?>
        <?= $this->Html->css('loading.css') ?>
        
        <link rel="shortcut icon" href="img/heading-icon.png">
    </head>
    <body>
        <div class="loading" id="page-load" style="display: none;">Loading&#8230;</div>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-92171168-1', 'auto');
            ga('send', 'pageview');

        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHFQLNH');</script>
        <!-- End Google Tag Manager -->



        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHFQLNH"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Header Start -->
        <?= $this->element('Layouts/header'); ?>
        <!-- Header Ends --> 

        <?= $this->fetch('content') ?>

        <section style="padding: 0 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="bxslider paddin-0">
                            <li><?= $this->Html->image('footer_slide/8.jpg', []) ?></li>
                            <li><?= $this->Html->image('footer_slide/9.jpg', []) ?></li>
                            <li><?= $this->Html->image('footer_slide/1.jpg', []) ?></li>
                            <li><?= $this->Html->image('footer_slide/2.jpg', []) ?></li>
                            <li><?= $this->Html->image('footer_slide/5.jpg', []) ?></li>
                            <li><?= $this->Html->image('footer_slide/6.jpg', []) ?></li>
                            <li><?= $this->Html->image('footer_slide/7.jpg', []) ?></li>
                            <li><?= $this->Html->image('footer_slide/3.jpg', []) ?></li>
                            <li><?= $this->Html->image('footer_slide/4.jpg', []) ?></li>

                            <li><?= $this->Html->image('footer_slide/10.jpg', []) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?= $this->element('Layouts/footer'); ?>


        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('owl.carousel.min.js') ?>
        <?= $this->Html->script('wow.min.js') ?>
        <?= $this->Html->script('modernizr-2.8.3.min.js') ?>
        <?= $this->Html->script('range-Slider.min.js') ?>
        <?= $this->Html->script('selectbox-0.2.min.js') ?>
        <?= $this->Html->script('select2.min.js') ?>
        <?= $this->Html->script('megamenu.js') ?>
        <?= $this->Html->script('jquery.scrollUp.min.js') ?>
        <?= $this->Html->script('classie.js') ?>
        <?= $this->Html->script('modernizr.custom.js') ?>
        <?= $this->Html->script('custom-js.js') ?>
        <?= $this->element('social_box'); ?>
        <script>
            $(document).ready(function () {
                $(window).bind("beforeunload", function () {
                    $('#page-load').show();
                });
            });
        </script>

    </body>
</html>