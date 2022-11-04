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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('news');
    }
};


// public function up() dùng để thêm, bớt, thay đổi, ... nội dung bảng cơ sở dữ liệu
//  - để thực thi ta cần sử dụng lệnh php artisan migrate

// public function down() dùng phục hồi hay xóa bảng, ...
//  - để thực thi ta cần sử dụng lệnh php artisan migrate:rollback