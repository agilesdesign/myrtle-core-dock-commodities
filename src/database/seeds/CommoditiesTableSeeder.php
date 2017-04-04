<?php

use Illuminate\Database\Seeder;

class CommoditiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(static::commodities())->each(function ($item, $key) {
            Myrtle\Core\Commodities\Models\Commodity::updateOrCreate(['name' => $item]);
        });
    }

    /**
     * List of predefined commodities
     *
     * @return array
     */
    public static function commodities()
    {
        return [
            'Athletic',
            'Auditing',
            'Construction',
            'Education',
            'Facilities',
            'Financial',
            'Food Services',
            'Furnishings',
            'Industrial',
            'Insurance',
            'Legal',
            'Marketing',
            'Media',
            'Medical',
            'Office Equipment',
            'Photography',
            'Technology',
            'Telecommunications',
            'Transportation',
            'Utilities',
            'Waste',
        ];
    }
}
