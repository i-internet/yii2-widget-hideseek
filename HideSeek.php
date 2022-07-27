<?php
/**
 * @package yii2-widget-hideseek
 * @author Simon Karlen <simi.albi@gmail.com>
 * @version 1.0
 */

namespace simialbi\yii2\hideseek;

use simialbi\yii2\widgets\Widget;
use yii\helpers\Html;

/**
 * Class HideSeekWidget
 *
 * @author Simon Karlen <simi.albi@gmail.com>
 */
class HideSeek extends Widget
{
    /**
     * @var string the template used for composing the search field wrapper.
     */
    public $fieldTemplate = '<div class="search-field">{input}</div>';

    /**
     * @var array the HTML attributes for the widget input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [
        'name' => 'search',
        'type' => 'search'
    ];

    /**
     * @var array the options for the underlying JS plugin.
     */
    public $clientOptions = [
        'list' => '.list'
    ];

    /**
     * @inheritdoc
     */
    public function run(): string
    {
        Html::addCssClass($this->options, 'form-control');

        $input = Html::tag('input', null, $this->options);

        $this->registerPlugin();

        return strtr($this->fieldTemplate, [
            '{input}' => $input
        ]);
    }
}
