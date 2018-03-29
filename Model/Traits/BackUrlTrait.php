<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BackUrlTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("backUrl")
     * @Serializer\Type("string")
     */
    private $backUrl;

    /**
     * @inheritdoc
     */
    public function setBackUrl($backUrl)
    {
        $this->backUrl = $backUrl;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBackUrl()
    {
        return $this->backUrl;
    }
}