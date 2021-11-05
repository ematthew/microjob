@extends('layouts.app')
{{-- to add the navbar --}}

@section('content')

{{-- to add body and subject --}}

<div class="container">
   <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3"> Update a your Files</h1>

      <form method="POST" action="">
        @csrf

         <div class="form-group">
           <label for="name"> Name:</label>
        <input type="text" class="form-control" name="name">
       </div>

       <div class="form-group">
           <label for="email">Email:</label>
        <input type="text" class="form-control" name="email">
       </div>

       <div class="form-group">
        <label for="number">Contact Number:</label>
        <input type="text" class="form-control" name="number">       
      </div>

         
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

        

       <div class="mb-3">
         <label for="formFile" class="form-label">upload your Resume</label>
         <input class="form-control" type="file" id="formFile">
       </div>
        </div>

      
        <button type="submit" class="btn btn-primary"> Update</button>
       </form>
    </div>
   </div>

</div>

@endsection



 