<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use Orchid\Crud\Resource;
use App\Models\Criterion;
use App\Models\CriterionType;
use Orchid\Screen\Fields\Input;
use Illuminate\Validation\Rule;
use Orchid\Screen\Fields\Relation;
use Illuminate\Database\Eloquent\Model;

class CriterionResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Criterion::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('name'),
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
            TD::make('name'),
            TD::make('criterionType.type')
        ];
    }

    public function with(): array
    {
        return ['criterionType'];
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
    public function rules(Model $model): array
    {
        return ['name' => [
            'required',
            Rule::unique(self::$model, 'name')->ignore($model),
        ],];
    }
}
