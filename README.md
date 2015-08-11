# reactjs-php-bundle

Render ReactJS components in server side using [reactjs/react-php-v8js](https://github.com/reactjs/react-php-v8js)

## Prerequisites

[V8Js PHP extension](http://php.net/v8js)

## Installation

```bash
composer require qpautrat/reactjs-php-bundle
```

Whitelist following library in require section until maintainers release a version

```json
"reactjs/react-php-v8js": "*@dev"
```

Register the bundle in your `AppKernel`

```php
new QPautrat\ReactjsPhpBundle\ReactjsPhpBundle()
```

## Configuration

Add in your `config.yml` file

```yaml
reactjs_php:
    library_path: path_to_reactjs_library
    app_path: path_to_app_components
```

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

## Demo

We provide a small demo application in another [repository](https://github.com/qpautrat/demo-reactjs-php-bundle), living in a docker container, that you can use to test.

## License

This bundle is available under the MIT License