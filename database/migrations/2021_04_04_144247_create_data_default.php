<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDataDefault extends Migration
{

    public function up()
    {
        $ds = DIRECTORY_SEPARATOR;
        $fileSql = __DIR__ . $ds . ".." . $ds . "data_default" . $ds . "thaycuong_end.sql";
        $sqlContent = file_get_contents($fileSql);
        DB::unprepared($sqlContent);
    }

    public function down()
    {
        return;
    }
}
