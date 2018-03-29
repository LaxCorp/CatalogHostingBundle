<?php

namespace LaxCorp\CatalogHostingBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CustomerLoginTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("customerLogin")
     * @Serializer\Type("string")
     */
    private $customerLogin;

    /**
     * @inheritdoc
     */
    public function setCustomerLogin($customerLogin)
    {
        $this->customerLogin = $customerLogin;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCustomerLogin()
    {
        return $this->customerLogin;
    }

}
