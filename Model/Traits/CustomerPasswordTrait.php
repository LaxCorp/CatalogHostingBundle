<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CustomerPasswordTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("customerPassword")
     * @Serializer\Type("string")
     */
    private $customerPassword;

    /**
     * @inheritdoc
     */
    public function setCustomerPassword($customerPassword)
    {
        $this->customerPassword = $customerPassword;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCustomerPassword()
    {
        return $this->customerPassword;
    }

}
