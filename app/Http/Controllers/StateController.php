<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Contracts\StateRepositoryInterface;

class StateController extends Controller
{
    protected $stateRepository;

    public function __construct(StateRepositoryInterface $stateRepository)
    {
        $this->stateRepository= $stateRepository;
    }
    public function create(Request $request) {
    	$new_state = $this->stateRepository->create($request);
    	return response()->json($new_state);
    }
}
