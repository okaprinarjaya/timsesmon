<?php
use Cake\ORM\TableRegistry;
use \PhpOffice\PhpSpreadsheet\Reader\Xls;

function _readXlsFile($file_path)
{
  $xlsx_reader = new Xls();
  $sheet = $xlsx_reader->load($file_path);
  $rows = $sheet->getActiveSheet()->toArray(null, true, true, true);

  unset($rows[1]);

  return $rows;
}

function _prepareProvinsiData($xls_rows)
{
  $data = [];
  $temp = [];
  $code_pattern = 'WPR00000';

  $i = 1;
  foreach ($xls_rows as $row) {
    $num_to_str = '' . $i;
    $num_to_str_len = strlen($num_to_str);

    if (!in_array($row['B'], $temp)) {
      $code = substr_replace($code_pattern, $num_to_str, 8 - $num_to_str_len, $num_to_str_len);
      $r = [
        'wilayah_prov_id' => $code,
        'election_session_id' => 'SESS01',
        'nama_prov' => trim($row['B']),
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ];
      array_push($data, $r);
      array_push($temp, trim($row['B']));
      $i++;
    }
  }

  return $data;
}

function _prepareKabkotData($xls_rows)
{
  $wil_prov_tbl = TableRegistry::getTableLocator()->get('WilayahProvinsi');
  $wil_prov_fetch = $wil_prov_tbl->find('list', ['conditions' => ['deleted' => 'N']]);
  $provinces = array_flip($wil_prov_fetch->toArray());

  $data = [];
  $temp = [];
  $code_pattern = 'WKK00000';

  $i = 1;
  foreach ($xls_rows as $row) {
    $nama_prov = trim($row['B']);
    $nama_kabkot = trim($row['C']);
    $num_to_str = '' . $i;
    $num_to_str_len = strlen($num_to_str);

    if (!in_array($nama_kabkot, $temp)) {
      $code = substr_replace($code_pattern, $num_to_str, 8 - $num_to_str_len, $num_to_str_len);
      $r = [
        'wilayah_prov_id' => $provinces[$nama_prov],
        'wilayah_kabkot_id' => $code,
        'election_session_id' => 'SESS01',
        'nama_prov' => $nama_prov,
        'nama_kabkot' => $nama_kabkot,
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ];
      array_push($data, $r);
      array_push($temp, $nama_kabkot);
      $i++;
    }
  }

  return $data;
}

function _prepareKecamatanData($xls_rows)
{
  $wil_kabkot_tbl = TableRegistry::getTableLocator()->get('WilayahKabkot');
  $wil_kabkot_fetch = $wil_kabkot_tbl->find('all', ['conditions' => ['deleted' => 'N']]);
  $kabkots = \Cake\Utility\Hash::combine(
    $wil_kabkot_fetch->toArray(),
    '{n}.nama_kabkot',
    ['%s.%s', '{n}.wilayah_prov_id', '{n}.wilayah_kabkot_id']
  );

  $data = [];
  $temp = [];
  $code_pattern = 'WKC00000';

  $i = 1;
  foreach ($xls_rows as $row) {
    $nama_prov = trim($row['B']);
    $nama_kabkot = trim($row['C']);
    $nama_kec = trim($row['D']);
    $num_to_str = '' . $i;
    $num_to_str_len = strlen($num_to_str);

    if (!in_array($nama_kec, $temp)) {
      $code = substr_replace($code_pattern, $num_to_str, 8 - $num_to_str_len, $num_to_str_len);
      $parent_code_split = explode('.', $kabkots[$nama_kabkot]);
      $code_prov = $parent_code_split[0];
      $code_kabkot = $parent_code_split[1];

      $r = [
        'wilayah_prov_id' => $code_prov,
        'wilayah_kabkot_id' => $code_kabkot,
        'wilayah_kec_id' => $code,
        'election_session_id' => 'SESS01',
        'nama_prov' => $nama_prov,
        'nama_kabkot' => $nama_kabkot,
        'nama_kec' => $nama_kec,
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ];
      array_push($data, $r);
      array_push($temp, $nama_kec);
      $i++;
    }
  }

  return $data;
}

