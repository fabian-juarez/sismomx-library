<?php

namespace CodeandoMexico\Sismomx\Core\Filters;

use CodeandoMexico\Sismomx\Core\Interfaces\DataFilterInterface;
use CodeandoMexico\Sismomx\Core\Interfaces\DataTransformerInterface;

/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
class UrgencyDataFilter extends DataFilterAbstract implements DataFilterInterface, DataTransformerInterface
{
    public function filter($columnFilters = [], $keywords = [], $dates = [])
    {
        // TODO: Implement filter() method.
    }

    public function transform()
    {
        // TODO: Implement transform() method.
    }
}
