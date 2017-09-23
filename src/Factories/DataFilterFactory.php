<?php

namespace CodeandoMexico\Sismomx\Core\Factories;

use CodeandoMexico\Sismomx\Core\Interfaces\DataFilterInterface;
use CodeandoMexico\Sismomx\Core\Interfaces\DataTransformerInterface;

/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
class DataFilterFactory
{
    /**
     * @param $dataFilterPath
     * @return mixed
     * @throws \Exception
     */
    public function create($dataFilterPath)
    {
        $filter = app($dataFilterPath);

        if (!$filter instanceof DataFilterInterface || !$filter instanceof DataTransformerInterface) {
            $msg = $dataFilterPath . ' debe implementar a ' . DataFilterInterface::class . ' y ';
            $msg .= DataTransformerInterface::class;
            throw new \Exception($msg);
        }

        return $filter;
    }
}
