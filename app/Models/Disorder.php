<?php

namespace App\Models;

use Validator;
use Illuminate\Database\Eloquent\Model;
use App\Collections\DisorderCollection;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Disorder extends Model
{
    use HasRelationships;
    public $timestamps = false;

    public function newCollection(array $models = []): DisorderCollection
    {
        return new DisorderCollection($models);
    }

    public function valid(array $parameters): bool
    {
        $rules     = $this->rules()->GetRulesForValidation();
        $validator = Validator::make($parameters, $rules);
        $passes    = $validator->passes();
        return $passes;
    }

    public function rules(): HasMany
    {
        return $this->hasMany(Rule::class);
    }

    public function criteria(): HasManyDeep
    {
        return $this->hasManyDeepFromRelations($this->rules(), (new Rule())->criterion());
    }


    public function scopeMatching($query, array $parameters)
    {
        return self::all()->valid($parameters)->toQuery()->with('criteria');
    }
}