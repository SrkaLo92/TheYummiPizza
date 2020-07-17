<?php

use Illuminate\Database\Seeder;

class MenuEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertMenuEntry('Margherita‌', 'Dough, pelati, cheese.');
        $this->insertMenuEntry('Capricciosa', 'Dough, pelati, ham, cheese, mushrooms, hot sausage.');
        $this->insertMenuEntry('Venezia', 'Edge filled with cheese, ham, fresh pepper, mushroom, cheese, oregano, hot sausage, mozzarella, sesame.');
        $this->insertMenuEntry('Mexico', 'Dough, Nacho sauce, Taco sauce, bolognese sauce, cheese, Bell pepper, jalapeno cut pepper.');
        $this->insertMenuEntry('Hot Sausage', 'Dough, pelati, ham, cheese, mushrooms, hot sausage.');
        $this->insertMenuEntry('Chicken Feta', 'Chicken meat, feta cheese, zucchini and sour cream.');
        $this->insertMenuEntry('Pepperoni Piccante', 'Dough, pelati, cheese, hot sausage.');
        $this->insertMenuEntry('Tuna', 'Dough, pelati, tuna, cheese, onion mushrooms and black olive.');
        $this->insertMenuEntry('Fresh line Chicken meat', 'Dough, pelati, cheese, tomato, arugula, chicken meat.');
    }

    private function insertMenuEntry($name, $description)
    {
        DB::table('menuentry')->insert([
            'name' => $name,
            'description' => $description,
        ]);
    }
}
