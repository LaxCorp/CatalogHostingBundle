<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AllowFromTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("allowFrom")
     * @Serializer\Type("string")
     */
    private $allowFrom;

    /**
     * @inheritdoc
     */
    public function setAllowFrom($allowFrom)
    {
        $this->allowFrom = $allowFrom;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAllowFrom()
    {
        return $this->allowFrom;
    }

}
