<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateMateriauPrimairesTable extends Migration{
    public function up(){
        Schema::create('materiau_primaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_fournisseur')->constrained('fournisseurs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nom_materiel');
            $table->float('prix_unitaire');
            $table->integer('quantite');
            $table->integer('prix_total');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }
    public function down(){
        Schema::table("materiau_primaires",function(Blueprint $table){
            $table->dropForeignKey("id_fournisseur");
        });
        Schema::dropIfExists('materiau_primaires');
    }
};
