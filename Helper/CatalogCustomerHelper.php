<?php

namespace LaxCorp\CatalogHostingBundle\Helper;

use LaxCorp\CatalogHostingBundle\Model\CatalogCustomer;

/**
 * @inheritdoc
 */
class CatalogCustomerHelper extends BaseHelper
{

    const PATH = 'customer';

    /**
     * @var string
     */
    public $class = CatalogCustomer::class;


    /**
     * @return CatalogCustomer
     */
    public function getDefault()
    {
        return new CatalogCustomer();
    }

    /**
     * @inheritdoc
     */
    public function getCustomer($mixed)
    {
        /** @var CatalogCustomer $customer */
        $customer = $this->findOneById($this->idResolver($mixed));

        return $customer;
    }

    /**
     * @inheritdoc
     */
    public function createCustomer(CatalogCustomer $customer)
    {
        $customer = $this->create($customer);

        return $customer;
    }

    /**
     * @inheritdoc
     */
    public function updateCustomer(CatalogCustomer $customer)
    {
        $customer = $this->update($customer);

        return $customer;
    }


    /**
     * @inheritdoc
     */
    public function deleteCustomer(CatalogCustomer $customer)
    {
        $customer = $this->delete($customer);

        return $customer;
    }

}