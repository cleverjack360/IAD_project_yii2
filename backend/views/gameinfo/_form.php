<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Gameinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gameinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companies_company_id')->textInput() ?>

    <?= $form->field($model, 'game_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'game_release')->textInput() ?>

    <?= $form->field($model, 'game_category')->dropDownList([ 'action' => 'Action', 'adventure' => 'Adventure', 'RPG' => 'RPG', 'racing' => 'Racing', 'puzzle' => 'Puzzle', 'fighting' => 'Fighting', 'sports' => 'Sports', ], ['prompt' => 'click for categories']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
