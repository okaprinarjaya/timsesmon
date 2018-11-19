<?php
use Migrations\AbstractMigration;

class CreateElectionSession extends AbstractMigration
{
  public function change()
  {
    $table = $this->table('election_session', ['id' => false, 'primary_key' => ['election_session_id']]);
    $table->addColumn('election_session_id', 'char', ['length' => 6, 'null' => false]);
    $table->addColumn('nama_kegiatan', 'string', ['length' => 64, 'null' => false]);
    $table->addColumn('is_active', 'char', ['length' => 1, 'null' => false, 'default' => 'Y']);
    $table->addColumn('type_area', 'enum', ['values' => ['KABUPATEN', 'PROVINSI', 'NASIONAL'], 'null' => false]);
    $table->addColumn('created_by', 'char', ['length' => 36, 'null' => true, 'default' => null]);
    $table->addColumn('modified_by', 'string', ['length' => 36, 'null' => true, 'default' => null]);
    $table->addColumn('created', 'datetime', ['null' => false, 'default' => 'CURRENT_TIMESTAMP']);
    $table->addColumn('modified', 'datetime', ['null' => true, 'default' => null]);
    $table->addColumn('deleted', 'char', ['length' => 1, 'null' => false, 'default' => 'N']);
    $table->create();
  }
}
