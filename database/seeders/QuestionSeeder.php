<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['MUL', 'FF', 'MM', 'MF'] as $type) {
            Question::create(["type" => $type, "value" => "Have you ever experimented with the same sex as yours just for fun?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever cheated on your partner?", "shot" => 2, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever paid somebody compliments just to get laid?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever stalked your ex boyfriend/girlfriend or ex friend on social media?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever regretted breaking up with someone?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever thought about cheating on your bf/gf but never actually done it?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever had a crush on someone (not your partner ofc) while in relationship?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever been in an open relationship?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever said „I love you” without feeling it?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "Have you ever lied in this game?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "What is the largest age gap you’ve had between you and someone you’ve had sex with?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "What is the largest age gap you’ve had between you and someone you’ve kissed?", "shot" => 1, "lang" => "eng"]);
            Question::create(["type" => $type, "value" => "What was your worst sex experience?", "shot" => 1, "lang" => "eng"]);

            Question::create(["type" => $type, "value" => "¿Alguna vez has experimentado con el mismo sexo que el tuyo solo por diversión?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Alguna vez has engañado a tu pareja?", "shot" => 5, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Alguna vez has engañado a tu pareja?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Alguna vez ha acosado a su ex novio / novia o ex amigo en las redes sociales?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Alguna vez te has arrepentido de haber terminado con alguien?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Alguna vez has pensado en engañar a tu novio / novia pero nunca lo has hecho?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Alguna vez te has enamorado de alguien (que no sea de tu pareja) durante tu relación?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Alguna vez ha tenido una relación abierta?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Alguna vez has dicho te amo sin sentirlo?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Has mentido alguna vez en este juego?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Cuál es la diferencia de edad más grande que ha tenido entre usted y alguien con quien ha tenido relaciones sexuales?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Cuál es la diferencia de edad más grande que ha tenido entre usted y alguien a quien besó?", "shot" => 1, "lang" => "spa"]);
            Question::create(["type" => $type, "value" => "¿Cuál fue tu peor experiencia sexual?", "shot" => 1, "lang" => "spa"]);

            Question::create(["type" => $type, "value" => "Вы когда-нибудь экспериментировали с тем же полом, что и ваш, просто для развлечения?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Вы когда-нибудь изменяли своему партнеру?", "shot" => 2, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Вы когда-нибудь изменяли своему партнеру?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Вы когда-нибудь преследовали своего бывшего парня / девушку или бывшего друга в социальных сетях?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Вы когда-нибудь сожалели о разрыве с кем-то?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Вы когда-нибудь думали об измене своему парню / девушке, но никогда не думали?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Вы когда-нибудь влюблялись в кого-то (кроме своего партнера) во время отношений?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Были ли у вас когда-нибудь открытые отношения?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Вы когда-нибудь говорили, что я люблю вас, не чувствуя этого?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Вы когда-нибудь лгали в этой игре?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Какая самая большая разница в возрасте между вами и кем-то, с кем вы занимались сексом?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Какая самая большая разница в возрасте между вами и тем, кого вы целовали?", "shot" => 1, "lang" => "rus"]);
            Question::create(["type" => $type, "value" => "Каким был ваш худший сексуальный опыт?", "shot" => 1, "lang" => "rus"]);
        }
    }
}
