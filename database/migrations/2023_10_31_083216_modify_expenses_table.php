<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('expenses', function (Blueprint $table) {
            // 不要なカラムの削除
            $table->dropColumn(['year', 'month', 'day']);

            // 新しいカラムの追加
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expenses', function (Blueprint $table) {
            // 削除したカラムの復元
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');

            // 追加したカラムの削除
            $table->dropColumn('date');
        });
    }
};
