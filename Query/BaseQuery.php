<?php

namespace LaxCorp\CatalogHostingBundle\Query;

/**
 * @inheritdoc
 */
class BaseQuery
{

    /**
     * @var string
     */
    public $sort = 'id,desc';

    /**
     * @var int
     */
    public $size = 1000;

    /**
     * @var int
     */
    public $page = 0;

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return BaseQuery
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $sort
     *
     * @return BaseQuery
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     *
     * @return BaseQuery
     */
    public function setPage(int $page)
    {
        $this->page = $page;

        return $this;
    }

}
