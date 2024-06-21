<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $lessonsData = [
            1 => [
                'title' => 'Пізнання геометричних фігур з Міккі Маусом',
                'image' => 'img/lessons/geometric-figures/lesson_1.png',
                'frame' => '<iframe style="max-width:100%" src="https://wordwall.net/uk/embed/d9b05e3a98264b81bc181a016610b59e?themeId=50&templateId=10&fontStackId=0" width="100%" height="580" frameborder="0" allowfullscreen></iframe>'
            ],
            2 => [
                'title' => 'Геометричні фігури у нашому житті',
                'image' => 'img/lessons/geometric-figures/lesson_2.png',
                'frame' => '<iframe style="max-width:100%" src="https://wordwall.net/uk/embed/b3f92c5675e64319b5724538df296b7e?themeId=23&templateId=11&fontStackId=0" width="100%" height="580" frameborder="0" allowfullscreen></iframe>'
            ],
            3 => [
                'title' => 'Одиниці вимірювання маси',
                'image' => 'img/lessons/units-measurement/lesson_3.png',
                'frame' => '<iframe style="max-width:100%" src="https://wordwall.net/uk/embed/614da09c78294e9ea63aeb89516876a7?themeId=46&templateId=36&fontStackId=0" width="100%" height="580" frameborder="0" allowfullscreen></iframe>'
            ],
            4 => [
                'title' => 'Одиниці вимірювання часу',
                'image' => 'img/lessons/units-measurement/lesson_4.png',
                'frame' => '<iframe style="max-width:100%" src="https://wordwall.net/uk/embed/60b0ec6c8b7b402fb0bf5052738512f4?themeId=43&templateId=36&fontStackId=0" width="100%" height="580" frameborder="0" allowfullscreen></iframe>'
            ],
            5 => [
                'title' => 'Величини вимірювання',
                'image' => 'img/lessons/units-measurement/lesson_5.png',
                'frame' => '<iframe style="max-width:100%" src="https://wordwall.net/uk/embed/d9b05e3a98264b81bc181a016610b59e?themeId=50&templateId=10&fontStackId=0" width="100%" height="580" frameborder="0" allowfullscreen></iframe>'
            ],
            6 => [
                'title' => 'Одиниці вимірювання довжини',
                'image' => 'img/lessons/units-measurement/lesson_6.png',
                'frame' => '<iframe style="max-width:100%" src="https://wordwall.net/uk/embed/d17152843dee48e09e52b037ff755f41?themeId=27&templateId=36&fontStackId=0" width="100%" height="580" frameborder="0" allowfullscreen></iframe>'
            ],
            7 => [
                'title' => 'Одиниці вимірювання',
                'image' => 'img/lessons/units-measurement/lesson_7.png',
                'frame' => '<iframe style="max-width:100%" src="https://wordwall.net/uk/embed/6ecdf6243f0b4e5cb1a67aa8deebc735?themeId=50&templateId=10&fontStackId=0" width="100%" height="580" frameborder="0" allowfullscreen></iframe>'
            ],
            8 => [
                'title' => '1',
                'image' => 'img/lessons/multiplication-table/lesson_8.jpg',
                'frame' => '<div id="liveworksheet7525670" style="width:100%">
                    <span id="lwslink7525670"><a href="https://www.liveworksheets.com/w/uk/math/7525670">Таблиця множення на 2</a>, an interactive worksheet by <a href="https://www.liveworksheets.com/u/nika-20030303">Вероника</a>
                    <br><a href="https://www.liveworksheets.com">live<b>worksheets.com</b></a></span>
                    </div>
                    <script src="https://www.liveworksheets.com/embed/embed.js?v=1"></script>
                    <script>
                    loadliveworksheet(7525670,"dni5",927,"www","new");
                    </script>'
            ],
            9 => [
                'title' => '2',
                'image' => 'img/lessons/multiplication-table/lesson_9.png',
                'frame' => '<div id="liveworksheet7525749" style="width:100%">
                    <span id="lwslink7525749"><a href="https://www.liveworksheets.com/w/uk/math/7525749">Таблиця множення на 3</a>, an interactive worksheet by <a href="https://www.liveworksheets.com/u/nika-20030303">Вероника</a>
                    <br><a href="https://www.liveworksheets.com">live<b>worksheets.com</b></a></span>
                    </div>
                    <script src="https://www.liveworksheets.com/embed/embed.js?v=1"></script>
                    <script>
                    loadliveworksheet(7525749,"d2dl",927,"www","new");
                    </script>'
            ],
            10 => [
                'title' => '3',
                'image' => 'img/lessons/multiplication-table/lesson_10.jpg',
                'frame' => '<div id="liveworksheet7525778" style="width:100%">
                    <span id="lwslink7525778"><a href="https://www.liveworksheets.com/w/uk/math/7525778">Таблиця множення на 4</a>, an interactive worksheet by <a href="https://www.liveworksheets.com/u/nika-20030303">Вероника</a>
                    <br><a href="https://www.liveworksheets.com">live<b>worksheets.com</b></a></span>
                    </div>
                    <script src="https://www.liveworksheets.com/embed/embed.js?v=1"></script>
                    <script>
                    loadliveworksheet(7525778,"swcd",927,"www","new");
                    </script>'
            ],
            11 => [
                'title' => '4',
                'image' => 'img/lessons/multiplication-table/lesson_11.png',
                'frame' => '<div id="liveworksheet7526124" style="width:100%">
                    <span id="lwslink7526124"><a href="https://www.liveworksheets.com/w/uk/math/7526124">Таблиця множення на 5</a>, an interactive worksheet by <a href="https://www.liveworksheets.com/u/nika-20030303">Вероника</a>
                    <br><a href="https://www.liveworksheets.com">live<b>worksheets.com</b></a></span>
                    </div>
                    <script src="https://www.liveworksheets.com/embed/embed.js?v=1"></script>
                    <script>
                    loadliveworksheet(7526124,"3ddc",927,"www","new");
                    </script>'
            ],
            12 => [
                'title' => '5',
                'image' => 'img/lessons/multiplication-table/lesson_12.png',
                'frame' => '<div id="liveworksheet7526139" style="width:100%">
                    <span id="lwslink7526139"><a href="https://www.liveworksheets.com/w/uk/math/7526139">Таблиця множення на 6</a>, an interactive worksheet by <a href="https://www.liveworksheets.com/u/nika-20030303">Вероника</a>
                    <br><a href="https://www.liveworksheets.com">live<b>worksheets.com</b></a></span>
                    </div>
                    <script src="https://www.liveworksheets.com/embed/embed.js?v=1"></script>
                    <script>
                    loadliveworksheet(7526139,"wycb",927,"www","new");
                    </script>'
            ],
            13 => [
                'title' => '6',
                'image' => 'img/lessons/multiplication-table/lesson_13.jpg',
                'frame' => '<div id="liveworksheet7527433" style="width:100%">
                    <span id="lwslink7527433"><a href="https://www.liveworksheets.com/w/uk/math/7527433">Таблиця множення на 7</a>, an interactive worksheet by <a href="https://www.liveworksheets.com/u/nika-20030303">Вероника</a>
                    <br><a href="https://www.liveworksheets.com">live<b>worksheets.com</b></a></span>
                    </div>
                    <script src="https://www.liveworksheets.com/embed/embed.js?v=1"></script>
                    <script>
                    loadliveworksheet(7527433,"34bn",927,"www","new");
                    </script>'
            ],
            14 => [
                'title' => '7',
                'image' => 'img/lessons/multiplication-table/lesson_14.png',
                'frame' => '<div id="liveworksheet7527440" style="width:100%">
                    <span id="lwslink7527440"><a href="https://www.liveworksheets.com/w/uk/maths/7527440">Таблиця множення на 8</a>, an interactive worksheet by <a href="https://www.liveworksheets.com/u/nika-20030303">Вероника</a>
                    <br><a href="https://www.liveworksheets.com">live<b>worksheets.com</b></a></span>
                    </div>
                    <script src="https://www.liveworksheets.com/embed/embed.js?v=1"></script>
                    <script>
                    loadliveworksheet(7527440,"hfq7",927,"www","new");
                    </script>'
            ],
            15 => [
                'title' => '8',
                'image' => 'img/lessons/multiplication-table/lesson_15.png',
                'frame' => '<div id="liveworksheet7527448" style="width:100%">
                    <span id="lwslink7527448"><a href="https://www.liveworksheets.com/w/uk/math/7527448">Таблиця множення на 9</a>, an interactive worksheet by <a href="https://www.liveworksheets.com/u/nika-20030303">Вероника</a>
                    <br><a href="https://www.liveworksheets.com">live<b>worksheets.com</b></a></span>
                    </div>
                    <script src="https://www.liveworksheets.com/embed/embed.js?v=1"></script>
                    <script>
                    loadliveworksheet(7527448,"rdgp",927,"www","new");
                    </script>'
            ],
            16 => [
                'title' => '1',
                'image' => 'img/lessons/oral-count/lesson_16.jpg',
                'frame' => '<div class="interacty_padding" style="position: relative; padding: 99.5% 0 0 0;">
        <div class="interacty_wrapper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center;">
            <iframe style="border: none; width: 100%; height: 100%;" src="https://p.interacty.me/fbcfe9234c4bf75d/iframe.html"></iframe>
        </div>
    </div>'
            ],
            17 => [
                'title' => '2',
                'image' => 'img/lessons/oral-count/lesson_17.jpg',
                'frame' => '<div class="interacty_padding" style="position: relative; padding: 99.5% 0 0 0;">
        <div class="interacty_wrapper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center;">
            <iframe style="border: none; width: 100%; height: 100%;" src="https://p.interacty.me/a0b2c4fb2b23375e/iframe.html"></iframe>
        </div>
    </div>'
            ],
            18 => [
                'title' => 'Котра година',
                'image' => 'img/lessons/units-measurement/lesson_7.png',
                'frame' => '<iframe style="max-width:100%" src="https://wordwall.net/uk/embed/03ffca2c636c4db4b257915efffb2f0f?themeId=49&templateId=5&fontStackId=0" width="100%" height="580" frameborder="0" allowfullscreen></iframe>'
            ],
        ];

        if(!isset($lessonsData[$id])){
            abort(404);
        }

        return view('lessons', $lessonsData[$id]);
    }
}
