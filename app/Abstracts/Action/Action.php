<?php

namespace App\Abstracts\Action;

use App\Http\Shared\MakeApiResponse;

abstract class Action implements InterfaceAction
{
    use MakeApiResponse;
}
