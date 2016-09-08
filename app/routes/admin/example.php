<?php

$app->get('/admin/example', $admin(), function() use ($app){

    if ($app->auth->hasPermission('can_post_topic')) {
        echo 'User can post topic.';
    }

    $app->render('admin/example.php');

})->name('admin.example');