<?php

use Illuminate\Database\Seeder;

class MenuEntrySizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->insertAllSizesForPizza(1, 4.99);
        $this->insertAllSizesForPizza(2, 5.99);
        $this->insertAllSizesForPizza(3, 7.99);
        $this->insertAllSizesForPizza(4, 7.49);
        $this->insertAllSizesForPizza(5, 6.49);
        $this->insertAllSizesForPizza(6, 8.99);
        $this->insertAllSizesForPizza(7, 5.49);
        $this->insertAllSizesForPizza(8, 4.99);
        $this->insertAllSizesForPizza(9, 5.99);

    }

    private function insertMenuEntrySize($menuentryid, $size, $unit, $price)
    {
        DB::table('menuentrysize')->insert([
            'menuentry_id' => $menuentryid,
            'size' => $size,
            'unit' => $unit,
            'price' => $price,
            'currency' => 'EUR',
        ]);
    }

    private function insertAllSizesForPizza($pizzaId, $smallPizzaPrices)
    {
        $this->insertMenuEntrySize($pizzaId, 25, 'cm', round($smallPizzaPrices, 2));
        $this->insertMenuEntrySize($pizzaId, 35, 'cm', round($smallPizzaPrices * 35 / 25, 2));
        $this->insertMenuEntrySize($pizzaId, 50, 'cm', round($smallPizzaPrices * 2, 2));
    }
}
