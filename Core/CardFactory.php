<?php
namespace Core;
include './Core/Card.php';

$cards = [];
for ($i = 1; $i <= 50; $i++) {
    array_push($cards,
        new \Core\Card(
            'article '.$i, 
            'https://placekitten.com/250/200', 
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non lacus dolor. Morbi lorem urna, 
            varius eget elementum eu, euismod non velit. Cras ac leo dui. Aliquam scelerisque enim non augue tristique, 
            ut facilisis nisi tempor. Nulla non mollis lorem. Maecenas viverra neque non nibh malesuada sodales. 
            Integer urna libero, accumsan quis nisl at, pharetra pretium lectus. Donec sagittis tortor quis magna pulvinar cursus. 
            Quisque blandit nisi eu nisl fermentum rhoncus.'
        )
    );
}
