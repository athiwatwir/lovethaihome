<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-default lisi-bg" style="margin-bottom: 5px;">
            <div class="container-fluid">


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ช่วงราคา <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" class="small" data-value="1" tabIndex="-1"><input name="price" value="price_amounnt<500000" type="radio" id="p_1"/>&nbsp; <label for="p_1">น้อยกว่า 500,000</label></a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="2" tabIndex="-1"><input name="price" value="price_amounnt>500000 AND price_amounnt<1500000" type="radio" id="p_2"/>&nbsp; <label for="p_2">500,001 - 1,500,000</label></a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="3" tabIndex="-1"><input name="price" value="price_amounnt>1500000 AND price_amounnt<3000000" type="radio" id="p_3"/>&nbsp; <label for="p_3">1,500,001 - 3,000,000</label></a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="4" tabIndex="-1"><input name="price" value="price_amounnt>3000000 AND price_amounnt<5000000" type="radio" id="p_4"/>&nbsp; <label for="p_4">3,000,001 - 5,000,000</label></a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="5" tabIndex="-1"><input name="price" value="price_amounnt>5000000 " type="radio" id="p_5"/>&nbsp; <label for="p_5">มากกว่า 5,000,000</label></a></li>

                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ห้องนอน <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" class="small" data-value="1" tabIndex="-1"><input name="bed[]" value="1" type="checkbox"/>&nbsp; 1 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="2" tabIndex="-1"><input name="bed[]" value="2" type="checkbox"/>&nbsp; 2 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="3" tabIndex="-1"><input name="bed[]" value="3" type="checkbox"/>&nbsp; 3 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="4" tabIndex="-1"><input name="bed[]" value="4" type="checkbox"/>&nbsp; 4 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="5" tabIndex="-1"><input name="bed[]" value="5" type="checkbox"/>&nbsp; 5 ห้องนอน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="6" tabIndex="-1"><input name="bed[]" value="6" type="checkbox"/>&nbsp; 6 ห้องนอน</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ห้องน้ำ <span class="caret"></span></a>
                            <ul class="dropdown-menu" name="bathck">
                                <li><a href="javascript:void(0);" class="small" data-value="1" tabIndex="-1"><input name="bath[]" type="checkbox" value="1"/>&nbsp; 1 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="2" tabIndex="-1"><input name="bath[]" type="checkbox" value="2"/>&nbsp; 2 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="3" tabIndex="-1"><input name="bath[]" type="checkbox" value="3"/>&nbsp; 3 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="4" tabIndex="-1"><input name="bath[]" type="checkbox" value="4"/>&nbsp; 4 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="5" tabIndex="-1"><input name="bath[]" type="checkbox" value="5"/>&nbsp; 5 ห้องน้ำ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="6" tabIndex="-1"><input name="bath[]" type="checkbox" value="6"/>&nbsp; 6 ห้องน้ำ</a></li>
                            </ul>
                        </li>
                        <!--
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">โซน <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" class="small" data-value="3306241f-2270-4172-a8f2-bed2bc1f6402" tabIndex="-1"><input name="zone[]" value="3306241f-2270-4172-a8f2-bed2bc1f6402" type="checkbox"/>&nbsp; โซนกรุงเทพฯชั้นใน</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="85726a94-f34d-48da-8c1e-007556e24c7d" tabIndex="-1"><input name="zone[]" value="85726a94-f34d-48da-8c1e-007556e24c7d" type="checkbox"/>&nbsp; โซนทิศตะวันออกเฉียงใต้</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="9bc46fdd-8214-4061-adb0-86aadc3c4c97" tabIndex="-1"><input name="zone[]" value="9bc46fdd-8214-4061-adb0-86aadc3c4c97" type="checkbox"/>&nbsp; โซนทิศตะวันออก</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="b0e36b3b-afa4-4734-9828-ea445c04f387" tabIndex="-1"><input name="zone[]" value="b0e36b3b-afa4-4734-9828-ea445c04f387" type="checkbox"/>&nbsp; โซนทิศเหนือ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="b2cde841-cfe7-48c9-a6f9-5256fc99aea2" tabIndex="-1"><input name="zone[]" value="b2cde841-cfe7-48c9-a6f9-5256fc99aea2" type="checkbox"/>&nbsp; โซนทิศตะวันตก</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="c0668a61-6f9e-44b9-9b01-76112dc8cb9f" tabIndex="-1"><input name="zone[]" value="c0668a61-6f9e-44b9-9b01-76112dc8cb9f" type="checkbox"/>&nbsp; โซนต่างจังหวัด</a></li>

                            </ul>
                        </li>
                        -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ประเภท <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" class="small" data-value="17ca334e-f836-47e6-9f80-e4fc1c745b7c" tabIndex="-1"><input name="type[]" value="'17ca334e-f836-47e6-9f80-e4fc1c745b7c'" type="checkbox"/>&nbsp; โกดัง อพาร์ตเม้นท์ อื่นๆ</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="185c82af-6b9a-45b1-b4d7-e8b62253dc6b" tabIndex="-1"><input name="type[]" value="'185c82af-6b9a-45b1-b4d7-e8b62253dc6b'" type="checkbox"/>&nbsp; บ้านเดี่ยว</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="558fd9bd-21f8-41e8-9649-22fe4ec87b9b" tabIndex="-1"><input name="type[]" value="'558fd9bd-21f8-41e8-9649-22fe4ec87b9b'" type="checkbox"/>&nbsp; บ้านแฝด ทาวน์เฮ้าส์ ทาวน์โฮม</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="bccaf560-ab46-49d5-8fe7-994fa0b67c62" tabIndex="-1"><input name="type[]" value="'bccaf560-ab46-49d5-8fe7-994fa0b67c62'" type="checkbox"/>&nbsp; คอนโดมิเนียม</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="cf8962f0-dbde-42b6-a7c3-484cb106b932" tabIndex="-1"><input name="type[]" value="'cf8962f0-dbde-42b6-a7c3-484cb106b932'" type="checkbox"/>&nbsp; ที่ดินเปล่า</a></li>
                                <li><a href="javascript:void(0);" class="small" data-value="dc4cd80d-b3e4-4538-ade0-e668dc72b6e4" tabIndex="-1"><input name="type[]" value="'dc4cd80d-b3e4-4538-ade0-e668dc72b6e4'" type="checkbox"/>&nbsp; ตึกแถว อาคารพาณิชย์ โฮมออฟฟิศ</a></li>

                            </ul>
                        </li>
                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>

</div>
<div class="row">
    <div class="col-md-8" style="padding-right: 0px;">
        <div id="map" style="width: 100%;height: 700px;">
        </div>
    </div>
    <div  class="col-md-4" style="padding-left: 0px;border-left: 1px solid #404245">
        <iframe style=" height: 700px; margin: auto" id="listasset" src="<?= SITE_URL ?>maps/listasset " frameborder="0"  scrolling="yes"  width="100%"> </iframe>
    </div> 
</div>

<?= $this->Html->script('asset_map.js') ?>
