<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('master.css') ?>
        <?= $this->Html->script('jquery-2.2.3.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= ''//$this->Html->script('mmenu.min.all.js') ?>
        <?= ''//$this->Html->script('custom-js.js') ?>
        <?= $this->Html->script('jquery.bxslider.js') ?>
        <?= $this->Html->css('jquery.bxslider.css') ?>
        <?= $this->Html->css('loading.css') ?>
        
        <link rel="shortcut icon" href="img/heading-icon.png">

        <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="loading" id="page-load" style="display: none;">Loading&#8230;</div>
        
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        
        <script>
            $(document).ready(function () {
                window.onload = function () {
                    $('#page-load').hide();
                };
                $(window).bind("beforeunload", function () {
                    $('#page-load').show();
                });
            });
        </script>
    </body>
</html>