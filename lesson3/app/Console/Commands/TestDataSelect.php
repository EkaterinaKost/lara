<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestDataSelect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test::data-select';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //выводит список всех и id
        $employees = Employee::all();
        foreach ($employees as $employee){
            echo $employee->first_name . '' . $employee->id . PHP_EOL;
        }

        //выводит список всех Jhon и id
        $employees = Employee::where('first_name','=','Jhon')->get();
        foreach ($employees as $employee){
            echo $employee->first_name . '' . $employee->id . PHP_EOL;
        }

          //выводит список всех Jhon у которых возраст > 27 и id
          $employees = Employee::where('first_name','=','Jhon')->where('age','>','27')->get();
          foreach ($employees as $employee){
              echo $employee->first_name . '' . $employee->id . PHP_EOL;
          }

         //выводит список всех Jhon  или у которых возраст > 27 и id
         $employees = Employee::where('first_name','=','Jhon')->orWhere('age','>','27')->get();
         foreach ($employees as $employee){
             echo $employee->first_name . '' . $employee->id . PHP_EOL;
         }

           //выводит первого Jhon  или у которых возраст > 27 и id
           $employees = Employee::where('first_name','=','Jhon')->orWhere('age','>','27')->first();
                echo $employee['first_name' ]. '' . $employee['id'] . PHP_EOL;
           
        
         //выводит список всех по возрастанию возрастов
         $employees = Employee::orderBy('age','ASK')->get();
         foreach ($employees as $employee){
             echo $employee->first_name . ' ' . $employee->id . ' '. $employee->age . PHP_EOL;
         }

        
         //выводит список из двух (limit) по убываниию (DESC) возрастов отсекая 2 (skip)
         $employees = Employee::orderBy('age','DESC')->skip(2)->limit(2)->get();
         foreach ($employees as $employee){
             echo $employee->first_name . ' ' . $employee->id . ' '. $employee->age . PHP_EOL;
         }

         //группирует по именам (groupBy) считает (select+raw('count(1) as employee_total')) сколько раз встречается каждое имя выводит список уникальных имен и их количество
         $employees = DB::table('empoloyees')
                        ->groupBy('first_name')
                        ->select('first_name', DB::raw('count(1) as employee_total'))
                        ->get();
         foreach ($employees as $employee){
             echo $employee->first_name . ' ' . ' '. $employee->employee_total . PHP_EOL;
         }

         //выводит список уникальных (distinct) имен по алфавиту (orderBy)
         $employees = Employee::distinct()->orderBy('first_name')->get(['first_name']);
         foreach ($employees as $employee){
             echo $employee->first_name . ' ' . PHP_EOL;
         }

        return 0;
    }
}
