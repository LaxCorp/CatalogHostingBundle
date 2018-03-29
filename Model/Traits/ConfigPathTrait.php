<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ConfigPathTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("configPath")
     * @Serializer\Type("string")
     */
    private $configPath;

    /**
     * @inheritdoc
     */
    public function setConfigPath($configPath)
    {
        $this->configPath = $configPath;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getConfigPath()
    {
        return $this->configPath;
    }

}
