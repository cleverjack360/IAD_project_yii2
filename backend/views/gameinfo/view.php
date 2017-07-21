<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Gameinfo */

$this->title = $model->game_id;
$this->params['breadcrumbs'][] = ['label' => 'Gameinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gameinfo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->game_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->game_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'game_id',
            'companies_company_id',
            'game_name',
            'game_release',
            'game_category',
        ],
    ]) ?>

</div>
