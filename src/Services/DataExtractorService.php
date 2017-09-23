<?php

namespace CodeandoMexico\Sismomx\Core\Services;

use CodeandoMexico\Sismomx\Core\Filters\BaseDataFilter;
use CodeandoMexico\Sismomx\Core\Interfaces\DataFilterInterface;
use CodeandoMexico\Sismomx\Core\Filters\UrgencyDataFilter;
use CodeandoMexico\Sismomx\Core\Interfaces\DataReaderInterface;

/**
 * User: @fabianjuarezmx
 * Date: 9/23/17
 */
class DataExtractorService
{
    /**
     * @var DataReaderInterface
     */
    protected $dataReader;

    /**
     * Implementaciones para filtrar por categorias principales
     * @var array
     */
    protected $filters = [
        DataFilterInterface::URGENCY => UrgencyDataFilter::class
    ];

    /**
     * DataExtractorService constructor.
     * @param DataReaderInterface $dataReader
     */
    public function __construct(DataReaderInterface $dataReader)
    {
        $this->dataReader = $dataReader;
    }

    /**
     * @param array $sheetFilters
     * @param array $keywords
     * @param array $dates
     * @return string
     */
    public function extract(array $sheetFilters, $keywords = [],  $dates = [])
    {
        // leer el archivo
        $jsonData = $this->dataReader->getJson();

        // Si no se solicita una hoja(s) en especifico, solo se aplican filtro por fechas y palabras clave
        if (empty($sheetFilters)) {
            /** @var BaseDataFilter $dataFilter */
            $dataFilter = app(BaseDataFilter::class);
            $dataFilter->setJsonData($jsonData);
            $filteredData = $dataFilter->byDate($dates)->byKeywords($keywords)->getResult();
            if (is_array($filteredData)) {
                return json_encode($filteredData);
            }

            return $filteredData;
        }

        // todo implementar filtro por hojas especificas

        $dataFilteredBySheets = [];

        foreach ($sheetFilters as $sheetFilter) {

        }

        // return
    }

    private function getCategoryFilter()
    {
        // todo
    }
}
