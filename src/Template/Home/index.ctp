<script>
    var amphurArr = <?= $amphurs ?>;
    var site_url = '<?= SITE_URL ?>';

    function amphurs_filter(province_id) {
        var amphurOption = document.getElementById("amphur-id");
        amphurOption.innerHTML = "";

        amphurOption = document.getElementById("amphur-id");
        var option = document.createElement("option");
        option.value = '';
        option.text = 'เขต/อำเภอ';
        amphurOption.appendChild(option);

        for (var i = 0; i < amphurArr.length; i++) {
            if (amphurArr[i].province_id === province_id) {
                var option = document.createElement("option");
                option.value = amphurArr[i].id;
                option.text = amphurArr[i].amphur_name;
                amphurOption.appendChild(option);
            }
        }
    }
</script>
<style>
    .lisi-bg {
        background: #34495e;
        height: 46px;
        max-height: 100%;
        width: 100%;
    }

    .property-type {
        max-width: 800px;
        display: inline-block;
        margin-left: auto;
        margin-bottom: 0px;
    }

    .property-type li {

        padding: 0 20px;
    }
</style>
<?= $this->Html->css('map/style.css') ?>


<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-normal-size">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บริษัททำหน้าที่<a href=" http://www.lovethaihome.com/asset-order/sales">รับฝากขายบ้าน-ที่ดิน และอสังหา</a>ฯอื่นๆ ในเขตกรุงเทพและปริมณฑล โดยทาง <strong><?= $this->Html->link('บริษัท เบสท์แลนด์ แอนด์ เฮ้าส์ซิ่ง', ['controller' => 'home'], ['title' => 'เบสท์แลนด์ แอนด์ เฮ้าส์ซิ่ง', 'alt' => 'เบสท์แลนด์ แอนด์ เฮ้าส์ซิ่ง']) ?></strong> ดำเนินกิจการเป็นตัวแทนขายอสังหาฯ โดยใช้แบรนท์ <strong>ERA</strong>
                    เป็นแห่งแรกของประเทศไทย ดำเนินกิจการมาเกือบ 30 ปี ทำหน้าที่ช่วยโฆษณาประชาสัมพันธ์ให้กับผู้ที่ทำการ<a href=" http://www.lovethaihome.com/asset-order/sales">ฝากขายทรัพย์สิน</a>ไว้กับทางบริษัทให้ฟรี! ในทุกๆช่องทาง ตั้งแต่ติดป้าย ลงโฆษณาใน
                    <strong><?= $this->Html->link('www.lovethaihome.com', ['controller' => 'home'], ['title' => 'lovethaihome', 'alt' => 'lovethaihome']) ?></strong> และตามเว็บไซต์ชั้นนำต่างๆ พร้อมทั้งมีทีมงานที่คอยอัพข้อมูลให้ตลอดเวลา ลงโฆษณาในสื่อโซเซียล <a href=" https://www.facebook.com/lovethaihome1/">Facebook</a> <a href=" https://www.instagram.com/era_ladprao101/">Instagram</a> <a href=" https://twitter.com/era_ladprao101">Twitter</a> และมีการ Co-Broker
                    กันในเครือข่ายของ <strong>ERA</strong> มากกว่า 30 สาขาทั้งประเทศ รวมทั้งให้คำปรึกษาในการตั้งราคาขายให้เหมาะสม (ราคาตลาด) มีบริการจัดหาสินเชื่อ (ในกรณีที่ผู้ซื้อต้องการขอสินเชื่อ)
                    ช่วยคิดคำนวนค่าใช้จ่ายในการโอน และเอกสารที่ต้องใช้ในวันที่โอนกรรมสิทธิ์ และพาไปโอนที่สำนักงานที่ดินจนเสร็จ แล้วถึงค่อยคิดค่าบริการ 3% จากราคาที่ขายได้ (ไม่ใช่ราคาตั้งขาย)
                    (นโยบายของบริษัทห้ามบวกราคาขายโดยเด็ดขาด) ถ้าทรัพย์สินที่ขายต่ำกว่า 1 ล้านบาท ทางบริษัทคิดค่บริการ 30,000 บาท จ่ายค่าบริการวันที่โอนกรรมสิทธิ์ที่สำนักงานที่ดิน
                </p>
                <p class="text-normal-size">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผู้ที่ต้องการ<?= $this->Html->link('ซื้อบ้าน-ที่ดิน', ['controller' => 'home'], ['title' => 'ซื้อบ้าน-ที่ดิน', 'alt' => 'ซื้อบ้าน-ที่ดิน']) ?> และอสังหาฯอื่นๆทางบริษัทได้แยกประเภทของทรัพย์สิน และแยกตามโซนรวมทั้งสามารถหาทรัพย์สินได้ตามที่ตั้งของทรัพย์สินในแผนที่ของ Google
                    เพื่อให้ง่ายต่อการค้นหา และเรายังมีการแนะนำทรัพย์สินที่<?= $this->Html->link('ขายต่ำกว่าราคาประเมิน', ['controller' => 'home'], ['title' => 'ขายต่ำกว่าราคาประเมิน', 'alt' => 'ขายต่ำกว่าราคาประเมิน']) ?>ของกรมที่ดิน และทรัพย์สินที่<a href=" http://www.lovethaihome.com/assets/lists?selltype=special_marketprice">ขายต่ำกว่าราคาตลาด</a>ให้เลือกซื้ออีกต่างหาก
                </p>
            </div>
        </div>
        <div class="row padding-top-20">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="embed-responsive embed-responsive-16by9">

                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uwaVZ6KMrno?si=J-2bVMVpBI3M_vfp&rel=0&amp;controls=0&amp;showinfo=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-lg-offset-3" style="margin-top: 15px;">
                <?= $this->Html->image('line-qr-banner.webp', ['class' => 'img-responsive ']) ?>
            </div>

        </div>

    </div>
