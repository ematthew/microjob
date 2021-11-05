<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobType;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lists = [
            "Full-time",
            "Temporary",
            "Contract",
            "Permanent",
            "Internship",
            "Volunteer",
            "Work Conditions: Remote",
            "Part Remote",
            "On-Premise"
        ];

        foreach ($lists as $key => $value) {
            $job_category = new JobType(["name" => $value]);
            $job_category->save();
        }
    }
}
