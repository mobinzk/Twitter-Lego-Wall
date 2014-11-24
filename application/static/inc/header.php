<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>">
    <meta name="keywords" content="<?= $keywords; ?>">

    <link rel="stylesheet" type="text/css" href="<?= Versioning::auto(STATIC_DIR.'/css/styles.css'); ?>" />
    <link rel="shortcut icon" href="/<?= STATIC_DIR; ?>/images/fav.ico" />

	<script src="/<?= STATIC_DIR.'/js'; ?>/jquery-2.1.1.min.js"></script>
    <script src="/<?= STATIC_DIR.'/js'; ?>/global.js"></script>

</head>
<body>