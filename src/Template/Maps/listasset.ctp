<style>
    .asset-image-list{
        object-position: top; /* Center the image within the element */
        height: 105px !important;
        width: 185px !important;
        padding-top: 4px;
    }
</style>
<?php if(sizeof($asset) ==0){?>
<div class="row">
    <div class="col-md-12 text-center">
        <h5 class="pading-20-0 text-danger">ยังไม่มีข้อมูลที่ท่านค้นหา</h5>
    </div>
</div>

<?php } ?>
<div class="row property-list-area" style="margin:0px;">
    <?php foreach ($asset as $a): ?>
        <?php
        $bedroom;
        $bathroom;
        $parking;
        if (is_null($a->bedroom)) {
            $bedroom = 0;
        } else {
            $bedroom = $a->bedroom;
        }
        if (is_null($a->bathroom)) {
            $bathroom = 0;
        } else {
            $bathroom = $a->bathroom;
        }
        if (is_null($a->parking)) {
            $parking = 0;
        } else {
            $parking = $a->parking;
        }
        ?>
        <div data-target="Residential" class="property-list-list" style="margin: 0px;border-top: 1px solid #9E9E9E;">
            <div class="col-md-4 col-xs-4 property-list-list-image">
                <?php $default_img = 'recent-property-1.png'; ?>
                <?php foreach ($a['asset_images'] as $img): ?>
                    <?php
                    if ($img['isdefault'] === 'Y') {
                        $default_img = 'upload/' . $img['image']['name'];
                        break;
                    }
                    ?>
                <?php endforeach; ?>
                <?php $link = ['controller' => 'assets', 'action' => 'view', $a->id, 'title' => $a->name] ?>

                <?php
                $asset_title = '';
                
                if($a->issale==='Y'){
                    $asset_title = 'ขาย';
                }
                if($a->isrent==='Y'){
                    $asset_title = $asset_title!=''?$asset_title.'/ให้เช่า':'ให้เช่า';
                }
                $asset_title = $asset_title.$a->asset_type->name;
                
                ?>
                <?= $this->Html->link($this->Html->image($default_img, ['class' => 'img-responsive asset-image-list', 'alt' => '']), $link, ['escape' => false,'target'=>'_blank']) ?>
            </div>
            <div class="col-md-8 col-xs-8 property-list-list-info">
                <div class="col-md-12">
                    <h4 style="margin-bottom: 2px;"><?= $this->Html->link($asset_title,$link,['escape'=>false,'target'=>'_blank']) ?></h4>
                    <p style="margin:0px;"><?= h($a->address->amphur == '' ? '' : $a->address->amphur . '/') ?><?= h($a->address->district) ?></p>
                </div>
                <div class="col-md-12">
                    <?php if ($a->isspecial_marketprice === 'Y' || $a->isspecial_appraised === 'Y') { ?>
                        <span class="recent-properties-address f-color-green" style="text-decoration: line-through;margin-right: 10px;"><?= $this->Number->currency($a->price_amounnt_lower, 'THB', ['precision' => 1]) ?></span> 
                        <span class="recent-properties-address f-color-red"><?= $this->Number->currency($a->price_amounnt, 'THB', ['precision' => 1]) ?></span>
                    <?php } else { ?>
                        <span class="recent-properties-address f-color-red"><?= $this->Number->currency($a->price_amounnt, 'THB', ['precision' => 1]) ?></span>
                    <?php } ?>

                </div>
                <div class="col-md-12" >
                    <p class="fa fa-tint "> <?= ' ' . $bathroom . ' ' ?> น้ำ</p>
                    <p class="fa fa-bed "><?= ' ' . $bedroom . ' ' ?> นอน</p>
                    <p class="fa fa-car "> <?= ' ' . $parking . ' ' ?> จอดรถ</p>

                </div>

            </div>							
        </div>
    <?php endforeach; ?>

</div>