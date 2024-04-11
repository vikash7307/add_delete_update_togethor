<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pros $model */

$this->title = 'Update Pros: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
