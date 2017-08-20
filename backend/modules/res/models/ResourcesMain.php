<?php

namespace backend\modules\res\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%resources_main}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $alt
 * @property string $desc
 * @property string $url
 * @property integer $categroy
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class ResourcesMain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resources_main}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['desc'], 'string'],
            [['categroy', 'status'], 'integer'],
            [['title', 'alt', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'alt' => '作者',
            'desc' => '描述',
            'url' => '图片地址',
            'categroy' => 'Categroy',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
