<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobType;

class JobTypeController extends Controller
{   
    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne(Request $request){
        // body
        $job_type = new JobType();
        $data     = $job_type->addOne($request);

        // return.
        return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | FETCH DATA 
    |-----------------------------------------
    */
    public function fetchOne(Request $request){
        // body
        $job_type = new JobType();
        $data     = $job_type->fetchOne($request);

        // return.
        return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function fetchAll(Request $request){
        // body
        $job_type = new JobType();
        $data     = $job_type->fetchAll($request);

        // return.
        return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne(Request $request){
        // body
        $job_type = new JobType();
        $data     = $job_type->updateOne($request);

        // return.
        return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | DELETE DATA
    |-----------------------------------------
    */
    public function deleteOne(Request $request){
        // body
        $job_type = new JobType();
        $data     = $job_type->deleteOne($request);

        // return.
        return response()->json($data);
    }
    
    /*
    |-----------------------------------------
    | DESTROY DATA
    |-----------------------------------------
    */
    public function destroyOne(Request $request){
        // body
        $job_type = new JobType();
        $data     = $job_type->destroyOne($request);

        // return.
        return response()->json($data);
    }
}
