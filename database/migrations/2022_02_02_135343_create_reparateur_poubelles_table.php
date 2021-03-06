<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateReparateurPoubellesTable extends Migration{
    public function up(){
        Schema::create('reparateur_poubelles', function (Blueprint $table) {
            $table->id();
            $table->string('nom',30);
            $table->string('prenom',30);
            $table->string('CIN',8)->unique();
            $table->string('photo');
            $table->string('numero_telephone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mot_de_passe');
            $table->string('adresse');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('reparateur_poubelles');
    }
}
