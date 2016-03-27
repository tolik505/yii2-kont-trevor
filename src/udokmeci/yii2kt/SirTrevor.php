<?php

namespace udokmeci\yii2kt;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use kato\sirtrevorjs\assets\SirTrevorAsset;
use yii\web\JsExpression;

/**
 * Class SirTrevor
 *
 * @package udokmeci\yii2kt
 */
class SirTrevor extends \kato\sirtrevorjs\SirTrevor
{
    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        $this->el = $this->model->formName();

        parent::init();
    }

    /**
     * @return string
     */
    public function getImageUploadUrl()
    {
        if (is_null($this->imageUploadUrl)) {
            $this->imageUploadUrl = Yii::$app->urlManager->createUrl(['imagesUpload/default/builder-image-upload']);
        }
        return $this->imageUploadUrl;
    }
}
