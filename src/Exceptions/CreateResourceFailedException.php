<?php

namespace Elshaden\NovaTranslator\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateResourceFailedException extends Exception
{
    protected $code = Response::HTTP_EXPECTATION_FAILED;
    protected $message = 'Failed to create Translation.';


//    public function render(Request $request): Response
//    {
//        $status = $this->code ?? 406;
//        $error = $this->message ??"Could Not Create Resource    ";
//
//    }
}
