<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobPosting;

class JobPostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id        = 1;
        $position       = "Software Engineer - Fullstack";
        $organization   = "woogle inc intl.";
        $location       = "Abuja, Nigeria";
        $salary         = "350,000.00";
        $job_type_id    = 1;
        $job_category_id = 1;

        $jobs = [
            "user_id"       => $user_id,
            "position"      => $position,
            "organization"  => $organization,
            "location"      => $location,
            "salary"        => $salary,
            "job_type_id"   => $job_type_id,
            "job_category_id" => $job_category_id,
        ];

        for ($i=0; $i < 1; $i++) { 
            // code...
            $job_posting = new JobPosting($jobs);
            $job_posting->save();
        }
    }
}
