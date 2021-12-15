<?php

namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $timestamps = false;


    public function livewireComponent(): string
    {
        $type = 'button';
        return '\\App\\Http\\Livewire\\'.Str::studly($type).'AnswerCard';
    }
}
