<?php

namespace filsh\yii2\readmore;

use yii\helpers\Json;

class Readmore extends yii\base\Widget
{
    public $body;
    
    public $clientOptions = [];
    
    public function init()
    {
        parent::init();
        
        if(empty($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        
        echo Html::beginTag('div', $this->options) . "\n";
    }
    
    /**
     * Renders the widget.
     */
    public function run()
    {
        echo "\n" . $this->body . "\n";
        echo "\n" . Html::endTag('div');

        $this->registerAssets();
    }
    
    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        ReadmoreAsset::register($view);

        $view->registerJs('jQuery("#' . $this->options['id'] . '").readmore(' . Json::encode($this->clientOptions) . ')');
    }
}