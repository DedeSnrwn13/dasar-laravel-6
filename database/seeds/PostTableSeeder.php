<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    protected $post;
    protected $faker;

    public function __construct(Post $post, Faker $faker)
    {
        $this->post = $post;
        $this->faker = $faker;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 100) as $x) {
            $this->post->create([
                'title' => $this->faker->sentence(5),
                'content' => $this->faker->sentence(50)
            ]);
        }

        // Post::create([
        //     'title' => 'Totle 1',
        //     'content' => 'Example Content 1'
        // ]);
    }
}
