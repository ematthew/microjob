@extends('layouts.app')
{{-- to add the navbar --}}

@section('content')


<div class="container">
   <div class="row">
       <div class="col-8" class="card-header">
       <h1> Edit Job Posting </h1>
   </div>

   <form class="card-body" >
       
       <div class="form-group">
           <label for="id"> Job Refrence Number:</label>
        <input type="text" class="form-control" name="id">
       </div>

       <div class="form-group">
        <label for="Posistion">Posistion:</label>
        <input type="text" class="form-control" name="Posistion">       </div>

        <div class="form-group">
            <label for="organization">Organization</label>
            <input type="text" class="form-control" name="organization">
        </div>

        <div class="form-group">
            <label for="location">location</label>
            <input type="text" class="form-control" name="location">
        </div>

         <div class="form-group">
            <label for="location">Salary</label>
            <input type="text" class="form-control" name="salary">
        </div>

  

       <div class="container">
            <select class="form-select" aria-label="Default select example">
           <option selected>Job Types</option>
           <option value="1">Full-time</option>
           <option value="2">Temporary</option>
           <option value="3">Contract</option>
           <option value="3">Permanent</option>
           <option value="3">Internship</option>
           <option value="3">Volunteer</option>
        </select>


        <select class="form-select" aria-label="Default select example">
           <option selected>Work Conditions</option>
           <option value="1">Remote</option>
           <option value="2">Part Remote</option>
           <option value="3">On-Premise</option>
        </select>

         <select class="form-select" aria-label="Default select example">
           <option selected>Categories</option>
           <option value="1">Tech</option>
           <option value="2">Health care</option>
           <option value="3">Hospitalitye</option>
           <option value="3">Customer Service</option>
           <option value="3">Marketing</option>

        </select>
       </div>
      
        <div class="card-body">
            <button type="submit" class="btn btn-primary"> Update </button>
        </div>
   </form>

   </div>

</div>


@endsection



 