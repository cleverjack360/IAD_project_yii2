<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Gameinfo */

$this->title = 'Create Gameinfo';
$this->params['breadcrumbs'][] = ['label' => 'Gameinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gameinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
