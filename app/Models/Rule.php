<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    public $timestamps = false;
    public function criterion()
    {
        return $this->belongsTo(Criterion::class);
    }
    public function disorder()
    {
        return $this->belongsTo(Disorder::class);
    }


    public function scopeGetRulesForValidation(Builder $builder)
    {
        return $builder->with('criterion')
                         ->get()
                         ->mapWithKeys(fn($rule) => [$rule->criterion->name => $rule->rule])->toArray();
    }
}