<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\Author_detail;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {



        $author = new Author();
        $author->name = $faker->name();
        $author->surname = $faker->lastName();
        $author->mail = $faker->email();
        $author->save();

        $author_detail = new Author_detail;
        $author_detail-> date_of_birth = $faker->date();
        $author_detail-> license_number = rand(1,3000);
        $author_detail-> biography = $faker-> text($maxNbChars = 200);
        $author_detail-> author_image = 'https://picsum.photos/seed/'.rand(1,1000).'/200/300';
        $author->detail()->save($author_detail);


    }
}
