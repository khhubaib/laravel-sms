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
       
            Schema::table('courses', function (Blueprint $table) {
           $table->unsignedBigInteger('teacher_id')->after('duration');

            // Step 2: Create the foreign key constraint
            $table->foreign('teacher_id')
                  ->references('id')
                  ->on('teachers')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
    
        
    });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
