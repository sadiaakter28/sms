<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'class', 'section',
    ];

    public function section()
    {
        return $this->hasMany(Section::class);
    }
}
