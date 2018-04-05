<?php

namespace LaxCorp\CatalogHostingBundle\Model;

/**
 * @inheritdoc
 */
class CatalogCustomer
{

    use Traits\IdTrait;
    use Traits\ServerNameTrait;
    use Traits\CustomerIdTrait;
    use Traits\CustomerLoginTrait;
    use Traits\CustomerPasswordTrait;
    use Traits\BackUrlTrait;
    use Traits\ThemeTrait;
    use Traits\ConfigPathTrait;
    use Traits\BaseCnameTrait;
}
