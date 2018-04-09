<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
* Carros Model
*
* @property \App\Model\Table\CategoriasCarrosTable|\Cake\ORM\Association\BelongsTo $CategoriasCarros
*
* @method \App\Model\Entity\Carro get($primaryKey, $options = [])
* @method \App\Model\Entity\Carro newEntity($data = null, array $options = [])
* @method \App\Model\Entity\Carro[] newEntities(array $data, array $options = [])
* @method \App\Model\Entity\Carro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
* @method \App\Model\Entity\Carro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
* @method \App\Model\Entity\Carro[] patchEntities($entities, array $data, array $options = [])
* @method \App\Model\Entity\Carro findOrCreate($search, callable $callback = null, $options = [])
*
* @mixin \Cake\ORM\Behavior\TimestampBehavior
*/
class CarrosTable extends Table
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

    $this->setTable('carros');
    $this->setDisplayField('nome');
    $this->setPrimaryKey('id');

    $this->addBehavior('Search.Search');
    $this->addBehavior('Timestamp');

    $this->belongsTo('CategoriasCarros', [
      'foreignKey' => 'categorias_carro_id',
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
    ->scalar('transmissao')
    ->maxLength('transmissao', 120)
    ->requirePresence('transmissao', 'create')
    ->notEmpty('transmissao');

    $validator
    ->scalar('cor')
    ->maxLength('cor', 120)
    ->requirePresence('cor', 'create')
    ->notEmpty('cor');

    $validator
    ->scalar('combustivel')
    ->maxLength('combustivel', 120)
    ->requirePresence('combustivel', 'create')
    ->notEmpty('combustivel');

    $validator
    ->integer('qtd_portas')
    ->requirePresence('qtd_portas', 'create')
    ->notEmpty('qtd_portas');

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
    $rules->add($rules->existsIn(['categorias_carro_id'], 'CategoriasCarros'));

    return $rules;
  }
}
