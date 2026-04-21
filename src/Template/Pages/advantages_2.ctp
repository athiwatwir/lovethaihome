<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center"> 
        <?= $this->Html->image('head-top.png', ['alt' => '']) ?>
        <h2 class="pading-20-0">ข้อดีของการฝากขาย</h2>
    </div>

    <div class="col-md-12">
        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
            <?php foreach ($data as $key=>$item): ?>
                <div class="inner-faq-area">
                    <div id="heading1" role="tab" class="inner-faq-panel-heading">
                        <div class="inner-faq-panel-title">
                            <?= $this->Html->image('plus-mark.png', ['alt' => '', 'class' => 'inner-faq-img-marker']) ?>
                            <a aria-controls="collapse1" aria-expanded="false" href="#collapse<?=$key?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
                            <?=h($item['title'])?>
                            </a>
                        </div>
                    </div>
                    <div aria-labelledby="heading1" role="tabpanel" class="collapse" id="collapse<?=$key?>" aria-expanded="false" style="height: 0px;">
                        <div class="inner-faq-panel-body">
                            <p class="f-color-blue text-normal-size">
                                <?=$item['content']?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>


            

        </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <p class="f-color-red">
            *** หมายเหตุ ***
            การตั้งราคาขาย ผู้ขายเป็นผู้ตัดสินใจในการตั้งราคาขาย ทางบริษัทจะไม่มีการบวกราคาขายโดยเด็ดขาด 
            ซึ่งทางบริษัทจะระบุราคาขายไว้อย่างชัดเจนทั้งในหนังสือขายบ้านและในอินเตอร์เน็ท 
            เพื่อเป็นการสร้างความมั่นใจว่าทางบริษัทจะทำงานขาอย่างตรงไปตรงมาด้วยความซื่อสัตย์ต่อทั้งผู้ซื้อและผู้ขาย
            จะไม่ทำเหมือนกับนายหน้าอิสระหรือบริษัทบางบริษัทที่ชอบบวกราคาและไม่ยอมระบุราคาขายไว้อย่างชัดเจน
        </p>
    </div>
</div>
