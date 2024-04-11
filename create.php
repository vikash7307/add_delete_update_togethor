<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pros $model */

$this->title = 'Create Pros';
$this->params['breadcrumbs'][] = ['label' => 'Pros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
