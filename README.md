# ViewReact

ViewReact is an php library that uses the power of Facebook's React library & React-PHP-V8Js to render UI components on the server-side with PHP as well as on the client.
## Credits
* [React-PHP-V8Js](github.com/reactjs/react-php-v8js)
## Prerequisites
* Server running PHP 5.3.3+
* [V8Js PHP extension](http://php.net/v8js)

For a walkthrough how to setup V8Js PHP extension, use the links below:

- [On Linux](https://github.com/preillyme/v8js/blob/master/README.Linux.md)
- [On MacOS](https://github.com/preillyme/v8js/blob/master/README.MacOS.md)
- [On Windows](https://github.com/preillyme/v8js/blob/master/README.Win32.md)

## Usage

```php
use Arryanggaputra\ViewReact;
use Arryanggaputra\ViewReactSource;

$reactSource = new ViewReactSource('/path/your/react/or/bundle/*.js');
$view        = new ViewReact($reactSource);
echo $view->render('YourComponent', [
    'props'        => 'value',
    'anotherProps' => 'value',
]);
```
