<?php

use Illuminate\Database\Seeder;

class ScholarshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarships')->insert([
            ['id' => 1, 'name' => 'None'],
            ['id' => 2, 'name' => 'Agency for Science, Technology and Research (A*STAR)'],
            ['id' => 3, 'name' => 'Defence Science Technology Agency (DSTA)'],
            ['id' => 4, 'name' => 'Singapore Police Force (SPF)'],
            ['id' => 5, 'name' => 'National Environmental Agency (NEA)'],
            ['id' => 6, 'name' => 'Singapore Armed Forces (SAF)'],
            ['id' => 7, 'name' => 'Government Investment Corporation (GIC)'],
            ['id' => 8, 'name' => 'Public Service Commission (PSC)'],
            ['id' => 9, 'name' => 'PSC (Teaching)'],
            ['id' => 10, 'name' => 'PSC (Foreign Service)'],
            ['id' => 11, 'name' => 'PSC (Legal Service)'],
            ['id' => 12, 'name' => 'Ministry of Communications and Information (MCI)'],
            ['id' => 13, 'name' => 'Ministry of Social and Family Development (MSF)'],
            ['id' => 14, 'name' => 'Ministry of Education (MOE)'],
            ['id' => 15, 'name' => 'Ministry of National Development (MND)'],
            ['id' => 16, 'name' => 'Changi Airport Group (CAG)'],
            ['id' => 17, 'name' => 'National Arts Council (NAC)'],
            ['id' => 18, 'name' => 'Tan Kah Kee (TKK)'],
            ['id' => 19, 'name' => 'Institute of Southeast Asian Studies (ISAS)'],
            ['id' => 20, 'name' => 'Public Utilities Board (PUB)'],
            ['id' => 21, 'name' => 'IE Singapore'],
            ['id' => 22, 'name' => 'Infocomm Development Authority (IDA)'],
            ['id' => 23, 'name' => 'ST Engineering'],
            ['id' => 24, 'name' => 'Cambridge Commonwealth Trust'],
            ['id' => 25, 'name' => 'Jardine Foundation'],
            ['id' => 26, 'name' => 'Chevening Scholarship'],
            ['id' => 27, 'name' => 'Mansion House Scholarship'],
            ['id' => 28, 'name' => 'Trailblazer Foundation'],
            ['id' => 29, 'name' => 'Shell'],
            ['id' => 30, 'name' => 'Public Service Department (JPA)'],
            ['id' => 31, 'name' => 'UEM Group'],
            ['id' => 32, 'name' => 'Maissa Karim'],
            ['id' => 33, 'name' => 'Bank Negara'],
            ['id' => 34, 'name' => 'MOE-AU Scholarship'],
            ['id' => 35, 'name' => 'Singapore Economic Development Board (EDB)'],
            ['id' => 36, 'name' => 'Monetary Authority of Singapore (MAS)'],
        ]);
    }
}
