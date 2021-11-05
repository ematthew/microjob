<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobCategory;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lists = [
            "Tech",
            "Health care",
            "Hospitality",
            "Customer Service",
            "Marketing"
        ];

        foreach ($lists as $key => $value) {
            $job_category = new JobCategory(["name" => $value]);
            $job_category->save();
        }
    }
}
