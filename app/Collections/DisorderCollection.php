<?php

namespace App\Collections;

use App\Models\Disorder;

class DisorderCollection extends BaseEloquentCollection
{


    /**
     * @param  array  $parameters
     * @return DisorderCollection
     */
    public function valid(array $parameters): DisorderCollection
    {
        return $this->filter(fn(Disorder $disorder) => $disorder->valid($parameters));
    }

    public function criteria()
    {
        return $this->pluck('criteria')->first();
    }
}
