Billing partner helper
=======================================================

Install 
-------
composer require laxcorp/hosting-api-bundle

Add in app/AppKernel.php
------------------------
```php
$bundles = [
    new LaxCorp\CatalogHostingBundle\CatalogHostingBundle(),
    new Circle\RestClientBundle\CircleRestClientBundle(),
    new Symfony\Bundle\MonologBundle\MonologBundle(),
]
```

And add in config.yaml

```yaml
laxcorp_hosting_api:
    url: 'https://catalog.hosting.api'
    login: 'test'
    password: 'test'
```
