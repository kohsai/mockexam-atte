<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// 名前空間のインポート: Laravelのマイグレーション機能で必要となるクラスをインポートしています。
// Migration: マイグレーションの基本的な機能を提供するクラスです。
// Blueprint: テーブルの構造を定義するためのクラスです。
// Schema: データベースのスキーマを操作するためのファサードです。


// マイグレーションクラスの定義: CreateAttendancesTableという名前のクラスを定義します。このクラスは、Migrationクラスを継承しており、マイグレーションの処理を記述するためのものです。
class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

//  マイグレーションの実行: このメソッドは、マイグレーションを実行する際に呼び出されます。テーブルの作成処理を記述します。
    public function up()
    {

// テーブルの作成: Schema::createメソッドを使って、attendancesという名前のテーブルを作成します。
// Blueprintオブジェクトを引数に渡すことで、テーブルのカラムを定義します。
        Schema::create('attendances', function (Blueprint $table) {

// id: 主キーとなるカラムを定義します
            $table->id();

// user_id: ユーザーのIDを参照するための外部キーを定義します。unsignedBigInteger型で、他のテーブルの主キーと関連付けられます。
            $table->unsignedBigInteger('user_id');

// date: 出勤日を表す日付を格納するカラムを定義します。
            $table->date('date');

// start_time: 出勤時間を格納するカラムを定義します。
            $table->time('start_time');

// end_time: 退勤時間を格納するカラムを定義します。
            $table->time('end_time');

// timestamps: 作成日時と更新日時を自動的に記録するカラムを作成します。
            $table->timestamps();

// 外部キー制約: user_idカラムを外部キーとして設定し、usersテーブルのidカラムを参照するように設定します。
// onDelete('cascade')は、usersテーブルのレコードが削除された場合、それに関連するattendancesテーブルのレコードも自動的に削除されるように設定しています。
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

//      マイグレーションのロールバック: このメソッドは、マイグレーションを元に戻す際に呼び出されます。
// Schema::dropIfExists('attendances');で、attendancesテーブルを削除します。
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