</section>


<section style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 10px;">
                <div class="col-md-12 text-center" style="padding: 10px 10px;border-top: #9E9E9E solid 1px;">
                    <ul class="property-type">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ช่วงราคา <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" class="small" data-value="1" tabIndex="-1"><input name="price" value="price_amounnt<500000" type="radio" id="p_1" />&nbsp; <label for="p_1">น้อยกว่า 500,000</label></a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="2" tabIndex="-1"><input name="price" value="price_amounnt>500000 AND price_amounnt<1500000" type="radio" id="p_2" />&nbsp; <label for="p_2">500,001 - 1,500,000</label></a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="3" tabIndex="-1"><input name="price" value="price_amounnt>1500000 AND price_amounnt<3000000" type="radio" id="p_3" />&nbsp; <label for="p_3">1,500,001 - 3,000,000</label></a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="4" tabIndex="-1"><input name="price" value="price_amounnt>3000000 AND price_amounnt<5000000" type="radio" id="p_4" />&nbsp; <label for="p_4">3,000,001 - 5,000,000</label></a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="5" tabIndex="-1"><input name="price" value="price_amounnt>5000000 " type="radio" id="p_5" />&nbsp; <label for="p_5">มากกว่า 5,000,000</label></a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ห้องนอน <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" class="small" data-value="1" tabIndex="-1"><input name="bed[]" value="1" type="checkbox" />&nbsp; 1 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="2" tabIndex="-1"><input name="bed[]" value="2" type="checkbox" />&nbsp; 2 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="3" tabIndex="-1"><input name="bed[]" value="3" type="checkbox" />&nbsp; 3 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="4" tabIndex="-1"><input name="bed[]" value="4" type="checkbox" />&nbsp; 4 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="5" tabIndex="-1"><input name="bed[]" value="5" type="checkbox" />&nbsp; 5 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="6" tabIndex="-1"><input name="bed[]" value="6" type="checkbox" />&nbsp; 6 ห้องนอน</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ห้องน้ำ <span class="caret"></span></a>
                            <ul class="dropdown-menu" name="bathck">
                                <li><a href="javascript:void(0);" class="small" data-value="1" tabIndex="-1"><input name="bath[]" type="checkbox" value="1" />&nbsp; 1 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="2" tabIndex="-1"><input name="bath[]" type="checkbox" value="2" />&nbsp; 2 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="3" tabIndex="-1"><input name="bath[]" type="checkbox" value="3" />&nbsp; 3 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="4" tabIndex="-1"><input name="bath[]" type="checkbox" value="4" />&nbsp; 4 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="5" tabIndex="-1"><input name="bath[]" type="checkbox" value="5" />&nbsp; 5 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="6" tabIndex="-1"><input name="bath[]" type="checkbox" value="6" />&nbsp; 6 ห้องน้ำ</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ประเภท <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" class="small" data-value="17ca334e-f836-47e6-9f80-e4fc1c745b7c" tabIndex="-1"><input name="type[]" value="'17ca334e-f836-47e6-9f80-e4fc1c745b7c'" type="checkbox" />&nbsp; โกดัง อพาร์ตเม้นท์ อื่นๆ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="185c82af-6b9a-45b1-b4d7-e8b62253dc6b" tabIndex="-1"><input name="type[]" value="'185c82af-6b9a-45b1-b4d7-e8b62253dc6b'" type="checkbox" />&nbsp; บ้านเดี่ยว</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="558fd9bd-21f8-41e8-9649-22fe4ec87b9b" tabIndex="-1"><input name="type[]" value="'558fd9bd-21f8-41e8-9649-22fe4ec87b9b'" type="checkbox" />&nbsp; บ้านแฝด ทาวน์เฮ้าส์ ทาวน์โฮม</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="bccaf560-ab46-49d5-8fe7-994fa0b67c62" tabIndex="-1"><input name="type[]" value="'bccaf560-ab46-49d5-8fe7-994fa0b67c62'" type="checkbox" />&nbsp; คอนโดมิเนียม</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="cf8962f0-dbde-42b6-a7c3-484cb106b932" tabIndex="-1"><input name="type[]" value="'cf8962f0-dbde-42b6-a7c3-484cb106b932'" type="checkbox" />&nbsp; ที่ดินเปล่า</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="dc4cd80d-b3e4-4538-ade0-e668dc72b6e4" tabIndex="-1"><input name="type[]" value="'dc4cd80d-b3e4-4538-ade0-e668dc72b6e4'" type="checkbox" />&nbsp; ตึกแถว อาคารพาณิชย์ โฮมออฟฟิศ</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-12 padding-top-20" style=";">
                <div id="map" style="width: 100%;height: 700px;">
                </div>
            </div>
            <div class="col-md-4 col-12 padding-top-20" style="">
                <iframe style=" height: 700px; margin: auto" id="listasset" src="<?= SITE_URL ?>maps/listasset " frameborder="0" scrolling="yes" width="100%"> </iframe>
            </div>
        </div>
    </div>
