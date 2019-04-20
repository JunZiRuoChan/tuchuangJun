<?php

namespace app\controllers;
use yii\web\Controller;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * 图床首页
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * 上传图片
     *
     * @return string
     */
    public function actionUpload()
    {

        return $this->render('upload');
    }
}
