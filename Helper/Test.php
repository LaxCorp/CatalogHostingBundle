<?php

namespace LaxCorp\CatalogHostingBundle\Helper;

use LaxCorp\CatalogHostingBundle\Model\Version;

/**
 * @inheritdoc
 */
class Test
{

    /**
     * @var VersionHelper
     */
    private $versionHelper;

    /**
     * @inheritdoc
     */
    public function __construct(VersionHelper $versionHelper)
    {
        $this->versionHelper = $versionHelper;
    }

    /**
     * @inheritdoc
     */
    public function isValid()
    {
        $catalogHosting = $this->versionHelper->getVersion();

        if($catalogHosting instanceof Version && $catalogHosting->getRevision()){
            return true;
        }

        return false;
    }

}