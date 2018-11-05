<?php

    require_once 'model/config.php';

    spl_autoload_register('carregarClasse');

    function carregarClasse($nomeClasse)
    {
        if (file_exists('model/' . $nomeClasse . '.php')) {
            require_once 'model/' .$nomeClasse . '.php';
        }
    }