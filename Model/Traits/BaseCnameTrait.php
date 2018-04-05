<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BaseCnameTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("baseCname")
     * @Serializer\Type("string")
     */
    private $baseCname;

    /**
     * @inheritdoc
     */
    public function __construct(string $baseCname)
    {
        $this->baseCname = $baseCname;
    }

    /**
     * @inheritdoc
     */
    public function setBaseCname(string $baseCname)
    {
        $this->baseCname = $baseCname;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBaseCname()
    {
        return $this->baseCname;
    }
}