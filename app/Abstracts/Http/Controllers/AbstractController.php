<?php

namespace App\Abstracts\Http\Controllers;

use App\Http\Shared\MakeApiResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class ApiController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, MakeApiResponse;
}
