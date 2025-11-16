<?php
// +------------------------------------------------------------------------+
// | @author: Freunde.io
// | @author_url: https://www.freunde.io
// | @author_email: support@freunde.io
// +------------------------------------------------------------------------+
// | Freunde.io - Social Media Made in Germany
// | Copyright (c) 2018 Freunde.io. All rights reserved.
// +------------------------------------------------------------------------+
$products = array();

$options['limit'] = (!empty($_POST['limit'])) ? (int) $_POST['limit'] : 35;
$options['id'] = (!empty($_POST['id'])) ? (int) $_POST['id'] : 0;
$options['offset'] = (!empty($_POST['offset'])) ? (int) $_POST['offset'] : false;
$options['genre'] = (!empty($_POST['genre'])) ? $_POST['genre'] : false;
$options['country'] = (!empty($_POST['country'])) ? $_POST['country'] : false;

$movies = Wo_GetMovies($options);

$response_data = array(
    'api_status' => 200,
    'movies' => $movies
);