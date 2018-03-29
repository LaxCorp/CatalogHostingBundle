Catalog hosting helper
=======================================================

Install 
-------
composer require laxcorp/catalog-hosting-bundle

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
catalog_hosting:
    url: 'https://catalog.hosting.api'
    login: 'test'
    password: 'test'
```
