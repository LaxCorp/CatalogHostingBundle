<?php
declare(strict_types=1);

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
    use Traits\BackUrlNewWindowTrait;
    use Traits\ThemeTrait;
    use Traits\ConfigPathTrait;
    use Traits\BaseCnameTrait;
    use Traits\AllowFromTrait;
    use Traits\ApplicabilityEnabledTrait;
}
