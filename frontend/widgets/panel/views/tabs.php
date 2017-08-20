<div class="layout-tabs">
    <div class="tabs-title">
        <h3><span class="glyphicon glyphicon-send"></span> 竞技专区</h3>
        <ul class="nav nav-tabs">
            <?php foreach($navTabs as $id => $tab):?>
                <li class="pull-right <?= $tab['active']?>">
                    <a href="#<?= $id;?>" data-toggle="tab"><?= $tab['label']?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="tab-content">
        <?php foreach($tabContent as $_id => $content):?>
            <div class="tab-pane fade in <?= $navTabs[$_id]['active']?>" id="<?= $_id?>">
                <div class="row"><?= $content;?></div>
            </div>
        <?php endforeach;?>
    </div>
</div>



