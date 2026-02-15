<?php

use Pecee\SimpleRouter\SimpleRouter as Router;


Router::setDefaultNamespace('App\Controller');

Router::get('/', 'WebController@start');

Router::error(function() {
    header("Location: /");
});


Router::start();
