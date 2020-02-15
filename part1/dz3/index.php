<?php

$result1 = [
    'author' => [
        'fullName' => 'Johnatan Clark',
        'email' => 'Clarc@mail.ru'
    ],
    'book' => [
        'bookName' => 'Sunrise',
        'authorEmail' => 'Clarc@mail.ru'
    ]
];

$result2 = [
    'authors' => [
        [
            'fullName' => 'Johnatan Clark',
            'email' => 'Clarc@mail.ru'
        ],
        [
            'fullName' => 'Ivan Bunin',
            'email' => 'Bunin@mail.ru'
        ],
        [
            'fullName' => 'Alex Pushkin',
            'email' => 'Pushkin@mail.ru'
        ]
    ],
    'books' => [
        [
            'bookName' => 'Sunrise',
            'authorEmail' => 'Clarc@mail.ru'
        ],
        [
            'bookName' => 'Prosa',
            'authorEmail' => 'Bunin@mail.ru'
        ],
        [
            'bookName' => 'Ruslan i Ludmila',
            'authorEmail' => 'Pushkin@mail.ru'
        ],
    ]
];

$result3 = [
    'authors' => [
        [
            'Clarc@mail.ru' => 'Johnatan Clark',
            'Old' => '1974'
        ],
        [
            'Bunin@mail.ru' => 'Ivan Bunin',
            'Old' => '1890'
        ],
        [
            'Pushkin@mail.ru' => 'Alex Pushkin',
            'Old' => '1745'
        ]
    ],
    'books' => [
        [
            'bookName' => 'Sunrise',
            'authorEmail' => 'Clarc@mail.ru'
        ],
        [
            'bookName' => 'Prosa',
            'authorEmail' => 'Bunin@mail.ru'
        ],
        [
            'bookName' => 'Ruslan i Ludmila',
            'authorEmail' => 'Pushkin@mail.ru'
        ],
    ]
];

//=========================================
$city1 = 12;
$cityRadius1 = 5;

$city2 = 18;
$cityRadius2 = 6;

function randomCarsKilometr()
{
    $result = [];
    for ($i = 0; $i < 10; $i++) {
        $result[$i + 1] = rand(1, 30);
    }
    return $result;
}
// print_r(randomCarsKilometr());

function whichCarSpeed($city1, $cityRadius1, $city2, $cityRadius2)
{
    $road = [0, 30];
    $maxSpeddInCity = 70;
    $maxSpeddOutCity = 90;
    $cars = randomCarsKilometr();

    echo "<p>1 city distance " . ($city1 - $cityRadius1) . " - " . ($city1 + $cityRadius1) . "</p><br>";
    echo "<p>2 city distance " . ($city2 - $cityRadius2) . " - " . ($city2 + $cityRadius2) . "</p><br>";

    foreach ($cars as $key => $value) {
        if ($value < $city1 - $cityRadius1 || $value > $city2 + $cityRadius2) {
            echo "Car " . $key . " in road km " . $value . " and speed " . $maxSpeddOutCity . "<br>";
        }
    }
}

print_r(whichCarSpeed($city1, $cityRadius1, $city2, $cityRadius2));
