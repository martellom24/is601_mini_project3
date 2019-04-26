<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Faqs
 *
 * @property int $id
 * @property string $questions
 * @property string $answers
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faqs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faqs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faqs query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faqs whereAnswers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faqs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faqs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faqs whereQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Faqs whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Faqs extends Model
{
    //
}
