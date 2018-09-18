<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repositories\FormRepository;

class FormController extends Controller
{
    
    public $formRepository;

    public function __construct(FormRepository $formRepository)
    {
        $this->formRepository = $formRepository;
    }

    public function sendView()
    {
        return $this->formRepository->sendView();
    }

    public function saveFly(Request $request)
    {
        return $this->formRepository->saveFly($request);
    }
}
