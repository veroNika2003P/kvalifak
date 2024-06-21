<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categoriesData = [
            'geometric-figures' => [
                'title' => 'Геометричні фігури',
                'description' => 'Вивчаючи геометричні фігури ти не просто вчишся розпізнавати форми, а й розуміти простір.',
                'todo' => 'Пізнай навколишній світ за допомогою геометричних фігур.',
                'config' => [
                    'titleBgColor' => '#E3F6D2',
                    'todoBgColor' => '#A9D18E',
                    'lessonBgColor' => '#CBEEAC',
                    'todoTextColor' => '#fff',
                ],
                'lessons' => [
                    [
                        'id' => 1,
                        'title' => 'Пізнання геометричних фігур з Міккі Маусом',
                        'image' => 'img/lessons/geometric-figures/lesson_1.png'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Геометричні фігури у нашому житті',
                        'image' => 'img/lessons/geometric-figures/lesson_2.png'
                    ]
                ]
            ],
            'units-measurement' => [
                'title' => 'Одиниці вимірювання',
                'description' => 'Вивчення одиниць вимірювання - це як відкриття нового світу. Кожна одиниця вимірювання - це ключ до розуміння, як працює наш світ. Вони допомагають нам вимірювати все, від довжини до ваги, від часу до температури.',
                'todo' => 'Знайди величини вимірювання, їх характеристики та виконай перетворення одиниць вимірювання.',
                'config' => [
                    'titleBgColor' => '#FFF5D1',
                    'todoBgColor' => '#FEDEBE',
                    'lessonBgColor' => '#FFFFAF',
                    'todoTextColor' => '#001F60',
                ],
                'lessons' => [
                    [
                        'id' => 3,
                        'title' => 'Одиниці вимірювання маси',
                        'image' => 'img/lessons/units-measurement/lesson_3.png'
                    ],
                    [
                        'id' => 4,
                        'title' => 'Одиниці вимірювання часу',
                        'image' => 'img/lessons/units-measurement/lesson_4.png'
                    ],
                    [
                        'id' => 5,
                        'title' => 'Величини вимірювання',
                        'image' => 'img/lessons/units-measurement/lesson_5.png'
                    ],
                    [
                        'id' => 6,
                        'title' => 'Одиниці вимірювання довжини',
                        'image' => 'img/lessons/units-measurement/lesson_6.png'
                    ],
                    [
                        'id' => 7,
                        'title' => 'Одиниці вимірювання',
                        'image' => 'img/lessons/units-measurement/lesson_7.png'
                    ]
                ]
            ],
            'multiplication-table' => [
                'title' => 'Таблиця множення',
                'description' => 'Таблиця множення - це як магічний ключ, який відкриває двері до світу швидких розрахунків. Вона допомагає нам у навчанні, роботі і навіть у повсякденному житті.',
                'todo' => 'Завітай у гості до жителів математичного світу та допоможи друзям знайти їх предмети.',
                'config' => [
                    'titleBgColor' => '#E5F8FF',
                    'todoBgColor' => '#BCCFFA',
                    'lessonBgColor' => '#B1C3EC',
                    'todoTextColor' => '#001F60',
                ],
                'lessons' => [
                    [
                        'id' => 8,
                        'title' => '2',
                        'image' => 'img/lessons/multiplication-table/lesson_8.jpg'
                    ],
                    [
                        'id' => 9,
                        'title' => '3',
                        'image' => 'img/lessons/multiplication-table/lesson_9.png'
                    ],
                    [
                        'id' => 10,
                        'title' => '4',
                        'image' => 'img/lessons/multiplication-table/lesson_10.jpg'
                    ],
                    [
                        'id' => 11,
                        'title' => '5',
                        'image' => 'img/lessons/multiplication-table/lesson_11.png'
                    ],
                    [
                        'id' => 12,
                        'title' => '6',
                        'image' => 'img/lessons/multiplication-table/lesson_12.png'
                    ],
                    [
                        'id' => 13,
                        'title' => '7',
                        'image' => 'img/lessons/multiplication-table/lesson_13.jpg'
                    ],
                    [
                        'id' => 14,
                        'title' => '8',
                        'image' => 'img/lessons/multiplication-table/lesson_14.png'
                    ],
                    [
                        'id' => 15,
                        'title' => '9',
                        'image' => 'img/lessons/multiplication-table/lesson_15.png'
                    ]
                ]
            ],
            'oral-count' => [
                'title' => 'Усний рахунок',
                'description' => 'Усний рахунок - це веселий і захоплюючий процес, який нагадує велику пригоду, де ми можемо відкривати нові числа і розв’язувати цікаві задачі.',
                'todo' => 'Розв’яжи приклади усно та запиши результати на аркуші після чого вибудуй послідовність від найменшого до найбільшого склавши картинку правильно.',
                'config' => [
                    'titleBgColor' => '#BDF9EB',
                    'todoBgColor' => '#8FF5DD',
                    'lessonBgColor' => '#37EDC2',
                    'todoTextColor' => '#001F60',
                ],
                'lessons' => [
                    [
                        'id' => 16,
                        'title' => '1',
                        'image' => 'img/lessons/oral-count/lesson_16.jpg',
                    ],
                    [
                        'id' => 17,
                        'title' => '2',
                        'image' => 'img/lessons/oral-count/lesson_17.jpg'
                    ],
                ]
            ],
            'time' => [
                'title' => 'Час',
                'description' => 'Вивчаючи годинник ти навчаєшся планувати свій день, розуміти, скільки часу потрібно на різні дії, і навіть допомагаєте собі стати більш відповідальним.',
                'todo' => 'Вивчай годинник з Оленкою та Михасиком.',
                'config' => [
                    'titleBgColor' => '#FECAF8',
                    'todoBgColor' => '#FD95F1',
                    'lessonBgColor' => '#FFFFAF',
                    'todoTextColor' => '#001F60',
                ],
                'lessons' => [
                    [
                        'id' => 18,
                        'title' => 'Котра година',
                        'image' => 'img/lessons/units-measurement/lesson_7.png'
                    ]
                ]
            ]
        ];

        if(!isset($categoriesData[$id])){
            abort(404);
        }

        return view('category', $categoriesData[$id]);
    }
}
