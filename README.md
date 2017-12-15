# yii2-widget-hideseek
This extension provides a hideseek search widget for yii2 framework in bootstrap style. It's based 
on [HideSeek](http://vdw.github.io/HideSeek/) from [Dimitris Krestos](https://github.com/vdw).
 
## Resources
 * [yii2](https://github.com/yiisoft/yii2) framework
 * [HideSeek](https://github.com/vdw/HideSeek)
 
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require --prefer-dist simialbi/yii2-widget-hideseek
```

or add 

```
"simialbi/yii2-widget-hideseek": "*"
```

to the ```require``` section of your `composer.json`

## Example Usage

To include hideseek search in one of your pages, call the widget like this:
```php
<?php
/* @var $this yii\web\View */

use simialbi\yii2\hideseek\HideSeek;

$this->title = 'myForm';
$this->params['breadcrumbs'][] = $this->title;

?>
<article>
	<label for="search">Programming Language Popularity</label>
	<?=HideSeek::widget([
		'options' => [
			'placeholder' => 'Start typing here',
			'autocomplete' => 'off'
		],
		'clientOptions' => [
			'.default_list'
		]
	]);
	?>
	<ul class="vertical default_list">
		<li>C</li>
		<li>Java</li>
		<li>PHP</li>
		<li>JavaScript</li>
		<li>C++</li>
		<li>Python</li>
		<li>Shell</li>
		<li>Ruby</li>
		<li>Objective C</li>
		<li>C#</li>
	</ul>
  </article>
```

## License

**yii2-widget-hideseek** is released under MIT license. See bundled [LICENSE](LICENSE) for details.