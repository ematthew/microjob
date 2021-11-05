<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPostingApplicant extends Model
{
    use HasFactory;

    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne($payload){
        // body
        $job_posting_applicant                  = new JobPostingApplicant();
        $job_posting_applicant->job_posting_id  = $payload->job_posting_id;
        $job_posting_applicant->name            = $payload->name;
        $job_posting_applicant->email           = $payload->email;
        $job_posting_applicant->phone           = $payload->phone;
        $job_posting_applicant->resume          = $payload->resume_url;
        $job_posting_applicant->save();

        $data = [
            'status'    => 'success',
            'message'   => 'Application successful!'
        ];

        // return
        return $data;
    }
    
    /*
    |-----------------------------------------
    | FETCH DATA 
    |-----------------------------------------
    */
    public function fetchOne($payload){
        // body
        $job_posting_applicant = JobPostingApplicant::find($payload->id);
        return $job_posting_applicant;
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function fetchAll($payload){
        // body
        $job_posting_applicants = JobPostingApplicant::all();
        return $job_posting_applicants;
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne($payload){
        // body
        $job_posting_applicant                  = JobPostingApplicant::find($payload->id);
        $job_posting_applicant->job_posting_id  = $payload->job_posting_id;
        $job_posting_applicant->name            = $payload->name;
        $job_posting_applicant->email           = $payload->email;
        $job_posting_applicant->phone           = $payload->phone;
        $job_posting_applicant->resume          = $payload->resume_url;
        $job_posting_applicant->update();

        $data = [
            'status'    => 'success',
            'message'   => 'Application updated!'
        ];

        // return
        return $data;
    }
    
    /*
    |-----------------------------------------
    | DELETE DATA
    |-----------------------------------------
    */
    public function deleteOne($payload){
        // body
        $job_posting_applicant                  = JobPostingApplicant::find($payload->id);
        $job_posting_applicant->update();

        $data = [
            'status'    => 'success',
            'message'   => 'Application deleted!'
        ];

        // return
        return $data;
    }
    
    /*
    |-----------------------------------------
    | DESTROY DATA
    |-----------------------------------------
    */
    public function destroyOne($payload){
        // body
        $job_posting_applicant                  = JobPostingApplicant::find($payload->id);
        $job_posting_applicant->delete();

        $data = [
            'status'    => 'success',
            'message'   => 'Application deleted!'
        ];

        // return
        return $data;
    }
}
