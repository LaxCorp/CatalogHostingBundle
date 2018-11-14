<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BackUrlNewWindowTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("backUrlNewWindow")
     * @Serializer\Type("bool")
     */
    private $backUrlNewWindow = false;

    /**
     * @inheritdoc
     */
    public function isBackUrlNewWindow(): bool
    {
        return $this->backUrlNewWindow;
    }

    /**
     * @inheritdoc
     */
    public function setBackUrlNewWindow(bool $backUrlNewWindow)
    {
        $this->backUrlNewWindow = $backUrlNewWindow;

        return $this;
    }


}