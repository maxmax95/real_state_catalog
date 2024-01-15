<?php

namespace App\Http\Controllers\api;

use App\RealState;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealStateController extends Controller
{
    private $realState;

    public function __construct(RealState $realState ) ///ao instanciar o constutor, ele enfiará na "forma"(model) de realstate
    {
        $this->realState = $realState; ///entao essa instancia sera 
    }

    public function index()
    {
        $realState = $this->realState->paginate('10');

        return response()->json($realState, 200);
        }
}
