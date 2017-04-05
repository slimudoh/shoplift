<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_new')->insert([
            [
                'name'=>'Bill','lastname'=>'ojemoron','birthday'=>date('Y-m-d H:i:s',strtotime('now')),'email'=>'billy@sundaysim.app','password'=>bcrypt('secret'),
                'image_path'=>'fine.jpg','about'=>'I am a Christain'
                ,'occupation'=>'web developer','phone'=>1890,'website'=>'ekatal.com','user_role'=>'superadmin'
            ],
            [
                'name'=>'Sunny','email'=>'sunny@sundaysim.app','password'=>bcrypt('secret'),'lastname'=>'Israel','birthday'=>date('Y-m-d H:i:s',strtotime('now')),
                'image_path'=>'fine.jpg','about'=>'I am a programmer'
                ,'occupation'=>'mobile developer','phone'=>18955,'website'=>'jooj.com','user_role'=>1

            ]
        ]);
    }
}
