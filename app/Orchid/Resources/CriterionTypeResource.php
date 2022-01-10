<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use Orchid\Crud\Resource;
use App\Models\CriterionType;
use Orchid\Screen\Fields\Input;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;

class CriterionTypeResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = CriterionType::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('type')->title('Criterion Type'),

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
            TD::make('type')
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

    public function rules(Model $model): array
    {
        return ['type' => [
            'required',
            Rule::unique(self::$model, 'type')->ignore($model),
        ],];
    }
}
