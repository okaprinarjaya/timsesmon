<?php
use Migrations\AbstractMigration;

class CreateRelawan extends AbstractMigration
{
  public function change()
  {
    $table = $this->table('relawan', ['id' => false, 'primary_key' => ['username']]);
    $table->addColumn('username', 'string', ['length' => 16, 'null' => false]);
    $table->addColumn('password', 'char', ['length' => 6, 'null' => false]);
    $table->addColumn('election_session_id', 'char', ['length' => 6, 'null' => false]);
    $table->addColumn('wilayah_prov_id', 'char', ['length' => 8, 'null' => false]);
    $table->addColumn('wilayah_kabkot_id', 'char', ['length' => 8, 'null' => false]);
    $table->addColumn('wilayah_kec_id', 'char', ['length' => 8, 'null' => false]);
    $table->addColumn('wilayah_kel_id', 'char', ['length' => 10, 'null' => false]);
    $table->addColumn('nama_prov', 'string', ['length' => 32, 'null' => false]);
    $table->addColumn('nama_kabkot', 'string', ['length' => 32, 'null' => false]);
    $table->addColumn('nama_kec', 'string', ['length' => 32, 'null' => false]);
    $table->addColumn('nama_kel', 'string', ['length' => 32, 'null' => false]);
    $table->addColumn('created_by', 'char', ['length' => 36, 'null' => true, 'default' => null]);
    $table->addColumn('modified_by', 'string', ['length' => 36, 'null' => true, 'default' => null]);
    $table->addColumn('created', 'datetime', ['null' => false, 'default' => 'CURRENT_TIMESTAMP']);
    $table->addColumn('modified', 'datetime', ['null' => true, 'default' => null]);
    $table->addColumn('deleted', 'char', ['length' => 1, 'null' => false, 'default' => 'N']);
    $table->create();
  }
}
