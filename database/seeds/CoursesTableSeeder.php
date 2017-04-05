<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'course_name'=>'ATS','description'=>'Lorem ipsum dolor sit amet, omnis bonorum accommodare usu no, eam pertinax iracundia dignissim ea. Unum errem quaerendum pri no. s in.','picture'=>null,'active'=>'1','lecturer_image'=>'','created_at' => Carbon::now(),'updated_at'=>'',
                'content_provider'=>''
            ],
            [
                'course_name'=>'FOUNDATION LEVEL','description'=>'Lorem ipsum dolor sit amet, omnis bonorum accommodare usu no, eam pertinax iracundia dignissim ea. Unum errem quaerendum pri no. s in.','picture'=>null,'active'=>'1','lecturer_image'=>'','created_at' => Carbon::now(),'updated_at'=>'',
                'content_provider'=>''
            ],
            [
                'course_name'=>'SKILLS LEVEL','description'=>'Lorem ipsum dolor sit amet, omnis bonorum accommodare usu no, eam pertinax iracundia dignissim ea. Unum errem quaerendum pri no. s in.','picture'=>null,'active'=>'1','lecturer_image'=>'','created_at' => Carbon::now(),'updated_at'=>'',
                'content_provider'=>''
            ],
            [
                'course_name'=>'PROFESSIONAL LEVEL','description'=>'Lorem ipsum dolor sit amet, omnis bonorum accommodare usu no, eam pertinax iracundia dignissim ea. Unum errem quaerendum pri no. s in.','picture'=>null,'active'=>'1','lecturer_image'=>'','created_at' => Carbon::now(),'updated_at'=>'',
                'content_provider'=>''
            ],

        ]);
    }
}
