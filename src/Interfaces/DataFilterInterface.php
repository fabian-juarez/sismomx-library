<?php

namespace CodeandoMexico\Sismomx\Core\Interfaces;

/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
interface DataFilterInterface
{
    const URGENCY = 'urgencias';

    /**
     * @param array $columnFilters
     * @param array $keywords
     * @param array $dates
     * @return mixed
     */
    public function filter($columnFilters = [], $keywords = [], $dates = []);
}
