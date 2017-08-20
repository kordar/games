<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\res\models\ResourcesMain */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Resources Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resources-main-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'title',
            'alt',
            'desc:ntext',
            'url:url',
            'categroy',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
