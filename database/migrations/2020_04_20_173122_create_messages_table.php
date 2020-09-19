<?php

use App\Message;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('content');
            $table->foreignId('id_sender');
            $table->foreignId('id_receiver');
            $table->boolean('confirmed')->default(0);
            $table->timestamps();
        });
        for ($i=0; $i < 10; $i++) {
            Message::create([
             'id_sender' =>$i,
             'id_receiver' => $i+1,
             'content' => "lorem ipsum - $i"
         ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
