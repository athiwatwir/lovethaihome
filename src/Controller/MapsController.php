<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Images Controller
 *
 * @property \App\Model\Table\ImagesTable $Images
 */
class MapsController extends AppController {

    public $Assets = null;
    public $Addresses = null;
    public $Zones = null;

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('maplayout');
        $this->Assets = TableRegistry::get('Assets');
        $this->Addresses = TableRegistry::get('Addresses');
        $this->Zones = TableRegistry::get('Zones');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->viewBuilder()->layout('ajax');
        $qzone = $this->Zones->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ]);
        $zone = $qzone->toArray();
        $this->set(compact('zone'));
        //if ($this->request->is('ajax')) {
            $whereprice = '';
            $wherebath = '';
            $wherebed = '';
            $wherezone = '';
            $wheretype = '';
            $NElat = $this->request->query('NElat');
            $NElng = $this->request->query('NElng');
            $SWlat = $this->request->query('SWlat');
            $SWlng = $this->request->query('SWlng');
            $pricevalue = $this->request->query('pricevalue');
            $bedvalue = $this->request->query('bedvalue');
            $bathvalue = $this->request->query('bathvalue');
            $zonevalue = $this->request->query('zonevalue');
            $typevalue = $this->request->query('typevalue');



            if ($bathvalue == 'null' || $bathvalue == '' || is_null($bathvalue)) {
                $wherebath = '';
            } else {

                $index = 1;
                $andtext = '';

                foreach ($bathvalue as $data) {

                    if ($index > 1) {
                        $andtext = ' OR ';
                    }
                    $detail = 'bathroom =' . $data;
                    $wherebath = $wherebath . $andtext . $detail;
                    $index++;
                }
            }

            if ($zonevalue == 'null' || $zonevalue == '' || is_null($zonevalue)) {

                $wherezone = '';
            } else {



                $index = 1;
                $andtext = '';

                foreach ($zonevalue as $data) {

                    if ($index > 1) {
                        $andtext = ' OR ';
                    }
                    $detail = 'zone_id =' . $data;
                    $wherezone = $wherezone . $andtext . $detail;
                    $index++;
                }
            }
            if ($bedvalue == 'null' || $bedvalue == '' || is_null($bedvalue)) {
                $wherebed = '';
            } else {

                $index = 1;
                $andtext = '';

                foreach ($bedvalue as $data) {

                    if ($index > 1) {
                        $andtext = ' OR ';
                    }
                    $detail = 'bedroom =' . $data;
                    $wherebed = $wherebed . $andtext . $detail;
                    $index++;
                }
            }
            if ($typevalue == 'null' || $typevalue == '' || is_null($typevalue)) {
                $wheretype = '';
            } else {

                $index = 1;
                $andtext = '';

                foreach ($typevalue as $data) {

                    if ($index > 1) {
                        $andtext = ' OR ';
                    }
                    $detail = 'asset_type_id =' . $data;
                    $wheretype = $wheretype . $andtext . $detail;
                    $index++;
                }
            }





            if ($pricevalue == 'null' || $pricevalue == '' || is_null($pricevalue)) {
                $whereprice = '';
            } else {
                $whereprice = $pricevalue;
            }

            $q = $this->Assets->find('all', [
                'conditions' => ['latitude >' => $SWlat, 'latitude <' => $NElat, 'longitude >' => $SWlng, 'longitude <' => $NElng, $whereprice, $wherebath, $wherebed, $wherezone, $wheretype]
                , 'contain' => ['AssetTypes', 'Users', 'AssetImages' => ['sort' => ['AssetImages.isdefault' => 'ASC'], 'Images']]]);
            $mapdata = [];
            //$this->log($q, 'debug');
            $asset = $q->toArray();
            //$this->log($asset, 'debug');

            foreach ($asset as $data) {
                $detail = [];
                $asset_title = '';
                if ($data->issale == 'Y') {
                    $asset_title = 'ขาย';
                }
                if ($data->isrent == 'Y') {
                    $asset_title = $asset_title != '' ? $asset_title . '/ให้เช่า' : 'ให้เช่า';
                }
                $asset_title = $asset_title . $data->asset_type->name;
                $img = isset($data['asset_images'][0]['image']['name']) ? 'upload/' . $data['asset_images'][0]['image']['name'] : 'recent-property-1.png';

                array_push($detail, $asset_title);
                array_push($detail, $data['latitude']);
                array_push($detail, $data['longitude']);
                array_push($detail, $data['id']);
                array_push($detail, $img);
                array_push($detail, $data['price_amounnt']);
                array_push($detail, $data['name']);
                array_push($detail, $data['user']['firstname'] . ' ' . $data['user']['lastname']);
                array_push($detail, $data['user']['phone']);
                array_push($detail, $data['user']['email']);
                array_push($detail, $data['user']['lineid']);
                array_push($mapdata, $detail);
            }
            $mapsdata = json_encode($mapdata);
            echo $mapsdata;
            die;
       // }
    }

