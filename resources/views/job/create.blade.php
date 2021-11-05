@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
       <div class="col-sm-6">
           <h4 class="display-3"> Create Job Posting</h4>
        </div>

        <div class="col-sm-6">
            <form method="POST" id="add-job-posting-form" onsubmit="return addJobPosting()">
               <div class="form-group">
                    <label for="position"> Position:</label>
                    <input type="text" class="form-control" name="position" id="position" required="">
               </div>

               <div class="form-group">
                    <label for="organization">Organization:</label>
                    <input type="text" class="form-control" name="organization" id="organization" required="">
                </div>

                <div class="form-group">
                    <label for="location">Job Location</label>
                    <input type="text" class="form-control" name="location" id="location" required="">
                </div>

                <div class="mb-3">
                    <label for="salary" class="form-label">Salary Expectation</label>
                    <input class="form-control" type="text" name="salary" id="salary" required="">
                </div>

                <div class="form-group mb-3">
                    <label for="job_type_id" class="form-label">Job Type</label><br />
                    <select class="form-control" id="job_type_id" name="job_type_id" required=""></select>
                </div>
                <div class="form-group mb-3">
                    <label for="job_category_id" class="form-label">Category</label><br />
                    <select class="form-control" id="job_category_id" name="job_category_id" required=""></select>
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
        var _token          = '{{ csrf_token() }}';
        var position        = $("#position").val();
        var organization    = $("#organization").val();
        var location        = $("#location").val();
        var salary          = $("#salary").val();
        var job_type_id     = $("#job_type_id").val();
        var job_category_id = $("#job_category_id").val();

        var query = {_token, position, organization, location, salary, job_type_id, job_category_id}

        fetch(`{{url('api/job-posting/add')}}`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(query)
        }).then(r => {
            return r.json();
        }).then(results => {
            console.log(results);
            window.location.href = '{{url('home')}}';
        }).catch(err => {
            console.log(err);
        });

        // void
        return false;
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