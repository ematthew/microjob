<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobType;
use App\Models\JobCategory;
use Auth;

class JobPosting extends Model
{
    use HasFactory;

    // protected $appends = ['job_type', 'job_category'];
    /*
    |-----------------------------------------
    | job_type
    |-----------------------------------------
    */
    public function job_type(){
        // body
        return $this->hasOne(JobType::class, 'id', 'job_type_id');
    }

    /*
    |-----------------------------------------
    | job_category
    |-----------------------------------------
    */
    public function job_category(){
        // body
        return $this->hasOne(JobCategory::class, 'id', 'job_category_id');
    }

    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne($payload){
        // body
        $job_posting                    = new JobPosting();
        $job_posting->user_id           = Auth::user()->id ?? 1;
        $job_posting->position          = $payload->position;
        $job_posting->organization      = $payload->organization;
        $job_posting->location          = $payload->location;
        $job_posting->salary            = $payload->salary;
        $job_posting->job_type_id       = $payload->job_type_id;
        $job_posting->job_category_id   = $payload->job_category_id;
        $job_posting->save();

        $data = [
            'status'    => 'success',
            'message'   => 'Job posting successful!'
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
        $job_posting = JobPosting::find($payload->id);
        return $job_posting;
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function fetchAll($payload){
        // body
        if(isset($payload->search_text) && !empty($payload->search_text)){
            $keyword = $payload->search_text;
            $job_postings = JobPosting::where('position', 'LIKE', "%$keyword%")->with(['job_type', 'job_category'])->get();
        }else{
            $job_postings = JobPosting::with(['job_type', 'job_category'])->get();
        }
        
        return $job_postings;
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne($payload){
        // body
        $job_posting                    = JobPosting::find($payload->id);
        $job_posting->user_id           = $payload->user_id ?? auth()->user()->id;
        $job_posting->position          = $payload->position;
        $job_posting->organization      = $payload->organization;
        $job_posting->location          = $payload->location;
        $job_posting->salary            = $payload->salary;
        $job_posting->job_type_id       = $payload->job_type_id;
        $job_posting->job_category_id   = $payload->job_category_id;
        $job_posting->update();

        $data = [
            'status'    => 'success',
            'message'   => 'Job posting updated!'
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
        $job_posting                    = JobPosting::find($payload->id);
        $job_posting->delete();

        $data = [
            'status'    => 'success',
            'message'   => 'Application updated!'
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
        $job_posting                    = JobPosting::find($payload->id);
        $job_posting->delete();

        $data = [
            'status'    => 'success',
            'message'   => 'Application updated!'
        ];

        // return
        return $data;
    }
}
