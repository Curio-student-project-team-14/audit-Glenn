<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acties', function (Blueprint $table) {
            $table->id();
            $table->date('datum_ontstaan')->nullable();
            $table->string('bron_detail', 50)->nullable();
            $table->enum('audit_oordeel_ia', [
                'voldoende',
                'onvoldoende',
                'slecht'
            ])->nullable();
            $table->integer('sector_id')->nullable();
            $table->text('proces')->nullable();
            $table->integer('nr_bevindingen')->nullable();
            $table->text('omschrijving')->nullable();
            $table->text('situatie')->nullable();

            $table->integer('risicosoort_id')->nullable();
            $table->text('risico_beschrijving')->nullable();
            $table->integer('risicoclassificatie_id')->nullable();
            $table->text('oorzaak')->nullable();
            $table->text('aanbeveling_internal_audit')->nullable();
            $table->text('management_actie_plan')->nullable();
            $table->date('datum_deadline')->nullable();
            $table->date('deadline_bijgesteld')->nullable();
            $table->text('voortgang')->nullable();
            $table->bigInteger('probleem_eigenaar_id')->nullable();
            $table->bigInteger('actie_eigenaar_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->date('datum_gesloten')->nullable();
            $table->text('aantekening_ia')->nullable();
            $table->text('oordeel_ia')->nullable();
            $table->enum('au_status', [
                'AU-afgerond'
            ])->nullable();
            $table->enum('probleemeigenaar_status', [
                'PE-afgerond',
                'PE-teruggestuurd'
            ])->nullable();
            $table->enum('actie_eigenaar_status', [
                'PE-afgerond',
                'PE-teruggestuurd'
            ])->nullable();
            $table->string('opmerking_actie_eigenaar', 250)->nullable();
            $table->string('opmerking_probleem_eigenaar', 250)->nullable();
            $table->string('opmerking_audit', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acties');
    }
}
