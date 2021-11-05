<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;

    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne($payload){
        // body
        $job_category       = new JobCategory();
        $job_category->name = $payload->name;
        $job_category->save();

        $data = [
            'status'    => 'success',
            'message'   => 'Job category added!'
        ];

        return $data;
    }
    
    /*
    |-----------------------------------------
    | FETCH DATA 
    |-----------------------------------------
    */
    public function fetchOne($payload){
        // body
        $job_category = JobCategory::find($payload->id);
        return $job_category;
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function fetchAll($payload){
        // body
        $job_category = JobCategory::all();
        return $job_category;
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne($payload){
        // body
        $job_category       = JobCategory::find($payload->id);
        $job_category->name = $payload->name;
        $job_category->update();

        $data = [
            'status'    => 'success',
            'message'   => 'Job category updated!'
        ];

        return $data;
    }
    
    /*
    |-----------------------------------------
    | DELETE DATA
    |-----------------------------------------
    */
    public function deleteOne($payload){
        // body
        $job_category = JobCategory::find($payload->id);
        $job_category->delete();

        $data = [
            'status'    => 'success',
            'message'   => 'Job category deleted!'
        ];

        return $data;
    }
    
    /*
    |-----------------------------------------
    | DESTROY DATA
    |-----------------------------------------
    */
    public function destroyOne($payload){
        // body
        $job_category = JobCategory::find($payload->id);
        $job_category->delete();

        $data = [
            'status'    => 'success',
            'message'   => 'Job category deleted!'
        ];

        return $data;
    }
}
