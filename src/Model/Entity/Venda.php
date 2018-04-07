<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property int $clientes_id
 * @property float $valor_total
 * @property float $valor_pago
 * @property \Cake\I18n\FrozenDate $data_vencimento
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 */
class Venda extends Entity
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
        'clientes_id' => true,
        'valor_total' => true,
        'valor_pago' => true,
        'data_vencimento' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true
    ];
}
