<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;

    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function addOne($payload){
        // body
        $job_type       = new JobType();
        $job_type->name = $payload->name;
        $job_type->save();

        $data = [
            'status'    => 'success',
            'message'   => 'Job type added!'
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
        $job_type = JobType::find($payload->id);
        return $job_type;
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function fetchAll($payload){
        // body
        $job_type = JobType::all();
        return $job_type;
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne($payload){
        // body
        $job_type       = JobType::find($payload->id);
        $job_type->name = $payload->name;
        $job_type->update();

        $data = [
            'status'    => 'success',
            'message'   => 'Job type updated!'
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
        $job_type = JobType::find($payload->id);
        $job_type->delete();

        $data = [
            'status'    => 'success',
            'message'   => 'Job type deleted!'
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
        $job_type = JobType::find($payload->id);
        $job_type->delete();

        $data = [
            'status'    => 'success',
            'message'   => 'Job type deleted!'
        ];

        return $data;
    }
}
