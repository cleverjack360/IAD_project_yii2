<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gameinfo */

$this->title = 'Update Gameinfo: ' . $model->game_id;
$this->params['breadcrumbs'][] = ['label' => 'Gameinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->game_id, 'url' => ['view', 'id' => $model->game_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gameinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
