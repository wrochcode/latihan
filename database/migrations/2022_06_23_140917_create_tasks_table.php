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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('list',191);
            $table->boolean('mark')->default(false);  
            // add_mark_to_tasks_table

            // 1  $table-> boolean('mark')->after('list');
            // 2  $table->dropColumn('mark');
            //   $table->dropColumn('mark')->default(false);
            $table->timestamps();
        });
    }

    //Tinker: App\Models\Task::where('id',2)->first();
    //Tinker: App\Models\Task::latest()->first();
    //Tinker: App\Models\Task::latest()->get();
    //Tinker: App\Models\Task::latest()->get(['id', 'created_at']);
    //Tinker: $task = App\Models\Task::latest()->first();
    //tinker: $task->list = "Task done";
    //tinker: $task->save();
    //Tinker: App\Models\Task::where('mark',0)->get('list');
    //Tinker: App\Models\Task::where('mark',0)->get()->pluck('list');
    //Tinker: App\Models\Task::whereMark(0)->get()->pluck('list');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
