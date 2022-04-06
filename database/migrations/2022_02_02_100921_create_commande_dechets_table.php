<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeDechetsTable extends Migration{
    public function up()
    {
        Schema::create('commande_dechets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_client_dechet')->constrained('client_dechets')->onDelete('cascade')->onUpdate('cascade');
            $table->float('quantite');
            $table->float('montant_total');
            $table->datetime('date_commande');
            $table->datetime('date_livraison');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }
    public function down()
    {
        Schema::table("commande_dechets",function(Blueprint $table){
            $table->dropForeignKey("id_client_dechet");
        });
        Schema::dropIfExists('commande_dechets');
    }
}
