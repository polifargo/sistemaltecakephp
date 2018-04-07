<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nome_cliente
 * @property int $carros_id
 * @property string $CPF_cliente
 * @property string $telefone_cliente
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Carro $carro
 */
class Cliente extends Entity
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
        'nome_cliente' => true,
        'carros_id' => true,
        'CPF_cliente' => true,
        'telefone_cliente' => true,
        'created' => true,
        'modified' => true,
        'carro' => true
    ];
}
