<?php
namespace app\models;

//namespace frontend\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property string $user_name
 * @property integer $game_id
 * @property string $review
 *
 * @property Gameinfo $game
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'game_id', 'review'], 'required'],
            [['game_id'], 'integer'],
            [['user_name'], 'string', 'max' => 100],
            [['review'], 'string', 'max' => 500],
            [['game_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gameinfo::className(), 'targetAttribute' => ['game_id' => 'game_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'User Name',
            'game_id' => 'Game ID',
            'review' => 'Review',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGame()
    {
        return $this->hasOne(Gameinfo::className(), ['game_id' => 'game_id']);
    }
}
