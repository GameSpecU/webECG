<?php

namespace App\Models;

use Str;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use AsSource, Filterable, Attachable;

    public $timestamps = false;
    protected array $allowedFilters = ['id'];

    public function criterionType(): BelongsTo
    {
        return $this->belongsTo(CriterionType::class);
}
    public function livewireComponent(): string
    {
        return '\\App\\Http\\Livewire\\Answers\\'.Str::studly($this->type).'AnswerCard';
    }
}
