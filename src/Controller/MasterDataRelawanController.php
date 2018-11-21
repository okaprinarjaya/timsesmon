<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class MasterDataRelawanController extends AppController
{
  public function index()
  {
    //
  }

  public function setup()
  {
    if ($this->request->is('post')) {
      $data_request = $this->request->getData();
      $file_tmp_name = $data_request['xlsfile']['tmp_name'];
      $file_name = 'import-relawan-wilayah-' . time() . '.xls';
      $uploaded_file = WWW_ROOT . 'files' . DS . 'uploads' . DS . $file_name;

      if (move_uploaded_file($file_tmp_name, $uploaded_file)) {
        $xls_rows = _readXlsFile($uploaded_file);

        if ($this->_storeProvinsi($xls_rows)) {
          if ($this->_storeKabkot($xls_rows)) {
            if ($this->_storeKecamatanData($xls_rows)) {
              if ($this->_storeKelurahanData($xls_rows)) {
                if ($this->_storeRelawanData($xls_rows)) {
                  debug('OK');
                }
              }
            }
          }
        }
      }
    }
  }

  private function _storeProvinsi($xls_rows)
  {
    $data_list = _prepareProvinsiData($xls_rows);
    $wil_prov_tbl = TableRegistry::getTableLocator()->get('WilayahProvinsi');
    $prov_entities = $wil_prov_tbl->newEntities($data_list);

    return $wil_prov_tbl->saveMany($prov_entities);
  }

  private function _storeKabkot($xls_rows)
  {
    $data_list = _prepareKabkotData($xls_rows);
    $wil_kabkot_tbl = TableRegistry::getTableLocator()->get('WilayahKabkot');
    $kabkot_entities = $wil_kabkot_tbl->newEntities($data_list);

    return $wil_kabkot_tbl->saveMany($kabkot_entities);
  }

  private function _storeKecamatanData($xls_rows)
  {
    $data_list = _prepareKecamatanData($xls_rows);
    $wil_kec_tbl = TableRegistry::getTableLocator()->get('WilayahKecamatan');
    $kec_entities = $wil_kec_tbl->newEntities($data_list);

    return $wil_kec_tbl->saveMany($kec_entities);
  }

  private function _storeKelurahanData($xls_rows)
  {
    $data_list = _prepareKelurahanData($xls_rows);
    $wil_kel_tbl = TableRegistry::getTableLocator()->get('WilayahKelurahan');
    $kel_entities = $wil_kel_tbl->newEntities($data_list);

    return $wil_kel_tbl->saveMany($kel_entities);
  }

  private function _storeRelawanData($xls_rows)
  {
    $data_list = _prepareRelawanData($xls_rows);
    $relawan_tbl = TableRegistry::getTableLocator()->get('Relawan');
    $relawan_entities = $relawan_tbl->newEntities($data_list);

    return $relawan_tbl->saveMany($relawan_entities);
  }
}
