<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('faqs', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('order')->nullable();
        //     $table->string('question');
        //     $table->text('answer');
        //     $table->boolean('active')->default(true);
        //     $table->boolean('PreminumUser')->default(true);
        //     $table->boolean('Visitor')->default(true);

        //     $table->timestamps();
        // });
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->nullable();
            $table->string('question');
            $table->text('answer');
            $table->boolean('active')->default(true);
            $table->boolean('PreminumUser')->default(false);
            $table->boolean('Visitor')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
