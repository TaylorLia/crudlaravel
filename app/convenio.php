<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class convenio extends Model
{
    // Definindo os atributos iniciais
    protected $fillable = [
        'nome_conv',
        'fone_conv',
        'site_conv',
        'contato_conv',
        'perccons_conv',
        'percexame_conv'
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
