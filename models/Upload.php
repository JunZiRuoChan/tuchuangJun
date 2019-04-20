<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/20
 * Time: 16:02
 */
namespace app\models;
use yii\base\Model;

class Upload extends Model{
    public $file;

    public function rules()
    {
        return[
          [['file'],'file','extensions'=>'jpg,png,gif,bmp,webp','mimeTypes'=>'image/jpeg,image/png']
        ];
    }

    public function attributeLabels()
    {
        return[
            'file'=>'文件上传'
        ];
    }
}