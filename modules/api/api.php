<?php

namespace app\modules\api;

/**
 * api module definition class
 */
class api extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\api\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
            $this->layout = '@app/modules/api/views/layouts/main';
        // custom initialization code goes here
    }
}
