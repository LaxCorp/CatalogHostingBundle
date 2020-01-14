<?php
declare(strict_types=1);

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ApplicabilityEnabledTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("applicabilityEnabled")
     * @Serializer\Type("bool")
     */
    private $applicabilityEnabled = false;

    /**
     * @inheritdoc
     */
    public function isApplicabilityEnabled(): bool
    {
        return $this->applicabilityEnabled;
    }

    /**
     * @inheritdoc
     */
    public function setApplicabilityEnabled(bool $applicabilityEnabled)
    {
        $this->applicabilityEnabled = $applicabilityEnabled;

        return $this;
    }

}