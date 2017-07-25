<?php
//namespace app\models;

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $id
 * @property string $user_name
 * @property integer $game_id
 * @property string $review
 */
class Reviews extends \yii\db\ActiveRecord
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
			[['game_name'], 'string', 'max' => 100],
            [['user_name'], 'string', 'max' => 100],
            [['review'], 'string', 'max' => 500],
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
			'game_name' => 'Game Name',
        ];
    }
}
