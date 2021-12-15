<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use Orchid\Screen\Cell;
use App\Models\Disorder;
use Orchid\Crud\Resource;
use Orchid\Screen\Action;
use Orchid\Screen\Fields\Input;
use Illuminate\Database\Eloquent\Model;

class DisorderResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Disorder::class;



    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('name'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return Cell[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('name'),

        ];
    }

    public function with(): array
    {
        return ['rules'];
    }

    public function actions(): array
    {
        return [];
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
