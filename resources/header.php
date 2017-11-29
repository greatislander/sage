<!doctype html>
<html <?php language_attributes(); ?>>
    <?= \App\template('partials/head'); ?>
    <body <?php body_class(); ?>>
        <?php do_action('get_header'); ?>
        <?= \App\template('partials/header'); ?>
        <div class="wrap container" role="document">
