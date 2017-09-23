<?php

namespace CodeandoMexico\Sismomx\Core\Filters;

/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
class BaseDataFilter
{
    /**
     * @var
     */
    protected $jsonData;

    /**
     * @var null
     */
    protected $dateColumnIndex = null;

    /**
     * @var array
     */
    protected $filteredData = [];

    /**
     * @param array $dates
     * @return BaseDataFilter
     */
    public function byDate($dates = [])
    {
        if (empty($dates)) {
            return $this;
        }
        // todo
        return $this;
    }

    /**
     * @param array $keywords
     * @return $this
     */
    public function byKeywords($keywords = [])
    {
        if (empty($keywords)) {
            return $this;
        }
        // todo
        return $this;
    }

    /**
     * @return array
     */
    public function getResult()
    {
        // Si filteredData esta vacio, indica que no se indico ningun filtro y se retorna el json integro leido desde
        // google docs
        if (empty($this->filteredData)) {
            return $this->jsonData;
        }

        return $this->filteredData;
    }

    /**
     * @param mixed $jsonData
     */
    public function setJsonData($jsonData)
    {
        $this->jsonData = $jsonData;
    }

    /**
     * @param $jsonData
     * @return mixed
     */
    private function jsonToArray($jsonData)
    {
        return json_decode($jsonData, true);
    }
}
