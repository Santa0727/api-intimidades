<?php

namespace Database\Seeders;

use App\Models\Dice;
use Illuminate\Database\Seeder;

class DiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// ENG
        Dice::create(["lang" => "ENG", 'place' => json_encode(["Back","Hand", "Nose", "Belly Button", "Finger", "Ear", "Lips"]), 'action' => json_encode(["Lick", "Tickle", "Nibble", "Blow", "Suck", "Massage", "Kiss"]), 'level' => 0]);
        Dice::create(["lang" => "ENG", 'place' => json_encode(["Back","Hand", "Nose", "Belly Button", "Finger", "Ear", "Lips"]), 'action' => json_encode(["Lick", "Tickle", "Nibble", "Blow", "Suck", "Massage", "Kiss"]), 'level' => 1]);

        /// SPA
        Dice::create(["lang" => "SPA", 'place' => json_encode(["Espalda", "Mano", "Nariz", "Ombligo", "Dedo", "Oído", "Labios"]), 'action' => json_encode(["Lamer", "Hacer cosquillas", "Mordisquear", "Soplar", "Chupar", "Masajear", "Besar"]), 'level' => 0]);
        Dice::create(["lang" => "SPA", 'place' => json_encode(["Espalda", "Mano", "Nariz", "Ombligo", "Dedo", "Oído", "Labios"]), 'action' => json_encode(["Lamer", "Hacer cosquillas", "Mordisquear", "Soplar", "Chupar", "Masajear", "Besar"]), 'level' => 1]);

        /// RUS
        Dice::create(["lang" => "RUS", 'place' => json_encode(["Спина", "Рука", "Нос", "Пупок", "Палец", "Ухо", "Губы"]), 'action' => json_encode(["Лизать", "Пощекотать", "Кусать", "Удар", "Сосать", "Массаж", "Поцелуй"]), 'level' => 0]);
        Dice::create(["lang" => "RUS", 'place' => json_encode(["Спина", "Рука", "Нос", "Пупок", "Палец", "Ухо", "Губы"]), 'action' => json_encode(["Лизать", "Пощекотать", "Кусать", "Удар", "Сосать", "Массаж", "Поцелуй"]), 'level' => 1]);
    }
}