//    public function getdata() {
//        $this->autoRender = false;
//        if ($this->request->is('ajax')) {
//            $q = $this->Assets->find('all', [
//            ]);
//            $mapdata = [];
//            $asset = $q->toArray();
//            foreach ($asset as $data) {
//                $detail = [];
//                array_push($detail, $data['code']);
//                array_push($detail, $data['latitude']);
//                array_push($detail, $data['longitude']);
//                array_push($mapdata, $detail);
//            }
//            $mapsdata = json_encode($mapdata);
//            echo json_encode($mapsdata);
//
//            die;
//        }
//    }

    public function listasset($NElat = null, $NElng = null, $SWlat = null, $SWlng = null, $pricevalue = null, $bathvalue = null, $zonevalue = null, $bedvalue = null, $typevalue = null) {
        $this->viewBuilder()->layout('clean');


        $whereprice = '';
        $wherebath = '';
        $wherebed = '';
        $wherezone = '';
        $wheretype = '';






        if ($bathvalue == 'null' || $bathvalue == '' || is_null($bathvalue)) {
            $wherebath = '';
        } else {
            $bath = explode(',', $bathvalue);
            $index = 1;
            $andtext = '';

            foreach ($bath as $data) {

                if ($index > 1) {
                    $andtext = ' OR ';
                }
                $detail = 'bathroom =' . $data;
                $wherebath = $wherebath . $andtext . $detail;
                $index++;
            }
        }

        if ($zonevalue == 'null' || $zonevalue == '' || is_null($zonevalue)) {

            $wherezone = '';
        } else {
            $this->log('inzone  else ' . $zonevalue, 'debug');

            $zone = explode(',', $zonevalue);
            $index = 1;
            $andtext = '';

            foreach ($zone as $data) {

                if ($index > 1) {
                    $andtext = ' OR ';
                }
                $detail = 'zone_id =' . $data;
                $wherezone = $wherezone . $andtext . $detail;
                $index++;
            }
        }
        if ($bedvalue == 'null' || $bedvalue == '' || is_null($bedvalue)) {
            $wherebed = '';
        } else {
            $bed = explode(',', $bedvalue);
            $index = 1;
            $andtext = '';

            foreach ($bed as $data) {

                if ($index > 1) {
                    $andtext = ' OR ';
                }
                $detail = 'bedroom =' . $data;
                $wherebed = $wherebed . $andtext . $detail;
                $index++;
            }
        }
        if ($typevalue == 'null' || $typevalue == '' || is_null($typevalue)) {
            $wheretype = '';
        } else {
            $type = explode(',', $typevalue);
            $index = 1;
            $andtext = '';

            foreach ($type as $data) {

                if ($index > 1) {
                    $andtext = ' OR ';
                }
                $detail = 'asset_type_id =' . $data;
                $wheretype = $wheretype . $andtext . $detail;
                $index++;
            }
        }





        if ($pricevalue == 'null' || $pricevalue == '' || is_null($pricevalue)) {
            $whereprice = '';
        } else {
            $whereprice = $pricevalue;
        }



        $asset = $this->Assets->find('all', [
            'conditions' => ['latitude >' => $SWlat, 'latitude <' => $NElat, 'longitude >' => $SWlng, 'longitude <' => $NElng, $whereprice, $wherebath, $wherebed, $wherezone, $wheretype],
            'contain' => ['AssetTypes', 'Addresses' => ['Provinces'], 'AssetImages' => ['sort' => ['AssetImages.isdefault' => 'ASC'], 'Images']],
            'limit' => 20
        ]);
        $asset = $asset->toArray();

        $this->set(compact('asset'));
    }

}
