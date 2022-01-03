<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CriterionType extends Model
{
    use AsSource, Filterable, Attachable;
    protected array $allowedFilters = ['id'];

    public $timestamps = false;

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function criteria(): HasMany
    {
        return $this->hasMany(Criterion::class);
    }
}
