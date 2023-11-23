<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class DefaultServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            [
                'name' => 'Dentist',
            ],
            [
                'name' => 'Dieticians',
            ],
            [
                'name' => 'General Physicians',
            ],
            [
                'name' => 'Gynecologists',
            ],
            [
                'name' => 'physiotherapy',
            ],
            [
                'name' => 'Psychologist',
            ],
        ];

        foreach ($input as $data) {
            ServiceCategory::create($data);
        }
    }
}
