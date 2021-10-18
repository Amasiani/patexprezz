<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_package', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('package_id')->constrained('packages')->onDelete('cascade');
            $table->timestamps();

             //$table->unsignedBigInteger('customer_id');
            //$table->unsignedBigInteger('package_id');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('customer_package', function(Blueprint $table){
        //     $table->dropForeign('customer_package_customer_id_foreign');
        //     $table->dropForeign('customer_package_package_id_foreign');
        // });
        
        Schema::dropIfExists('customer_package');
    }
}
