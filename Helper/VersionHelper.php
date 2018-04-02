<?php

namespace LaxCorp\CatalogHostingBundle\Helper;

use LaxCorp\CatalogHostingBundle\Model\Version;

/**
 * @inheritdoc
 */
class VersionHelper extends BaseHelper
{

    const PATH = 'version';

    /**
     * @var string
     */
    public $class = Version::class;

    /**
     * @inheritdoc
     */
    public function getVersion()
    {
        $json = $this->restHelper->getJson($this::PATH);

        /** @var Version $result */
        $result = $this->mappingHelper->deserialize($json, $this->class);

        return $result;
    }

}