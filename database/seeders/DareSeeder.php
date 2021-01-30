<?php

namespace Database\Seeders;

use App\Models\Dare;
use Illuminate\Database\Seeder;

class DareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['MUL', 'FF', 'MM', 'MF'] as $type) {
            Dare::create(["type" => $type, 'value' => 'Invite one of your friends over for threesome.', 'shot' => 3, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Kill yourself', 'shot' => 2137, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Have someone blindfold you. Then, everyone in the group kisses you on the cheek, and you have to either say which one is your partner, and then kiss them on the lips, OR, you have to choose one person that you want to kiss on the lips.', 'shot' => 7, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'With your eyes closed and the other person or people standing across from you in the room, walk with your hands out. You have to kiss the first person you touch, where you touch them.', 'shot' => 5, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'You have to undress down to your accessories and skivvies. If you want to keep any clothes on, you have to take a shot for every piece of clothing you want to keep.', 'shot' => 9, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Take off your bra but leave your shirt on.', 'shot' => 3, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Try to take off your underwear without flashing anyone.', 'shot' => 8, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Touch tongues with someone of different sex.', 'shot' => 78, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Close your eyes, scroll through your contacts list and tell me the sexiest thing about the person you you land on.', 'shot' => 9, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Sing the chorus of a song you’ve had sex to.', 'shot' => 6, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Send a message to someone you want to sleep with describing a dirty dream you’ve had about them.', 'shot' => 34, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Try on someone else\'s underwear.', 'shot' => 2, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Take off your pants for the rest of the game.', 'shot' => 3, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Take off your shirt for the rest of the game.', 'shot' => 6, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Show person in front of you the sexiest picture you have on your phone.', 'shot' => 2, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Spank person in front of you as hard as you can.', 'shot' => 3, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Ask anyone of your friends like your face.', 'shot' => 43, 'lang' => 'eng']);
            Dare::create(["type" => $type, 'value' => 'Twerk in only your underwear.', 'shot' => 8, 'lang' => 'eng']);

            Dare::create(["type" => $type, "value" => "Пригласите одного из своих друзей на секс втроем.", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "Убей себя", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "Попросите кого-нибудь завязать вам глаза. Затем все в группе целуют вас в щеку, и вы должны либо сказать, кто из них ваш партнер, а затем поцеловать их в губы, ЛИБО вы должны выбрать одного человека, которого вы хотите поцеловать в губы.", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "С закрытыми глазами и другим человеком или людьми, стоящими напротив вас в комнате, идите, вытянув руки. Вы должны поцеловать первого человека, которого вы касаетесь, там, где вы его касаетесь.", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "Вы должны раздеться до своих аксессуаров и юбок", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "Прикоснитесь к языкам с человеком разного пола.", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "Снимайте штаны до конца игры.", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "Шлепайте человека перед собой так сильно, как только можете.", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "Тверкайте только в нижнем белье.", "shot" => 3, "lang" => "rus"]);
            Dare::create(["type" => $type, "value" => "Спойте припев песни, с которой у вас был секс.", "shot" => 3, "lang" => "rus"]);

            Dare::create(["type" => $type, 'value' => 'Canta el coro de una canción con la que hayas tenido sexo.', 'shot' => 6, 'lang' => 'spa']);
            Dare::create(["type" => $type, 'value' => 'Envía un mensaje a alguien con quien quieras dormir describiendo un sueño sucio que hayas tenido sobre esa persona.', 'shot' => 34, 'lang' => 'spa']);
            Dare::create(["type" => $type, 'value' => 'Pruébate la ropa interior de otra persona.', 'shot' => 2, 'lang' => 'spa']);
            Dare::create(["type" => $type, 'value' => 'Quítate los pantalones por el resto del juego.', 'shot' => 3, 'lang' => 'spa']);
            Dare::create(["type" => $type, 'value' => 'Quítate la camisa por el resto del juego.', 'shot' => 6, 'lang' => 'spa']);
            Dare::create(["type" => $type, 'value' => 'Muéstrale a la persona que tienes enfrente la imagen más sexy que tienes en tu teléfono.', 'shot' => 2, 'lang' => 'spa']);
            Dare::create(["type" => $type, 'value' => 'Azota a la persona frente a ti lo más fuerte que puedas.', 'shot' => 3, 'lang' => 'spa']);
            Dare::create(["type" => $type, 'value' => 'Pregunta a cualquiera de tus amigas como tu cara.', 'shot' => 43, 'lang' => 'spa']);
            Dare::create(["type" => $type, 'value' => 'Haz twerk solo con tu ropa interior.', 'shot' => 8, 'lang' => 'spa']);
        }
    }
}
