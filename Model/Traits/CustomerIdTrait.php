<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CustomerIdTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("customerId")
     * @Serializer\Type("integer")
     */
    private $customerId;

    /**
     * @inheritdoc
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @inheritdoc
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }
}