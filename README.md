# reactjs-php-bundle

Render ReactJS components in server side using reactjs/react-php-v8js

## Prerequisites

[V8Js PHP extension](http://php.net/v8js)

## Installation

```bash
composer require qpautrat/reactjs-php-bundle
```

Register the bundle in your `AppKernel`

```php
new QPautrat\ReactjsPhpBundle\ReactjsPhpBundle()
```

## Configuration

In your `config.yml` file

```yaml
reactjs_php:
    library_path: path_to_reactjs_library
    app_path: path_to_app_components
```
*NB: Configuration uses ```file_exists()```. Refer to PHP documentation to know which path you can use*

## Usage

Use helper with php engine

```php
<?php echo $view['reactjs']->renderMarkup('Component', array('foo' => 'bar')) ?>
<?php echo $view['reactjs']->renderJS('Component', '#dom_element', array('foo' => 'bar')) ?>
```

Or you can use our twig extension as well

```html
{{ 'Component'|reactjs_render_markup({'foo':'bar'}) }}
{{ 'Component'|reactjs_render_js('#component', {'foo':'bar'}) }}
```

## Tests

We provide a small app, living in a docker container, that you can use to test.

```bash
docker build -t reactjs-php-bundle .
docker run --name reactjs-php-bundle -p 9000:9000 -v $PWD:/var/www/reactjs-php-bundle reactjs-php-bundle
```

Go to `http://localhost:9000`

## License

This bundle is available under the MIT License