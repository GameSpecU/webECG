<?php

namespace App\Orchid\Resources;

use App\Models\Question;
use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use App\Models\Criterion;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;

class QuestionResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Question::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('contents'),
            Relation::make('criterion_id')->fromModel(Criterion::class, 'name')->applyScope('withoutQuestion'),

        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('contents'),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
