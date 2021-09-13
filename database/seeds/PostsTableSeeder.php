<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++){
              $postObject = new Post();
              $postObject->title = $faker->sentence(6);
              $postObject->content = $faker->paragraph(6);
              $postObject->img = $faker->imageUrl(640,480,'post',true);
              $postObject->save();

            }
      }


}