</section>

<section style="padding-top: 0px;">
    <div class="container">
        <div class="row property-list-area">
            <div class="active carousel slide carousel-slide-recent-property" data-target="Residential">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?= $this->Html->image('banner_index.png', ['alt' => '', 'width' => '100%']) ?>
                        </div>
                    </div>

                    <?php $count = 1; ?>
                    <?php foreach ($assetTypes as $a): ?>
                        <?php
                        if ($count == 1 || $count % 3 == 0) {
                            echo '<div class="row">';
                        }
                        ?>
                        <div class="col-md-6 text-center">
                            <div class="image-with-label">
                                <?php
                                $pic_name = 'recent-property-1.png';
                                if ($a->pic != null) {
                                    $pic_name = 'upload/' . $a->pic;
                                }
                                ?>

                                <?= $this->Html->link($this->Html->image($pic_name, ['class' => 'img-responsive asset-image', 'alt' => '']), '/assets/index/' . $a->id, ['escape' => false]) ?>
                            </div>
                            <?= $this->Html->link('<h4>' . h($a->name) . ' [' . h(sizeof($a->assets)) . ' รายการ]' . '</h4>', '/assets/index/' . $a->id, ['escape' => false]) ?>

                        </div>

                        <?php
                        if ($count == sizeof($assetTypes) || ($count % 2 == 0 && $count != 1)) {
                            echo '</div>';
                        }
                        ?>
                        <?php $count++; ?>
                    <?php endforeach; ?>


                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="pading-20-0">ทรัพย์สินที่น่าสนใจ</h2>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="image-with-label">
                                <?php
                                $pic_name = 'special_appraised_cover.jpg';
                                $link = '/assets/lists?selltype=special_appraised';
                                ?>
                                <?= $this->Html->link($this->Html->image($pic_name, ['class' => 'img-responsive asset-image', 'alt' => '']), $link, ['escape' => false]) ?>
                            </div>
                            <?= $this->Html->link('<h4>ทรัพย์สินขายต่ำกว่าราคาประเมิน</h4>', $link, ['escape' => false]) ?>

                        </div>
                        <div class="col-md-6 text-center">
                            <div class="image-with-label">
                                <?php
                                $pic_name = 'special_marketprice_cover.jpg';
                                $link = '/assets/lists?selltype=special_marketprice';
                                ?>
                                <?= $this->Html->link($this->Html->image($pic_name, ['class' => 'img-responsive asset-image', 'alt' => '']), $link, ['escape' => false]) ?>
                            </div>
                            <?= $this->Html->link('<h4>ขายทรัพย์ต่ำกว่าราคาตลาด</h4>', $link, ['escape' => false]) ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-md-12 no-pading-left no-pading-right hidden-xs padding-bottom-64">

                        <h3 class="f-color-black text-center" style="font-size: 32px !important;padding-bottom: 10px;">ค้นหาทรัพย์สิน</h3>
                        <?= $this->Form->create('', ['url' => ['controller' => 'assets', 'action' => 'formsearch'], 'class' => '']) ?>
                        <div class="form-group">
                            <?= $this->Form->input('code', ['class' => 'form-control', 'label' => false, 'placeholder' => 'รหัสทรัพย์สิน']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->input('asset_type_id', ['class' => 'form-control', 'label' => false, 'options' => $assetTypeList, 'empty' => 'หมวดหมู่สินทรัพย์']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->input('province_id', ['class' => 'form-control', 'label' => false, 'options' => $provinces, 'empty' => 'จังหวัด', 'onchange' => 'amphurs_filter(this.value)']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->input('amphur_id', ['class' => 'form-control', 'label' => false, 'options' => '', 'empty' => 'เขต/อำเภอ']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->input('user_id', ['class' => 'form-control', 'label' => false, 'options' => $users, 'empty' => 'ตัวแทนขาย']) ?>
                        </div>
                        <label class="f-color-black">ช่วงราคา</label>
                        <div class="form-group">

                            <div class="col-md-6 no-pading-left">
                                <?= $this->Form->input('price_start', ['class' => 'form-control', 'label' => false, 'options' => $price_start, 'empty' => true]) ?>
                            </div>
                            <div class="col-md-6 no-pading-right">
                                <?= $this->Form->input('price_end', ['class' => 'form-control', 'label' => false, 'options' => $price_end, 'empty' => true]) ?>
                            </div>
                        </div>


                        <?= $this->Form->button('ค้นหา', ['class' => 'bt-main']) ?>
                        <?= $this->Form->end() ?>


                    </div>
                    <div class="menu-sidebar">
                        <?= $this->Html->link('<button type="submit">ฝากขายบ้าน-ที่ดิน</button>', SALES_HOME_URL, ['escape' => false]) ?>
                        <?= $this->Html->link('<button type="submit">ฝากหาบ้าน-ที่ดิน</button>', PURCHASE_HOME_URL, ['escape' => false]) ?>
                        <?= $this->Html->link('<button type="submit">แผนบริการ</button>', SERVICE_URL, ['escape' => false]) ?>
                        <?= $this->Html->link('<button type="submit">ข้อดีของการฝากขาย</button>', ADVAN_URL, ['escape' => false]) ?>
                        <?= $this->Html->link('<button type="submit">รายชื่อตัวแทนขาย</button>', SELLER_URL, ['escape' => false]) ?>
                        <?= $this->Html->link('<button type="submit">สมัครงาน</button>', JOB_URL, ['escape' => false]) ?>
                        <?= $this->Html->link('<button type="submit">ติดต่อเรา</button>', CONTACT_URL, ['escape' => false]) ?>
                    </div>
                    <div class="menu-sidebar">
                        <div class="col-md-12 hidden-md hidden-lg hidden-sm">
                            <div class="box-item bg-color-white" style="padding: 10px;margin-top: 20px;">
                                <h3 class="f-color-gray text-center" style="font-size: 24px !important;padding-bottom: 10px;">ค้นหาทรัพย์สิน</h3>
                                <?= $this->Form->create('', ['url' => ['controller' => 'assets', 'action' => 'formsearch'], 'class' => '']) ?>
                                <div class="form-group">
                                    <?= $this->Form->input('code', ['class' => 'form-control', 'label' => false, 'placeholder' => 'รหัสทรัพย์สิน']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('asset_type_id', ['class' => 'form-control', 'label' => false, 'options' => $assetTypeList, 'empty' => 'หมวดหมู่สินทรัพย์']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('province_id', ['class' => 'form-control', 'label' => false, 'options' => $provinces, 'empty' => 'จังหวัด', 'onchange' => 'amphurs_filter(this.value)']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('amphur_id', ['class' => 'form-control', 'label' => false, 'options' => '', 'empty' => 'เขต/อำเภอ']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('user_id', ['class' => 'form-control', 'label' => false, 'options' => $users, 'empty' => 'ตัวแทนขาย']) ?>
                                </div>
                                <label class="f-color-black">ช่วงราคา</label>
                                <div class="form-group">

                                    <div class="col-md-6 no-pading-left">
                                        <?= $this->Form->input('price_start', ['class' => 'form-control', 'label' => false, 'options' => $price_start, 'empty' => true]) ?>
                                    </div>
                                    <div class="col-md-6 no-pading-right">
                                        <?= $this->Form->input('price_end', ['class' => 'form-control', 'label' => false, 'options' => $price_end, 'empty' => true]) ?>
                                    </div>
                                </div>


                                <?= $this->Form->button('ค้นหา', ['class' => 'bt-main']) ?>
                                <?= $this->Form->end() ?>
                            </div>

                        </div>

                    </div>
                    <div class="menu-sidebar">
                        <h3 class="title">ประเภทของทรัพย์สิน</h3>
                        <ul class="list">
                            <?php foreach ($assetTypes as $a): ?>
                                <li><?= $this->Html->link(h($a->name), '/assets/index/' . h($a->id), ['escape' => false]) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <?= $this->Html->link('<button type="submit" class="blink">ทรัพย์สินขายต่ำกว่าราคาประเมิน</button>', '/assets/lists?selltype=special_appraised', ['escape' => false, 'class' => '']) ?>
                        <?= $this->Html->link('<button type="submit" class="blink">ทรัพย์สินที่ขายต่ำกว่าราคาตลาด</button>', '/assets/lists?selltype=special_marketprice', ['escape' => false]) ?>
                    </div>
                    <div class="menu-sidebar">
                        <h3 class="title">ลิงค์เว็บไซด์ที่เกี่ยวข้อง</h3>
                        <ul class="list">
                            <li><?= $this->Html->link('ตรวจสอบราคาประเมิน', 'https://assessprice.treasury.go.th/', ['escape' => false, 'target' => '_blank']) ?></li>
                            <li><?= $this->Html->link('ค้นหาตำแหน่งแปลงที่ดิน', 'https://landsmaps.dol.go.th/', ['escape' => false, 'target' => '_blank']) ?></li>

                        </ul>
                    </div>
                    <div class="menu-sidebar">
                        <?= $this->Html->link('<button type="submit">สัญญาแต่งตั้งตัวแทนขาย</button>', PDF_SITE_URL . 'สัญญาแต่งตั้งตัวแทนขาย.pdf', ['escape' => false, 'target' => '_blank']) ?>
                        <?= $this->Html->link('<button type="submit">สัญญาจะซื้อจะขาย</button>', PDF_SITE_URL . 'สัญญาจะซื้อจะขายหรือสัญญาวางเงินมัดจำ.pdf', ['escape' => false, 'target' => '_blank']) ?>
                        <?= $this->Html->link('<button type="submit">ที่ตั้งของบริษัท</button>', CONTACT_URL, ['escape' => false]) ?>
                    </div>

                    <div class="menu-sidebar">
                        <?php $articles = $this->request->session()->read('Articles'); ?>
                        <?php foreach ($articles as $a): ?>
                            <h3 class="title"><?= h($a->name) ?></h3>
                            <ul class="list">
                                <?php foreach ($a->articles as $b): ?>
                                    <li><?= $this->Html->link($b->name, ['controller' => 'articles', 'action' => 'view', $b->id], ['escape' => false, 'target' => '_blank']) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= '' // $this->Html->script('asset_map.js')
?>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKSNfU1vGys8LbtQ4Je2ILOKvcy91rJ5I&callback=initMap">
</script>

<script>
    $(document).ready(function() {

        window.onload = function() {
            refreshlist();
            $('#page-load').hide();

        };
        $(window).bind("beforeunload", function() {
            $('#page-load').show();
        });
    });
</script>