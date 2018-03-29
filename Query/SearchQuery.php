<?php

namespace LaxCorp\CatalogHostingBundle\Query;

/**
 * @inheritdoc
 */
class SearchQuery extends BaseQuery
{

    /**
     * @var string
     */
    public $search;

    /**
     * @return mixed
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param $search
     *
     * @return $this
     */
    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

}
