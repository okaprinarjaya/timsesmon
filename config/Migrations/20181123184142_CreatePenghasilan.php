<?php
use Migrations\AbstractMigration;

class CreatePenghasilan extends AbstractMigration
{
  public function change()
  {
    $table = $this->table('penghasilan', ['id' => false, 'primary_key' => ['penghasilan_id']]);
    $table->addColumn('penghasilan_id', 'char', ['length' => 27, 'null' => false]);
    $table->addColumn('penghasilan', 'string', ['length' => 32, 'null' => false]);
    $table->addColumn('created_by', 'char', ['length' => 36, 'null' => false]);
    $table->addColumn('modified_by', 'char', ['default' => null, 'length' => 36, 'null' => true]);
    $table->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'null' => false]);
    $table->addColumn('modified', 'datetime', ['default' => null, 'null' => true]);
    $table->addColumn('deleted', 'char', ['default' => 'N', 'length' => 1, 'null' => false]);
    $table->create();
  }
}
