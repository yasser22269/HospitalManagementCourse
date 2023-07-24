<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::factory()->count(30)->create();

        //        $Appointments = Appointment::all();
//       foreach ($doctors as $doctor){
//           $Appointments = Appointment::all()->random()->id;
//            $doctor->doctorappointments()->attach($Appointments);
//        }
//


    }
}
