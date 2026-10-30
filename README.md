Форма делалась в 2015 году для языковой школы SmartApple, предлагает выбрать чекбоксами интересующие курсы и ввести email, на email отправляются ссылки на скачивание курсов.

Архивная работа, показывает подходы используемые мной в 2012-2015 годах. Для старого портфолио.

Что характерно для этого периода, jquery, плюс отдельные библиотеки буквально на вес, включая правильную работу placeholder. В то время Placeholder правильно работал не во всех браузерах. 

ajax/JSON.php — это библиотека Services_JSON из PEAR. Она нужна была для PHP до 5.2, где ещё не было встроенных json_encode/json_decode. 
В post.php она нужна только ради строки $json->encode($arr). В 2015 году файл был уже не актуален, но форма дорабатывалась из более старой, эпохи до PHP5.

js/json2.js — полифил Дугласа Крокфорда, который добавлял JSON.parse и JSON.stringify в IE7 и старше. 

В целом код с большим количеством ошибок, показывает самое начало моего развития, как php/js разработчика.

The form was created in 2015 for the SmartApple language school. It allows users to select courses of interest using checkboxes and enter their email address to receive download links. This is an archival project that demonstrates the approaches I used between 2012 and 2015 for an older portfolio.
What characterizes this period is the use of jQuery alongside standalone micro-libraries, including a fix for proper placeholder support, which wasn't universally handled by all browsers at the time.
• ajax/JSON.php: This is the Services_JSON library from PEAR. It was required for PHP versions prior to 5.2, which lacked built-in json_encode and json_decode functions. In post.php, it is used solely for the $json->encode($arr) line. By 2015, this file was already outdated, but the form was adapted from an even older codebase dating back to the pre-PHP 5 era.
• js/json2.js: Douglas Crockford's polyfill, which added JSON.parse and JSON.stringify support to IE7 and older browsers.
Overall, the code contains numerous mistakes and reflects the very beginning of my journey as a PHP/JS developer.
