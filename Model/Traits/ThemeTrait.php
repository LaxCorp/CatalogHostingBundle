<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ThemeTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("theme")
     * @Serializer\Type("string")
     */
    private $theme = 'default';

    /**
     * @inheritdoc
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTheme()
    {
        return $this->theme;
    }

}
