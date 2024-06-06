<?php

namespace App\Exceptions;

use Exception;

class NotFoundHttpException extends Exception
{
    public function render($request)
    {
        return response()->view('errors.403', [], 403);
        return response()->view("errors.404", [], 404);
        return response()->view('errors.419', [], 419);
        return response()->view('errors.500', [], 500);
        return response()->view('errors.503', [], 503);
    }
}