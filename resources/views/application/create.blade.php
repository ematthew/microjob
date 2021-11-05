@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-6">
           <h4 class="display-3"> Apply Now</h4>
           <p> <strong>Position:</strong> {{ $job->position }}</p>
           <p> <strong>Location:</strong> {{ $job->location }}</p>
           <p> <strong>Salary:</strong> {{ $job->salary }}</p>
        </div>
        <div class="col-sm-6">
            <form>
               <div class="form-group">
                    <label for="name"> Name:</label>
                    <input type="text" class="form-control" name="first_name">
               </div>

               <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="text" class="form-control" name="phone">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">upload your Resume</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-primary-outline"> Submit</button>
            </form> 
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        getJobTypes();
        getJobCategory();
    });

    function addJobPosting() {
        var form    = $("#add-job-posting-form");
        var query   = new FormData(form);

        fetch(`{{url('api/job-posting/add')}}`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
            },
            body: query
        }).then(r => {
            return r.json();
        }).then(results => {
            console.log(results);
        }).catch(err => {
            console.log(err);
        });
    }

    function getJobTypes() {
        fetch(`{{url('api/job-type/all')}}`, {
            method: "GET",
            headers: {
                'Content-Type': 'application/json',
            }
        }).then(r => {
            return r.json();
        }).then(results => {
            // console.log(results);
            $("#job_type_id").html("");
            $.each(results, function(index, val) {
                $("#job_type_id").append(`
                    <option value="${val.id}">${val.name}</option>
                `);
            });
        }).catch(err => {
            console.log(err);
        });
    }

    function getJobCategory() {
        fetch(`{{url('api/job-category/all')}}`, {
            method: "GET",
            headers: {
                'Content-Type': 'application/json',
            }
        }).then(r => {
            return r.json();
        }).then(results => {
            // console.log(results);
            $("#job_category_id").html("");
            $.each(results, function(index, val) {
                $("#job_category_id").append(`
                    <option value="${val.id}">${val.name}</option>
                `);
            });
        }).catch(err => {
            console.log(err);
        });
    }
</script>

@endsection