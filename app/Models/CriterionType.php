<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriterionType extends Model
{
    public $timestamps = false;

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function criteria()
    {
        return $this->hasMany(Criterion::class);
    }
}