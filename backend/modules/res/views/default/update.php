<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\res\models\ResourcesMain */

$this->title = 'Update Resources Main: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Resources Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resources-main-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
