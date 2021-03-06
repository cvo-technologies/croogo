<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?= $this->fetch('title') ?> - <?= $_siteTitle ?></title>
    <?php
        echo $this->Html->css(array(
            '/croogo/css/croogo-bootstrap',
            '/croogo/css/croogo-bootstrap-responsive',
        ));
        echo $this->Layout->js();
        echo $this->Html->script(array(
            '/croogo/js/jquery/jquery.min',
            '/croogo/js/jquery/jquery-ui.min',
            '/croogo/js/jquery/jquery.hoverIntent.minified',
            '/croogo/js/underscore-min',
            '/croogo/js/admin',
            '/croogo/js/croogo-bootstrap.js',
        ));
        echo $this->Blocks->get('css');
        echo $this->Blocks->get('script');
    ?>
</head>

<body>

    <div id="wrap" class="full">
        <?php echo $this->element('admin/header'); ?>
        <div id="push"></div>
        <div id="content-container" class="<?php echo $this->Theme->getCssClass('container'); ?>">
            <div class="<?php echo $this->Theme->getCssClass('row'); ?>">
                <div id="content" class="clearfix">
                    <div id="inner-content" class="<?php echo $this->Theme->getCssClass('columnFull'); ?>">
                    <?php
                        echo $this->Layout->sessionFlash();
                        echo $this->fetch('content');
                    ?>
                    </div>
                    &nbsp;
                </div>
            </div>
        </div>

    </div>

    <?php echo $this->element('admin/footer'); ?>
    <?php
        echo $this->element('admin/initializers');
        echo $this->Blocks->get('scriptBottom');
        echo $this->Js->writeBuffer();
    ?>
    </body>
</html>