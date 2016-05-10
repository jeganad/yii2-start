<?php

namespace common\models\database;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property integer $id
 * @property integer $from_id
 * @property integer $whom_id
 * @property string $message
 * @property integer $status
 * @property integer $is_delete_from
 * @property integer $is_delete_whom
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $whom
 * @property User $from
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from_id', 'whom_id', 'status', 'is_delete_from', 'is_delete_whom', 'created_at', 'updated_at'], 'integer'],
            [['whom_id', 'message', 'created_at', 'updated_at'], 'required'],
            [['message'], 'string', 'max' => 750],
            [['whom_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['whom_id' => 'id']],
            [['from_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['from_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'from_id' => Yii::t('common', 'From ID'),
            'whom_id' => Yii::t('common', 'Whom ID'),
            'message' => Yii::t('common', 'Message'),
            'status' => Yii::t('common', 'Status'),
            'is_delete_from' => Yii::t('common', 'Is Delete From'),
            'is_delete_whom' => Yii::t('common', 'Is Delete Whom'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWhom()
    {
        return $this->hasOne(User::className(), ['id' => 'whom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrom()
    {
        return $this->hasOne(User::className(), ['id' => 'from_id']);
    }
}
