<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Question extends Model
{
    use AsSource, Filterable, Attachable;
    use HasRelationships;

    public $timestamps = false;

    public function answers()
    {
        return $this->hasManyDeepFromRelations($this->criterion(), (new Criterion())->answers());
    }

    public function criterion()
    {
        return $this->belongsTo(Criterion::class);
    }
}
