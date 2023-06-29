<?php

namespace Elshaden\NovaTranslator\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NotFoundException extends Exception
{
    protected $code = Response::HTTP_NOT_FOUND;
    protected $message = 'Failed to create Translation.';


//    public function render(Request $request): Response
//    {
//        $status = $this->code ?? Response::HTTP_NOT_FOUND;
//        $error = $this->message ??"Could Not Find Resource    ";
//
//
//        return response(['result'=>false, "error" => $error], $status);
//    }
}
