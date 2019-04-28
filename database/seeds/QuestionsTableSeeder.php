<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        $users->each(function ($user) {
            $question = factory(Question::class)->make();
            $question->user()->associate($user);
            $question->save();
        });
    }
}
