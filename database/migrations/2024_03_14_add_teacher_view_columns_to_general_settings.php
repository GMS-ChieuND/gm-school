<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeacherViewColumnsToGeneralSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sm_general_settings', function (Blueprint $table) {
            $table->boolean('teacher_email_view')->default(0)->after('email');
            $table->boolean('teacher_phone_view')->default(0)->after('teacher_email_view');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sm_general_settings', function (Blueprint $table) {
            $table->dropColumn('teacher_email_view');
            $table->dropColumn('teacher_phone_view');
        });
    }
} 