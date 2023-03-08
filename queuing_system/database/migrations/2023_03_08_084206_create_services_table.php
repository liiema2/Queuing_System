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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('source');
            $table->string('status');
            $table->integer('order_number');
            $table->string('phone_number');
            $table->dateTime('grant_time');
            $table->string('address');
            $table->string('email');
            $table->dateTime('expiration_date');
            $table->timestamps();
        });
    }
    // Sau khi sửa đổi, bạn có thể chạy migration để tạo bảng trong cơ sở dữ liệu bằng cách chạy câu lệnh:

    // Copy code
    // php artisan migrate
    // Điều này sẽ tạo ra một bảng services với các cột tương ứng như yêu cầu của bạn.







    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
