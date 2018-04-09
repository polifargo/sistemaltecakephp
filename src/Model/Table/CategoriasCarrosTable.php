<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriasCarros Model
 *
 * @property \App\Model\Table\CarrosTable|\Cake\ORM\Association\HasMany $Carros
 *
 * @method \App\Model\Entity\CategoriasCarro get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriasCarro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoriasCarro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasCarro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasCarro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasCarro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasCarro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategoriasCarrosTable extends Table
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

        $this->setTable('categorias_carros');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Carros', [
            'foreignKey' => 'categorias_carro_id'
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

        return $validator;
    }
}
