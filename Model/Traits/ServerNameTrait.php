<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ServerNameTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("serverName")
     * @Serializer\Type("string")
     */
    private $serverName;

    /**
     * @inheritdoc
     */
    public function setServerName($serverName)
    {
        $this->serverName = $serverName;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getServerName()
    {
        return $this->serverName;
    }
}