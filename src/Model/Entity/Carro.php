<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carro Entity
 *
 * @property int $id
 * @property string $nome_carro
 * @property int $categorias_carro_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\CategoriasCarro $categorias_carro
 */
class Carro extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome_carro' => true,
        'categorias_carro_id' => true,
        'created' => true,
        'modified' => true,
        'categorias_carro' => true
    ];
}
