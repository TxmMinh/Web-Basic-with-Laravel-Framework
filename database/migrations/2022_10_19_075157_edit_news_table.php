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
        //Thêm cột dữ liệu vào news_table -> create edit_news_table
        Schema::table('news', function (Blueprint $table) {
            //$table->string('Description');
            //$table->string('headline');

            //Để thay đổi được dữ liệu VD thay đổi tên cột, thêm một cột mới ta cần phải cài thêm thư viện Doctrine/dbal
            //composer require doctrine/dbal
            //Xóa edit_news_table trong migrations trên MySQL trước nếu ko sẽ gặp lỗi Nothing to migrate

            //$table->renameColumn('headline', 'title');
            //$table->string('Name');
            //$table->string('slug');
            //$table->dropColumn('slug');
            $table->renameColumn('Name', 'email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
