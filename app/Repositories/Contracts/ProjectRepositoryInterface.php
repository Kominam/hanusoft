<?php
// app/Repositories/Contracts/ProductRepositoryInterface.php

namespace App\Repositories\Contracts;
use Illuminate\Http\Request;

use App\Http\Requests;

interface ProjectRepositoryInterface
{
    public function all();
    public function validatorNew(Request $request);
    public function validatorUpdate(Request $request);
    public function create(Request $request);
    public function update(Request $request, $id);
    public function find($id);
    public function delete($id);
    public function countAll();
    public function invite(Request $request);
    public function handleInvitation(Request $request);
}
