<?php

use Engine\Facades\Vite;

function vite(string|array $asset): string
{
    return Vite::getInstance()->tags($asset);
}

function view(string $view, array $data = []): void
{
    if (!str_ends_with('.php', $view))
        $view .= '.php';

    extract($data);
    include VIEW_PATH . $view;
}