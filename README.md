Fenrir Api Client Bundle
========================

Symfony bundle to integrate Fenrir Api client in a Symfony application.


## Composer

Install via composer:

``` js
{
    "require": {
        "canaltp/fenrir-api-client-bundle": "~1.0"
    }
}
```

Register the bundle in your **AppKernel**:

``` php
            new CanalTP\FenrirApiClientBundle\CanalTPFenrirApiClientBundle(),
```

Add Fenrir Api base url in your configuration and parameters:

**app/config/config.yml**:

``` yml
canal_tp_fenrir_api_client:
    uri: %fenrir_api_uri%
```

**app/config/parameters.yml**, and also **parameters.yml.dist**:

``` yml
    fenrir_api_uri: http://fenrir-api.local/api/
```


## Usage

A Fenrir client is available in your container, then:

``` php
$fenrirApi = $container->get('canal_tp_fenrir.api');

$fenrirApi->getUser(2);
```


## License

This project is under [GPL-3.0 License](LICENSE).
