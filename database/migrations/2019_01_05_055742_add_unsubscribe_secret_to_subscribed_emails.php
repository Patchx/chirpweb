<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnsubscribeSecretToSubscribedEmails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscribed_emails', function (Blueprint $table) {
            $table->string('unsubscribe_secret', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscribed_emails', function (Blueprint $table) {
            $table->dropColumn('unsubscribe_secret');
        });
    }
}
