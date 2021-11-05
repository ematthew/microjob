<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPostingApplicant;
use App\Models\JobPosting;

class JobPostingApplicantController extends Controller
{
    /*
    |-----------------------------------------
    | index
    |-----------------------------------------
    */
    public function index(Request $request, $id){
        // body
        $job = JobPosting::find($id);
        return view('application.create', compact('job'));
    }

    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne(Request $request){
        // body
        foreach ($request->resume ?? [] as $key => $value) {
            $name = str_replace(" ", "-", $request->name);
            $file = $value;
            $file_name = strtolower($name).'-assets-'.time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('assets'), $file_name);
            $request->resume_url = env("APP_URL").'/documents/'.$file_name;
        }

        $job_posting_applicant = new JobPostingApplicant();
        $data                  = $job_posting_applicant->addOne($request);

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
        $job_posting_applicant = new JobPostingApplicant();
        $data                  = $job_posting_applicant->fetchOne($request);

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
        $job_posting_applicant = new JobPostingApplicant();
        $data                  = $job_posting_applicant->fetchAll($request);

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
        foreach ($request->resume ?? [] as $key => $value) {
            $name = str_replace(" ", "-", $request->name);
            $file = $value;
            $file_name = strtolower($name).'-assets-'.time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('assets'), $file_name);
            $request->resume_url = env("APP_URL").'/documents/'.$file_name;
        }

        $job_posting_applicant = new JobPostingApplicant();
        $data                  = $job_posting_applicant->updateOne($request);

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
        $job_posting_applicant = new JobPostingApplicant();
        $data                  = $job_posting_applicant->deleteOne($request);

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
        $job_posting_applicant = new JobPostingApplicant();
        $data                  = $job_posting_applicant->destroyOne($request);

        // return.
        return response()->json($data);
    }
}
