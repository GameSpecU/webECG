<?php

namespace App\Repositories;

use Validator;
use App\Models\Criterion;

class CriterionRepository implements CriterionRepositoryInterface
{

    public Criterion $criterion;

    public function __construct( Criterion $criterion)
    {
        $this->criterion = $criterion;
    }

}