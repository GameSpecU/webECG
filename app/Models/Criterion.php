<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Criterion extends Model
{
    use HasRelationships;

    public $timestamps = false;
    protected $withCount = ['disorders'];
    public function question()
    {
        return $this->hasOne(Question::class);
    }

    public function answers()
    {
        return $this->hasManyDeepFromRelations($this->criterionType(), (new CriterionType())->answers());
    }

    public function criterionType()
    {
        return $this->belongsTo(CriterionType::class);
    }

    public function disorders()
    {
        return $this->hasManyDeepFromRelations($this->rules(), (new Rule())->disorder());
    }

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}