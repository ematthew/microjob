@extends('layouts.app')
{{-- to add the navbar --}}

@section('content')

{{-- to add body and subject --}}

<div class="container">
    <div class="row">
        <div class="col-8">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Contact Number</td>
                        <td>Resume</td>
                        <td colspan= 2>Action</td>
                    </tr>
                </thead>
                <tbody>

                    
                   <tr>
                    <td>{{ $job_posting_applicant->job_posting_id}}</td>
                    <td>{{ $job_posting_applicant->name   }}</td>
                    <td>{{ $job_posting_applicant->email  }}</td>
                    <td>{{ $job_posting_applicant->phone  }}</td>
                    <td>{{ $job_posting_applicant->resume }}</td>

                    <td>
                        <a href="#" class="btn btn-primary "> Edit</a>
                    </td>

                    <td>
                         <a href="#">Delete</a>
                    </td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>     
</div>

@endsection