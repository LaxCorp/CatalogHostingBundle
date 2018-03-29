<?php

namespace LaxCorp\CatalogHostingBundle\Helper;

use LaxCorp\CatalogHostingBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
abstract class BaseHelper
{

    /**
     * api resourse path
     * /resourse
     * /resourse/{id}/other_resourse
     */
    const PATH = '';

    /**
     * @var string
     */
    public $class;

    /**
     * @var RestHelper
     */
    public $restHelper;

    /**
     * @var MappingHelper
     */
    public $mappingHelper;

    /**
     * BaseHelper constructor.
     *
     * @param RestHelper    $restHelper
     * @param MappingHelper $mappingHelper
     */
    public function __construct(RestHelper $restHelper, MappingHelper $mappingHelper)
    {
        $this->restHelper    = $restHelper;
        $this->mappingHelper = $mappingHelper;
    }

    /**
     * @param string $path
     * @param array  $pathVars
     *
     * @return string
     */
    public function pathParser(string $path, array $pathVars = [])
    {
        foreach ($pathVars as $key => $value) {
            $pattern = '/{' . preg_quote($key, '/') . '}/';
            $path    = preg_replace($pattern, $value, $path);
        }

        return $path;
    }

    /**
     * @inheritdoc
     */
    public function getCount(SearchQuery $query, $pathVars = [])
    {
        $path = $this->pathParser($this::PATH, $pathVars) . '/count/?' . http_build_query($query);

        $result = $this->restHelper->getText($path);

        if(preg_match('/\"status\":404/', $result)){
            return 0;
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function find(SearchQuery $query, $pathVars = [])
    {
        $path = $this->pathParser($this::PATH, $pathVars) . '/?' . http_build_query($query);

        $json = $this->restHelper->getJson($path);

        return $this->mappingHelper->deserialize($json, 'ArrayCollection<' . $this->class . '>');
    }

    /**
     * @inheritdoc
     */
    public function findOneBy(SearchQuery $query, $pathVars = [])
    {
        $query->setSize(1);

        $results = $this->find($query, $pathVars);

        foreach($results as $result){
            return $result;
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function findOneById($id, $pathVars = [])
    {
        if (!$id) {
            return null;
        }

        $path = $this->pathParser($this::PATH, $pathVars) . '/' . $id;

        $json = $this->restHelper->getJson($path);

        return $this->mappingHelper->deserialize($json, $this->class);
    }

    /**
     * @inheritdoc
     */
    public function create($object, $pathVars = [], $resultClass = null)
    {
        $path = $this->pathParser($this::PATH, $pathVars);

        $class = ($resultClass) ? $resultClass : get_class($object);

        $json = $this->mappingHelper->serialize($object);

        $jsonResult = $this->restHelper->postJson($path, $json);

        return $this->mappingHelper->deserialize($jsonResult, $class);
    }


    /**
     * @param object $object
     * @param array  $pathVars
     *
     * @return array|object
     */
    public function update($object, $pathVars = [])
    {

        $path = $this->pathParser($this::PATH, $pathVars) . '/' . $object->getId();

        $class = get_class($object);

        $json = $this->mappingHelper->serialize($object);

        $jsonResult = $this->restHelper->putJson($path, $json);

        return $this->mappingHelper->deserialize($jsonResult, $class);
    }

    /**
     * @param object $object
     * @param array  $pathVars
     *
     * @return array|object
     */
    public function delete($object, $pathVars = [])
    {

        $path = $this->pathParser($this::PATH, $pathVars) . '/' . $object->getId();

        $class = get_class($object);

        $jsonResult = $this->restHelper->delete($path);

        return $this->mappingHelper->deserialize($jsonResult, $class);
    }

    /**
     * @param int|object|array $mixed
     *
     * @return int|null
     */
    protected function idResolver($mixed)
    {
        $type = gettype($mixed);

        if ($type === 'integer') {
            return $mixed;
        }

        if ($type === 'object' && get_class($mixed) === $this->class) {
            /** @var object $mixed */
            return $mixed->getId();
        }

        if ($type === 'array' && array_key_exists('id', $mixed)) {
            return $mixed['id'];
        }

        return null;
    }

    /**
     * @param $int
     *
     * @return int
     */
    public function timeToLong($int)
    {
        return $int * 1000;
    }

}
