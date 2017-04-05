<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Quantitative Analysis','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/quana.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Information Technology','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/infotech.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Economics','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/economic','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Communication Skills','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/com.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Basic Accounting Processes & Systems','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/basic.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Principles & Practise of Financial Accounting','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/finacct.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Public Sector Accounting','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/govacc.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Business Law','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/bus.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Principles of Audit','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/finstate.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Cost Accounting','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/costacc.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Prepare Tax Computations & Return','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/taxcom.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>1,'lesson_sku'=>null,'lesson_name'=>'Management','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/mgt.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>2,'lesson_sku'=>null,'lesson_name'=>'Business Law','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'4000','active'=>'1','picture'=>'/lesson/bus.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>2,'lesson_sku'=>null,'lesson_name'=>'Quantitative Techniques in Business','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'3000','active'=>'1','picture'=>'/lesson/quatech.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>2,'lesson_sku'=>null,'lesson_name'=>'Business and Finance','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'4000','active'=>'1','picture'=>'/lesson/busfin.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>2,'lesson_sku'=>null,'lesson_name'=>'Financial Accounting','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/finacct.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>2,'lesson_sku'=>null,'lesson_name'=>'Management Information','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/mgtinfo.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>3,'lesson_sku'=>null,'lesson_name'=>'Financial Reporting','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'4000','active'=>'1','picture'=>'/lesson/finrep.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>3,'lesson_sku'=>null,'lesson_name'=>'Audit and Assurance','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/audit.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>3,'lesson_sku'=>null,'lesson_name'=>'Taxation','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/tax.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>3,'lesson_sku'=>null,'lesson_name'=>'Performance Management','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/perf.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>3,'lesson_sku'=>null,'lesson_name'=>'Public Sector Accounting and Finance','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/finacct.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>3,'lesson_sku'=>null,'lesson_name'=>'Management Governance and Ethics','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/govern.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>4,'lesson_sku'=>null,'lesson_name'=>'Corporate Reporting','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/report.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>4,'lesson_sku'=>null,'lesson_name'=>'Advance Audit and Assurance','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/audit.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>4,'lesson_sku'=>null,'lesson_name'=>'Strategic Financial Mgt','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/finacct.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>4,'lesson_sku'=>null,'lesson_name'=>'Advance Taxation','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/tax.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],
            [
                'course_id'=>4,'lesson_sku'=>null,'lesson_name'=>'Case Study','long_description'=>'Do you ever struggle to manage work 
                and the rest of your life? You are not alone. Men and women all over the world are trying to figure out the impossible
                 work-life “balance” and instead achieve success in all parts of their lives. Join Catalyst experts to learn the 
                 importance of inclusive leadership in creating flexible—and productive—work environments. Through research and real-world 
                 examples from a variety of situations, you will learn strategies for managing workplace flexibility, and you will learn how
                  you have the power as an individual, a team member, or a leader to make positive change. You will understand the value of a 
                  flexible work environment and see what sets successful flexible workers and managers apart.',
                'short_description'=>'<li>How to support flexible work environments and better work-life integration.</li>
                <li>Inclusive leadership behaviors that make you a more successful leader.</li>
                <li>How to identify barriers to work-life effectiveness and create solutions.</li>',
                'level'=>null,'price'=>'5000','active'=>'1','picture'=>'/lesson/case.png','discount_available'=>null,'ranking'=>null,'duration'=>null,'created_at' => Carbon::now(),'updated_at'=>''
            ],







        ]);
    }
}
