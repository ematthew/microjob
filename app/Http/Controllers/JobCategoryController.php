<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobCategory;

class JobCategoryController extends Controller
{
    
    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne(Request $request){
        // body
        $job_category = new JobCategory();
        $data         = $job_category->addOne($request);

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
        $job_category = new JobCategory();
        $data         = $job_category->fetchOne($request);

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
        $job_category = new JobCategory();
        $data         = $job_category->fetchAll($request);

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
        $job_category = new JobCategory();
        $data         = $job_category->updateOne($request);

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
        $job_category = new JobCategory();
        $data         = $job_category->deleteOne($request);

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
        $job_category = new JobCategory();
        $data         = $job_category->destroyOne($request);

        // return.
        return response()->json($data);
    }
}
