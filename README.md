<p align="center">
    <a href="https://devinthehood.com"><img src="https://github.com/jul6art/symfony-auth/blob/master/assets/img/devinthehood.png?raw=true" alt="logo dev in the hood"></a>
</p>

<p align="center">
    <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="License"></a>
    <a href="https://github.com/jul6art/symfony-auth" target="_blank"><img src="https://img.shields.io/static/v1?label=stable&message=v1&color=green" alt="Version"></a>
</p>

jul6art/auth-bundle
=======================
Symfony auth bundle
-----------------------

Usage
-----

* Download [the archive](https://github.com/jul6art/auth-bundle/archive/master.zip)
* Change the bundle name according to your needs with the following updates

Updates
-------

update the [composer.json](https://github.com/jul6art/auth-bundle/blob/master/composer.json) file to define your bundle name, namespace, description, license, author, requirements and autoload

```json
{
    "name": "jul6art/auth-bundle",
    "type": "symfony-bundle",
    "description": "Symfony auth bundle",
    "homepage": "https://github.com/jul6art/auth-bundle",
    "license": "MIT",
    "authors": [
        {
            "name": "Jul6Art",
            "email": "admin@devinthehood.com",
            "homepage": "https://devinthehood.com/"
        }
    ],
    "require": {
        "php": "^7.4",
        "symfony/config": "^4.4 || ^5.0",
        "symfony/dependency-injection": "^4.4 || ^5.0",
        "symfony/http-kernel": "^4.4 || ^5.0"
    },
    "require-dev": {
        "dama/doctrine-test-bundle": "^6.0",
        "phpunit/phpunit": "^7.0",
        "symfony/phpunit-bridge": "^4.4 || ^5.0",
        "symfony/var-dumper": "^4.4 || ^5.0"
    },
    "autoload": {
        "psr-4": {
            "Jul6Art\\AuthBundle\\": ""
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "Tests/"
        }
    }
}
```

rename the [AuthBundle.php](https://github.com/jul6art/auth-bundle/blob/master/AuthBundle.php) file to YourBundleName and update the namespace 
according to your [composer.json](https://github.com/jul6art/auth-bundle/blob/master/composer.json) file

```php
// @TODO update the namespace
namespace Jul6Art\AuthBundle;

// ...

/**
 * Class AuthBundle.
 * 
 * @TODO rename the class with YourBundleName
 */
class AuthBundle extends Bundle
{
}
```

in [DependencyInjection/Configuration.php](https://github.com/jul6art/auth-bundle/blob/master/DependencyInjection/Configuration.php) file, update the namespace and the bundle configuration root name

```php
// @TODO update the namespace
namespace Jul6Art\AuthBundle\DependencyInjection;

// ...

/**
 * Class Configuration.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        // @TODO update the bundle configuration root name
        $builder = new TreeBuilder('auth');

        // ...

    }
}
```

rename the [DependencyInjection/AuthExtension.php](https://github.com/jul6art/auth-bundle/blob/master/DependencyInjection/AuthExtension.php) file to YourBundleExtension and edit the namespace 


```php
// @TODO update the namespace
namespace Jul6Art\AuthBundle\DependencyInjection;

// ...

/**
 * Class AuthExtension.
 *
 * @TODO rename the class with YourBundleExtension
 */
class AuthExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        // ...

        // @TODO update the namespace to compile
        $this->addAnnotatedClassesToCompile([
            'Jul6Art\\AuthBundle\\',
        ]);
    }

    // ...

}
```

in [phpunit.xml.dist](https://github.com/jul6art/auth-bundle/blob/master/phpunit.xml.dist) file, update the bundle name

```xml
<!-- @TODO update the bundle name in "AuthBundle test suite" -->
<testsuite name="AuthBundle test suite">
    <directory suffix="Test.php">./Tests</directory>
</testsuite>
```

Update the [README.md](https://github.com/jul6art/auth-bundle/blob/master/README.md) file if needed

Deploy (optional)
-----------------

Deploy your bundle to the final [github](https://github.com/) account and link this repo to [packagist](https://packagist.org/) so your can now require your bundle globally

```console
# @TODO update the namespace 
composer require jul6art/auth-bundle
```

License
-------

The Auth Bundle is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

&copy; 2021 [dev in the hood](https://devinthehood.com)
