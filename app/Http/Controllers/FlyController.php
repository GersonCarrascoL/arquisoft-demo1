<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Repositories\FlyRepository;

class FlyController extends Controller
{
    public $flyRepository;

    public function __construct(FlyRepository $flyRepository)
    {
        $this->flyRepository = $flyRepository;
    }
    
    public function sendView(){
        return $this->flyRepository->sendView();
    }
}
