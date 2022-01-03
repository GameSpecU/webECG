<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Criterion extends Model
{
    use AsSource, Filterable, Attachable;

    use HasRelationships;

    public $timestamps = false;
    protected $withCount = ['disorders'];
    protected array $allowedFilters = ['id'];

    public function question(): HasOne
    {
        return $this->hasOne(Question::class);
    }

    public function answers(): HasManyDeep
    {
        return $this->hasManyDeepFromRelations($this->criterionType(), (new CriterionType())->answers());
    }

    public function criterionType(): BelongsTo
    {
        return $this->belongsTo(CriterionType::class);
    }

    public function disorders(): HasManyDeep
    {
        return $this->hasManyDeepFromRelations($this->rules(), (new Rule())->disorder());
    }

    public function rules(): HasMany
    {
        return $this->hasMany(Rule::class);
    }

    public function scopeWithoutQuestion($query)
    {
        return $query->whereDoesntHave('question');
    }
}
