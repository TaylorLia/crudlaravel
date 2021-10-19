<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoexame extends Model
{
    // Definindo os atributos iniciais
    protected $fillable = [
        'nome_tpex',
        'sigla_tpex',
        'desc_tpex'
    ];

    /**
     * criar uma função para estabelecer a associação (relacionamento)
     * entre a classe 'Paciente' e a classe 'Consulta'
     */
    public function consulta() {
        // especificar o tipo de associação
        return $this->hasMany(Consulta::class);
    }
}