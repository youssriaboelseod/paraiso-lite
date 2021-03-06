<?php

namespace App\Filters;

use App\Support\Filter\Filter;
use App\Models\Process;
use App\Filters\Fields\Base\TextField;

class ProcessFilter extends Filter
{
    protected $model = Process::class;

    protected function fields(): array
    {
        return [
            new TextField('name', 'Name'),
        ];
    }
}