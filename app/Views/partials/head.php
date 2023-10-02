<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?? '' ?>">
    
    <?= link_tag('css/uikit.min.css') ?>
    <?= link_tag('css/bootstrap.min.css') ?>
    <?= script_tag('js/uikit.min.js'); ?>
    <?= script_tag('js/uikit-icons.min.js'); ?>
    
    
    <?= $this->renderSection('javascript_head') ?>

    <title><?= $title ?? config(\Config\Blog::class)->appname ?></title>
</head>
<body>