<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GameinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gameinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gameinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gameinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'game_name',
            'game_release',
            'game_category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
