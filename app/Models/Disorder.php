<?php

namespace App\Models;

use Validator;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Illuminate\Database\Eloquent\Model;
use App\Collections\DisorderCollection;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Disorder extends Model
{
    use HasRelationships;
    use AsSource, Filterable, Attachable;

    public $timestamps = false;
    protected array $allowedFilters = ['id'];

    public function newCollection(array $models = []): DisorderCollection
    {
        return new DisorderCollection($models);
    }

    public function valid(array $parameters): bool
    {
        $rules     = $this->rules()->GetRulesForValidation();
        $validator = Validator::make($parameters, $rules);
        return $validator->passes();
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
        return $query->get()->valid($parameters)->toQuery();
    }
}
