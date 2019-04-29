<?php

namespace Tests\Unit;

use App\User;
use App\Question;
use App\Answer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnswerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = factory(User::class)->make();
        $user->save();
        $question = factory(Question::class)->make();
        $question->user()->associate($user);
        $question->save();
        $answer = factory(Answer::class)->make();
        $answer->user()->associate($user);
        $answer->question()->associate($question);
        $this->assertTrue($answer->save());
    }
}
