<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gameinfo".
 *
 * @property integer $game_id
 * @property integer $companies_company_id
 * @property string $game_name
 * @property string $game_release
 * @property string $game_category
 *
 * @property Companies $companiesCompany
 */
class Gameinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gameinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['companies_company_id', 'game_name', 'game_release', 'game_category'], 'required'],
            [['companies_company_id'], 'integer'],
            [['game_release'], 'safe'],
            [['game_category'], 'string'],
            [['game_name'], 'string', 'max' => 50],
            [['companies_company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Companies::className(), 'targetAttribute' => ['companies_company_id' => 'company_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'game_id' => 'Game ID',
            'companies_company_id' => 'Companies Company ID',
            'game_name' => 'Game Name',
            'game_release' => 'Game Release',
            'game_category' => 'Game Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompaniesCompany()
    {
        return $this->hasOne(Companies::className(), ['company_id' => 'companies_company_id']);
    }
}
