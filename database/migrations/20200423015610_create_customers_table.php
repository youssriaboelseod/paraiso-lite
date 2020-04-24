<?php

use App\Support\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        $this->schema->create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique('ux_customers_code');
            $table->string('name');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('created_by', 'fk_customers_created_by')
                ->references('id')
                ->on('users');

            $table->foreign('updated_by', 'fk_customers_updated_by')
                ->references('id')
                ->on('users');
        });
    }

    public function down()
    {
        $this->schema->drop('customers');
    }
}
