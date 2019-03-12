<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailAccount extends Migration
{
    /**
     * Run the migrations.
     * IMAP_HOST=somehost.com
     * IMAP_PORT=993
     * IMAP_ENCRYPTION=ssl
     * IMAP_VALIDATE_CERT=true
     * IMAP_USERNAME=root@example.com
     * IMAP_PASSWORD=secret
     * IMAP_DEFAULT_ACCOUNT=default
     * IMAP_PROTOCOL=imap
     * @return void
     */
    public function up()
    {
        Schema::create('email_account', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->string('imap_host');
            $table->integer('imap_port');
            $table->string('imap_encryption');
            $table->string('imap_validate_cert');
            $table->string('imap_username');
            $table->string('imap_password');
            $table->string('imap_default_account');
            $table->string('imap_protocol');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('email_account');
    }
}
