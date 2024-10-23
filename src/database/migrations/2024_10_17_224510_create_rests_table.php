<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// 名前空間のインポート:
// Illuminate\Database\Migrations\Migration、Illuminate\Database\Schema\Blueprint、Illuminate\Support\Facades\Schemaのクラスをインポートします。これにより、マイグレーションの処理に必要なクラスを使用できるようになります。

// クラスの定義:
// CreateRestsTableという名前のクラスを定義します。このクラスは、マイグレーションの処理を行うためのものです。
class CreateRestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//     up()メソッド:
// マイグレーションを実行する際に呼び出されるメソッドです。このメソッド内で、テーブルの作成処理を記述します。
    public function up()
    {
// Schema::create():
// restsという名前のテーブルを作成します。
// Blueprintオブジェクトを受け取り、テーブルのカラムを定義します。
        Schema::create('rests', function (Blueprint $table) {

// カラムの定義:
// $table->id();: テーブルの主キーとなるIDカラムを作成します。
            $table->id();

// $table->unsignedBigInteger('attendance_id');: attendance_idという名前のunsignedBigInteger型のカラムを作成します。これは、attendancesテーブルのIDを参照するための外部キーです。
            $table->unsignedBigInteger('attendance_id');

// $table->time('start_time');: start_timeという名前のtime型のカラムを作成します。これは、休憩の開始時間を格納するためのカラムです。
            $table->time('start_time');


// $table->time('end_time');: end_timeという名前のtime型のカラムを作成します。これは、休憩の終了時間を格納するためのカラムです。
            $table->time('end_time');


// $table->timestamps();: created_atとupdated_atという名前のタイムスタンプカラムを作成します。これらは、レコードの作成日時と更新日時を記録するためのカラムです。
            $table->timestamps();


//外部キー制約:
// $table->foreign('attendance_id'): attendance_idカラムを外部キーとして設定します。
// ->references('id'): attendancesテーブルのidカラムを参照します。
// ->on('attendances'): attendancesテーブルを参照します。
// ->onDelete('cascade'): attendancesテーブルのレコードが削除された場合、それに関連するrestsテーブルのレコードも削除されるように設定します。
            $table->foreign('attendance_id')
                ->references('id')
                ->on('attendances')
                ->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
// down()メソッド:
// マイグレーションをロールバックする際に呼び出されるメソッドです。このメソッド内で、テーブルを削除する処理を記述します。

    public function down()
    {
        Schema::dropIfExists('rests');
    }
}
