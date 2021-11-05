<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*
|--------------------------------------------------------------------------
| API Routes for Job Posting
|--------------------------------------------------------------------------
*/
Route::get('job-posting/all',       'JobPostingController@fetchAll');
Route::get('job-posting/one',       'JobPostingController@fetchOne');
Route::post('job-posting/add',      'JobPostingController@addOne');
Route::post('job-posting/update',   'JobPostingController@updateOne');
Route::get('job-posting/delete',    'JobPostingController@deleteOne');

/*
|--------------------------------------------------------------------------
| API Routes for Job Types
|--------------------------------------------------------------------------
*/
Route::get('job-type/all',          'JobTypeController@fetchAll');
Route::get('job-type/one',          'JobTypeController@fetchOne');
Route::post('job-type/add',         'JobTypeController@addOne');
Route::post('job-type/update',      'JobTypeController@updateOne');
Route::get('job-type/delete',       'JobTypeController@deleteOne');

/*
|--------------------------------------------------------------------------
| API Routes for Job Category
|--------------------------------------------------------------------------
*/
Route::get('job-category/all',      'JobCategoryController@fetchAll');
Route::get('job-category/one',      'JobCategoryController@fetchOne');
Route::post('job-category/add',     'JobCategoryController@addOne');
Route::post('job-category/update',  'JobCategoryController@updateOne');
Route::get('job-category/delete',   'JobCategoryController@deleteOne');

/*
|--------------------------------------------------------------------------
| API Routes for Job applicants
|--------------------------------------------------------------------------
*/
Route::get('job-applicant/all',      'JobPostingApplicantController@fetchAll');
Route::get('job-applicant/one',      'JobPostingApplicantController@fetchOne');
Route::post('job-applicant/add',     'JobPostingApplicantController@addOne');
Route::post('job-applicant/update',  'JobPostingApplicantController@updateOne');
Route::get('job-applicant/delete',   'JobPostingApplicantController@deleteOne');


