<?php

namespace common\models\database;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $surname
 * @property integer $sex
 * @property string $avatar
 * @property string $phone
 * @property string $email
 * @property integer $created_at
 * @property integer $updated_at
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'surname', 'sex', 'avatar', 'phone', 'email', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'sex', 'created_at', 'updated_at'], 'integer'],
            [['name', 'surname'], 'string', 'max' => 100],
            [['avatar', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'user_id' => Yii::t('common', 'User ID'),
            'name' => Yii::t('common', 'Name'),
            'surname' => Yii::t('common', 'Surname'),
            'sex' => Yii::t('common', 'Sex'),
            'avatar' => Yii::t('common', 'Avatar'),
            'phone' => Yii::t('common', 'Phone'),
            'email' => Yii::t('common', 'Email'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }
}
