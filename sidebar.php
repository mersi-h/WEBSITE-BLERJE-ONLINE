<?php //include('funksion.php');?>
<div style="width:210px; margin-left:-170px; margin-top:20px; float:left; display:inline-grid;" class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Kategorite e produkteve</h3>
    </div>
    <div class="panel-body">
        <ul style="display:block" class="nav nav-pills nav-stacked category-menu">
            <?php  getPKat(); ?>
            
        </ul>
    </div>
</div>
<div style="width:210px; margin-left:-170px; " class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Nenkategorite e produkteve</h3>
    </div>
    <div class="panel-body">
        <ul style="display:block" class="nav nav-pills nav-stacked category-menu">
            <?php   getPnKat(); ?>
        </ul>
    </div>
</div>