function _prepareKelurahanData($xls_rows)
{
  $wil_kec_tbl = TableRegistry::getTableLocator()->get('WilayahKecamatan');
  $wil_kec_fetch = $wil_kec_tbl->find('all', ['conditions' => ['deleted' => 'N']]);
  $kecamatans = \Cake\Utility\Hash::combine(
    $wil_kec_fetch->toArray(),
    '{n}.nama_kec',
    ['%s.%s.%s', '{n}.wilayah_prov_id', '{n}.wilayah_kabkot_id', '{n}.wilayah_kec_id']
  );

  $data = [];
  $temp = [];
  $code_pattern = 'WKL00000';

  $i = 1;
  foreach ($xls_rows as $row) {
    $nama_prov = trim($row['B']);
    $nama_kabkot = trim($row['C']);
    $nama_kec = trim($row['D']);
    $nama_kel = trim($row['E']);
    $num_to_str = '' . $i;
    $num_to_str_len = strlen($num_to_str);

    if (!in_array($nama_kel, $temp)) {
      $code = substr_replace($code_pattern, $num_to_str, 8 - $num_to_str_len, $num_to_str_len);
      $parent_code_split = explode('.', $kecamatans[$nama_kec]);
      $code_prov = $parent_code_split[0];
      $code_kabkot = $parent_code_split[1];
      $code_kec = $parent_code_split[2];

      $r = [
        'wilayah_prov_id' => $code_prov,
        'wilayah_kabkot_id' => $code_kabkot,
        'wilayah_kec_id' => $code_kec,
        'wilayah_kel_id' => $code,
        'election_session_id' => 'SESS01',
        'nama_prov' => $nama_prov,
        'nama_kabkot' => $nama_kabkot,
        'nama_kec' => $nama_kec,
        'nama_kel' => $nama_kel,
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ];
      array_push($data, $r);
      array_push($temp, $nama_kel);
      $i++;
    }
  }

  return $data;
}

function _prepareRelawanData($xls_rows)
{
  $wil_kel_tbl = TableRegistry::getTableLocator()->get('WilayahKelurahan');
  $wil_kel_fetch = $wil_kel_tbl->find('all', ['conditions' => ['deleted' => 'N']]);
  $kelurahans = \Cake\Utility\Hash::combine(
    $wil_kel_fetch->toArray(),
    '{n}.nama_kel',
    [
      '%s.%s.%s.%s',
      '{n}.wilayah_prov_id',
      '{n}.wilayah_kabkot_id',
      '{n}.wilayah_kec_id',
      '{n}.wilayah_kel_id'
    ]
  );

  $data = [];
  $temp = [];

  foreach ($xls_rows as $row) {
    $username = trim($row['A']);
    $nama_prov = trim($row['B']);
    $nama_kabkot = trim($row['C']);
    $nama_kec = trim($row['D']);
    $nama_kel = trim($row['E']);

    if (!in_array($username, $temp)) {
      $parent_code_split = explode('.', $kelurahans[$nama_kel]);
      $code_prov = $parent_code_split[0];
      $code_kabkot = $parent_code_split[1];
      $code_kec = $parent_code_split[2];
      $code_kel = $parent_code_split[3];

      $r = [
        'username' => $username,
        'password' => '123',
        'election_session_id' => 'SESS01',
        'wilayah_prov_id' => $code_prov,
        'wilayah_kabkot_id' => $code_kabkot,
        'wilayah_kec_id' => $code_kec,
        'wilayah_kel_id' => $code_kel,
        'nama_prov' => $nama_prov,
        'nama_kabkot' => $nama_kabkot,
        'nama_kec' => $nama_kec,
        'nama_kel' => $nama_kel,
        'created_by' => '8b16d313-9804-473c-8e68-88b6b5122c2a'
      ];
      array_push($data, $r);
      array_push($temp, $username);
    }
  }

  return $data;
}
