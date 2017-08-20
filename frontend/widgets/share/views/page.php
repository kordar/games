
<h1><?= $page['title']?></h1>

<p class="page-label">
    <i class="label label-success">作者: <?= $page['auth']?></i>

    <i class="label label-warning">来源: <?= $page['from']?></i>

    <i class="label label-info">发布时间: <?= date('Y-m-d', $page['publish_at'])?></i>
</p>

<?= $page['content']?>