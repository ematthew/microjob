<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosting;

class JobPostingController extends Controller
{
    /*
    |-----------------------------------------
    | index
    |-----------------------------------------
    */
    public function index(Request $request){
        // body
        return view('job.create');
    }
    
    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne(Request $request){
        // body
        $job_posting = new JobPosting();
        $data        = $job_posting->addOne($request);

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
        $job_posting = new JobPosting();
        $data        = $job_posting->fetchOne($request);

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
        $job_posting = new JobPosting();
        $data        = $job_posting->fetchAll($request);

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
        $job_posting = new JobPosting();
        $data        = $job_posting->updateOne($request);

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
        $job_posting = new JobPosting();
        $data        = $job_posting->deleteOne($request);

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
        $job_posting = new JobPosting();
        $data        = $job_posting->destroyOne($request);

        // return.
        return response()->json($data);
    }

}
