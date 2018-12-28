<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            ['name' => 'Apple', 'category_id' => 1],
            ['name' => 'Samsung', 'category_id' => 1],
            ['name' => 'Logitech', 'category_id' => 1],
            ['name' => 'Coca-Cola', 'category_id' => 2],
            ['name' => 'Toyota', 'category_id' => 3],
        ];

        foreach ($companies as $company)
        {
            Company::create($company);
        }
    }
}
