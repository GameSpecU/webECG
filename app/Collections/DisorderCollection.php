<?php

namespace App\Collections;

use App\Models\Disorder;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\DisordersRepositoryInterface;

class DisorderCollection extends BaseEloquentCollection
{


    public function __construct(array $models)
    {
        parent::__construct($models);
    }


    /**
     * @param  array  $parameters
     * @return DisorderCollection
     */
    public function valid(array $parameters) : DisorderCollection
    {
        return $this->filter(fn(Disorder $disorder) => $disorder->valid($parameters));
    }

    public function criteria()
    {
        return $this->pluck('criteria');
    }







}