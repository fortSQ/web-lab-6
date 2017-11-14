<?php

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['db.options'] = array_merge([
    'driver'    => 'pdo_mysql',
    'dbname'    => '***',
    'host'      => 'db-server',
    'user'      => '***',
    'password'  => '***',
    'charset'   => 'utf8'
], isset($app['db.options']) ? $app['db.options'] : []);

$app->register(new Silex\Provider\DoctrineServiceProvider());
