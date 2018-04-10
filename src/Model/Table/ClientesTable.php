<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
* Clientes Model
*
* @property \App\Model\Table\CarrosTable|\Cake\ORM\Association\BelongsTo $Carros
*
* @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
* @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
* @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
* @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
* @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
* @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
* @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
*
* @mixin \Cake\ORM\Behavior\TimestampBehavior
*/
class ClientesTable extends Table
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

    $this->setTable('clientes');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');

    $this->belongsTo('Carros', [
      'foreignKey' => 'carros_id',
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
    ->integer('id')
    ->allowEmpty('id', 'create');

    $validator
    ->scalar('nome')
    ->maxLength('nome', 220)
    ->requirePresence('nome', 'create')
    ->notEmpty('nome');

    $validator
    ->scalar('CPF')
    ->maxLength('CPF', 14)
    ->requirePresence('CPF', 'create')
    ->notEmpty('CPF');

    $validator
    ->scalar('contato')
    ->maxLength('contato', 16)
    ->requirePresence('contato', 'create')
    ->notEmpty('contato');

    $validator
    ->scalar('cep')
    ->maxLength('cep', 9)
    ->requirePresence('cep', 'create')
    ->notEmpty('cep');

    $validator
    ->scalar('rua')
    ->maxLength('rua', 255)
    ->requirePresence('rua', 'create')
    ->notEmpty('rua');

    $validator
    ->scalar('numero')
    ->maxLength('numero', 5)
    ->requirePresence('numero', 'create')
    ->notEmpty('numero');

    $validator
    ->scalar('complemento')
    ->maxLength('complemento', 255)
    ->requirePresence('complemento', 'create')
    ->notEmpty('complemento');

    $validator
    ->numeric('valor_total')
    ->requirePresence('valor_total', 'create')
    ->notEmpty('valor_total');

    return $validator;
  }

  /**
  * Returns a rules checker object that will be used for validating
  * application integrity.
  *
  * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
  * @return \Cake\ORM\RulesChecker
  */
  public function buildRules(RulesChecker $rules)
  {
    $rules->add($rules->existsIn(['carros_id'], 'Carros'));

    return $rules;
  }
}
