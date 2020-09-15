<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Step;

class Todo extends Model
{
    protected $fillable = [
        'title',
        'completed',
        'user_id',
        'description',
        'todo_date'

    ];

    public function setTransactionDateAttribute($value)
{
    $this->attributes['todo_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
}
    public function steps()
    {
        return $this->hasMany(Step::class);
    }
}
