<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Base controller class for the application.
 *
 * This class serves as the base controller from which all other controllers
 * in the application inherit. It includes basic authorization and validation
 * traits to be used across all derived controllers.
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
