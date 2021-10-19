<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    // Definindo os atributos iniciais
    protected $fillable = [
        'nome_cargo',
        'desc_cargo'
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
