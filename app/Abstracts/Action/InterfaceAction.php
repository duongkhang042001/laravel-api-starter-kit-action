<?php

namespace App\Abstracts\Action;

interface InterfaceAction
{
    public function handler($request, $response, $args): void;
}
