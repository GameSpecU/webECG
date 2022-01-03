<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use App\Models\Answer;
use Orchid\Crud\Resource;
use App\Models\CriterionType;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;

class AnswerResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Answer::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('contents'),
            Relation::make('criterion_type_id')->fromModel(CriterionType::class, 'type'),

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
            TD::make('criterionType.type', 'Criterion Type')
        ];
    }

    public function with(): array
    {
        return ['criterionType',];
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
