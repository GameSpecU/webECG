<?php

namespace App\Orchid\Resources;

use App\Models\Rule;
use Orchid\Screen\TD;
use App\Models\Disorder;
use Orchid\Crud\Resource;
use App\Models\Criterion;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;

class RuleResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Rule::class;


    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('rule'),
            Relation::make('criterion_id')->fromModel(Criterion::class, 'name'),
            Relation::make('disorder_id')->fromModel(Disorder::class, 'name'),
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
            TD::make('rule'),
            TD::make('criterion.name', 'Criterion'),
            TD::make('disorder.name', 'Disorder'),
        ];
    }

    public function with(): array
    {
        return ['criterion', 'disorder',];
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
