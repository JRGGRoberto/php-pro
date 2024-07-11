<?php

function controller($matchedUri)
{
    [$controller, $method] = explode('@', array_values($matchedUri)[0]);

    if (!class_exists(CONTROLE_PATH.$controller)) {
        throw new Exception("Controller {$controller} não existe");
    }
}
