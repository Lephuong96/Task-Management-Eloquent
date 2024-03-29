<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->id               = 1;
        $task->title            = "Công việc 1";
        $task->content          = "Nội dung công việc 1";
        $task->image            = "";
        $task->due_date         = "2018-09-15";
        $task->save();
        $task = new Task();
        $task->id               = 2;
        $task->title            = "Công việc 2";
        $task->content          = "Nội dung công việc 2";
        $task->image            = "";
        $task->due_date         = "2018-09-16";
        $task->save();
        $task = new Task();
        $task->id               = 3;
        $task->title            = "Công việc 3";
        $task->content          = "Nội dung công việc 3";
        $task->image            = "";
        $task->due_date         = "2018-09-17";
        $task->save();
        $task = new Task();
        $task->id               = 4;
        $task->title            = "Công việc 4";
        $task->content          = "Nội dung công việc 4";
        $task->image            = "";
        $task->due_date         = "2018-09-17";
        $task->save();

    }
}
