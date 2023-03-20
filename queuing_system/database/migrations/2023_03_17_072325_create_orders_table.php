<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // khóa chính
            $table->string('username'); //
            $table->unsignedBigInteger('service_id'); // khóa ngoại từ bảng services
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->unsignedBigInteger('device_id'); // khóa ngoại từ bảng devices
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->dateTime('provided_at'); // thời gian cung cấp
            $table->string('status'); // trạng thái
            $table->string('source'); // nguồn
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
        Schema::dropIfExists('orders');
    }
};
