<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pros $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subcategory')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success', 'id' => 'submit-btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>




<?php
$this->registerJs("
    $('#submit-btn').on('click', function() {
        var formData = $('#my-form').serializeArray();
        var jsonData = {};
        $.each(formData, function() {
            jsonData[this.name] = this.value;
        });
        
        // Send AJAX request to the PHP endpoint
        $.ajax({
            type: 'POST',
            url: 'ProsController/Create',
            data: {jsonData: JSON.stringify(jsonData)}, // Send the JSON data
            success: function(response) {
                console.log(response); // Handle the response here
            }
        });
    });
");
?>
