<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "register".
 *
 * @property integer $id
 * @property string $pwd
 * @property string $mobile
 * @property string $birthday
 * @property string $address
 * @property string $name
 */
class Register extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pwd', 'mobile', 'birthday', 'address', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pwd' => 'Pwd',
            'mobile' => 'Mobile',
            'birthday' => 'Birthday',
            'address' => 'Address',
            'name' => 'Name',
        ];
    }
}
