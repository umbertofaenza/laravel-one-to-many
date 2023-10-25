<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $project = new Project;

            $project->name = $faker->sentence(3);
            $project->description = $faker->paragraph();
            $project->link = Str::random(10);
            $project->slug = Str::slug($project->name);

            $project->save();
        }
    }
}