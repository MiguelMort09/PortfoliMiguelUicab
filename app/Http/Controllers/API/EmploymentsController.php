<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmploymentResource;
use App\Models\Employment;

class EmploymentsController extends Controller
{
    public function index()
    {
        return EmploymentResource::collection(Employment::all()->sortByDesc("date_finished"))->jsonSerialize();
    }
}
