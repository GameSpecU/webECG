<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rule extends Model
{
    use AsSource, Filterable, Attachable;

    public $timestamps = false;

    protected array $allowedFilters = ['id'];

    public function criterion(): BelongsTo
    {
        return $this->belongsTo(Criterion::class);
    }

    public function disorder(): BelongsTo
    {
        return $this->belongsTo(Disorder::class);
    }


    public function scopeGetRulesForValidation(Builder $builder): array
    {
        return $builder->with('criterion')
            ->get()
            ->mapWithKeys(fn(Rule $rule) => [$rule->criterion->name => $rule->rule])->toArray();
    }
}
