<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields =[
            'ریاضی',
            'تجربی',
            'انسانی',
        ];

        foreach ($fields as $field) {
            Field::create([
                'title' => $field,
            ]);
        }
    }
}
