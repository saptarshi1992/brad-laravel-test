<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class jobSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $jobListings = include database_path('seeders/data/job_listings.php');

    //Get user id from user model
    $userIds = User::pluck('id')->toArray();
    foreach ($jobListings as &$jobList) {
      $jobList['user_id'] = $userIds[array_rand($userIds)];
      $jobList['created_at'] = now();
      $jobList['updated_at'] = now();


    }
    //insert
    DB::table('job_listings')->insert($jobListings);


  }
}
