В любой большой кодовой базе можно встретить куски абсолютно непонятного кода. Как правило такой код пишется чтобы немного выиграть в производительности приложения... и как правило такой код не нужен в принципе, так как оптимизирует не то что нужно, не в том месте где это нужно и не так как надо.

Мы начнём с небольшого примера, на котором встретим все частые ошибки преждевременной оптимизации. После чего мы начнём с основ и рассмотрим
* Алгоритмы стандартной библиотеки и их сложности
* Контейнеры стандартной (и не только) библиотеки, с их особенностями
* Move семантику и её неожиданное поведение
* Многопоточность

Так как курс практический, то все темы мы будем исследовать экспериментально, используя С++ библиотеку для бенчмарков google benchmark. Большая часть задач выглядит как "Вот пример кода на 10-20 строк, давайте его ускорим используя только что изученный материал. А теперь давайте сделаем Х и попробуем объяснить результат". В процессе исследований мы натолкнёмся на особенности аллокаторов, оптимизаторов и имплементаций контейнеров; посмотрим на ассемблерный код; научимся правильно и понятно писать быстрые однопоточные и многопоточные приложения.

Для курса понадобится всего лишь компилятор с поддержкой C++11 и базовые знания C++.