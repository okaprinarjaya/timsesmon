<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Relawan Model
 *
 * @property \App\Model\Table\ElectionSessionTable|\Cake\ORM\Association\BelongsTo $ElectionSession
 *
 * @method \App\Model\Entity\Relawan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Relawan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Relawan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Relawan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Relawan|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Relawan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Relawan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Relawan findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RelawanTable extends Table
{

  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('relawan');
    $this->setDisplayField('username');
    $this->setPrimaryKey('username');

    $this->addBehavior('Timestamp');

    $this->belongsTo('ElectionSession', [
      'foreignKey' => 'election_session_id',
      'joinType' => 'INNER'
    ]);
  }

  /**
   * Default validation rules.
   *
   * @param \Cake\Validation\Validator $validator Validator instance.
   * @return \Cake\Validation\Validator
   */
  public function validationDefault(Validator $validator)
  {
    $validator
      ->scalar('username')
      ->maxLength('username', 16)
      ->requirePresence('username', 'create')
      ->notEmpty('username');

    $validator
      ->scalar('password')
      ->maxLength('password', 6)
      ->requirePresence('password', 'create')
      ->notEmpty('password');

    $validator
      ->uuid('created_by')
      ->allowEmpty('created_by');

    $validator
      ->scalar('modified_by')
      ->maxLength('modified_by', 36)
      ->allowEmpty('modified_by');

    $validator
      ->scalar('deleted')
      ->maxLength('deleted', 1)
      ->allowEmpty('deleted');

    return $validator;
  }
}
