<?php
use Migrations\AbstractMigration;

class CreatePekerjaan extends AbstractMigration
{
  public function change()
  {
    $table = $this->table('pekerjaan', ['id' => false, 'primary_key' => ['pekerjaan_id']]);
    $table->addColumn('pekerjaan_id', 'char', ['length' => 27, 'null' => false]);
    $table->addColumn('pekerjaan', 'string', ['length' => 64, 'null' => false]);
    $table->addColumn('created_by', 'char', ['length' => 36, 'null' => false]);
    $table->addColumn('modified_by', 'char', ['default' => null, 'length' => 36, 'null' => true]);
    $table->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP','null' => false]);
    $table->addColumn('modified', 'datetime', ['default' => null, 'null' => true]);
    $table->addColumn('deleted', 'char', ['default' => 'N', 'length' => 1, 'null' => false]);
    $table->create();
  }
}
