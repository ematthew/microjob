<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobPostingApplicant;

class JobPostingApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $job_posting_id = 1;
        $name           = "Test Applicant";
        $email          = "test.applicant@example.com";
        $phone          = "0903994848";
        $resume         = env("APP_URL")."/documents/test-applicant-resume.docx";

        $job_applicants = [
            'job_posting_id'    => $job_posting_id,
            'name'              => $name,
            'email'             => $email,
            'phone'             => $phone,
            'resume'            => $resume
        ];

        // code...
        $job_posting = new JobPostingApplicant($job_applicants);
        $job_posting->save();
    }
}
