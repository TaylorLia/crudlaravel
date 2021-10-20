<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableMedicosAddForeingKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicos', function (Blueprint $table) {
            //adicionando uma chave estrangeira numa tabela existente
            $table->foreign('pessoa_id')
                ->references('id')
                ->on('pessoa');
            $table->foreign('especialidade_id')
                ->references('id')
                ->on('especialidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicos', function (Blueprint $table) {
            $table->dropForeign('medicos_pessoa_id_foreign');
            $table->dropForeign('medicos_especialidade_id_foreign');            
        });
    }
}
