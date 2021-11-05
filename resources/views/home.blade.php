@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="btn btn-white">
                    <a href="{{url('job')}}">Create A New job </a>
                </div>
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>User ID</td>
                                        <td>Posistion</td>
                                        <td>Organization</td>
                                        <td>Location</td>
                                        <td>Salary</td>
                                        <td>Job Type</td>
                                        <td>Job Categories</td>
                                        <td>Work Condition</td>
                                        <td colspan= 2>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($job_postings as $key => $job_posting)
                                    <tr>
                                        <td>{{ $job_posting->user_id         }}</td>
                                        <td>{{ $job_posting->position        }}</td>
                                        <td>{{ $job_posting->organizationl   }}</td>
                                        <td>{{ $job_posting->location        }}</td>
                                        <td>{{ $job_posting->salary          }}</td>
                                        <td>{{ $job_posting->job_type->name     }}</td>
                                        <td>{{ $job_posting->job_category->name }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary "> Edit</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
