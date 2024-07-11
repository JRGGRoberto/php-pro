<?php

function routers()
{
    return require 'routers.php';
}

function exactMatchUriInArrayRoutes($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        return [$uri => $routes[$uri]];
    }

    return [];
}

function regularExpressionMatchArrayRoutes($uri, $routes)
{
    return array_filter(
        $routes,
        function ($value) use ($uri) {
            $regex = str_replace('/', '\/', ltrim($value, '/'));

            return preg_match("/^$regex$/", ltrim($uri, '/'));
        },
        ARRAY_FILTER_USE_KEY);
}

function param($uri, $matchedUri)
{
    if (empty($matchedUri)) {
        $matchedToGetParams = array_keys($matchedUri)[0];

        return array_diff(
            explode('/', ltrim($uri, '/')),
            explode('/', ltrim($matchedToGetParams, '/'))
        );
    }

    return [];
}

function paramFormat($uri, $params) {
    $uri = explode('/', ltrim($uri, '/'));
    $paramsData = [];
    foreach ($params as $index => $param){
        $paramsData[$uri[$index -1]] = $param;
    }
    return $paramsData;
}

function router()
{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes = routers();

    $matchedUri = exactMatchUriInArrayRoutes($uri, $routes);

    if(empty($matchedUri)){
        $matchedUri = regularExpressionMatchArrayRoutes($uri, $routes);
        if(!empty($matchedUri)){
            $params = param($uri, $matchedUri);
            $params = paramFormat($uri, $params);

            var_dump($params);
            die();

        }
    }

    var_dump($matchedUri);
    exit;
}
