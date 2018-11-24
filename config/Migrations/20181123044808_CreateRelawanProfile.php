<?php
use Migrations\AbstractMigration;

class CreateRelawanProfile extends AbstractMigration
{
  public function change()
  {
    $table = $this->table('relawan_profile');
    $table->addColumn('relawan_id', 'char', [
      'limit' => 27,
      'null' => false
    ]);
    $table->addColumn('nama', 'string', [
      'default' => null,
      'limit' => 32,
      'null' => false
    ]);
    $table->addColumn('election_session_id', 'char', [
      'default' => null,
      'limit' => 6,
      'null' => false
    ]);
    $table->addColumn('gender', 'char', [
      'default' => null,
      'limit' => 1,
      'null' => false
    ]);
    $table->addColumn('usia_id', 'char', [
      'default' => null,
      'limit' => 36,
      'null' => false
    ]);
    $table->addColumn('pekerjaan_id', 'char', [
      'default' => null,
      'limit' => 36,
      'null' => false
    ]);

    $table->addColumn('penghasilan_id', 'char', [
      'default' => null,
      'limit' => 36,
      'null' => false
    ]);
    $table->addColumn('email', 'string', [
      'default' => null,
      'limit' => 32,
      'null' => true
    ]);
    $table->addColumn('alamat', 'string', [
      'default' => null,
      'limit' => 512,
      'null' => true
    ]);
    $table->addColumn('phonenumber', 'string', [
      'default' => null,
      'limit' => 20,
      'null' => true
    ]);
    $table->addColumn('photo_profile', 'string', [
      'default' => null,
      'limit' => 128,
      'null' => true
    ]);
    $table->addColumn('target_canvasing', 'string', [
      'default' => null,
      'limit' => 128,
      'null' => true
    ]);
    $table->addColumn('created_by', 'char', [
      'limit' => 36,
      'null' => false
    ]);
    $table->addColumn('modified_by', 'char', [
      'default' => null,
      'limit' => 36,
      'null' => true
    ]);
    $table->addColumn('created', 'datetime', [
      'default' => 'CURRENT_TIMESTAMP',
      'null' => false
    ]);
    $table->addColumn('modified', 'datetime', [
      'default' => null,
      'null' => true
    ]);
    $table->addColumn('deleted', 'char', [
      'default' => 'N',
      'limit' => 1,
      'null' => false
    ]);
    $table->create();
  }
}
