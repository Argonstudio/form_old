# SmartApple Language School — Course Selection Form (2015)

[![Ru]](#ru-описание)
[![En]](#en-description)

---

### RU: Описание

**Форма делалась в 2015 году для языковой школы SmartApple.** Она предлагает выбрать чекбоксами интересующие курсы и ввести email, на который затем отправляются ссылки на скачивание материалов. 

Это архивная работа, подготовленная для старого портфолио. Она наглядно демонстрирует подходы и практики, которые я использовал в веб-разработке в период с 2012 по 2015 год.

#### Особенности и технологии периода (2012–2015)
* **jQuery и микро-библиотеки:** В то время было нормой собирать проект из отдельных небольших скриптов «на вес». Сюда входит и полифил для корректной работы атрибута `placeholder`, так как в тот период он поддерживался далеко не всеми браузерами.
* **`ajax/JSON.php`:** Это библиотека `Services_JSON` из репозитория PEAR. Она требовалась для версий PHP ниже 5.2, где еще отсутствовали встроенные функции `json_encode` и `json_decode`. В файле `post.php` она используется исключительно ради одной строки: `$json->encode($arr)`. В 2015 году этот подход уже устарел, но форма дорабатывалась на базе еще более старого кода из эпохи до PHP5.
* **`js/json2.js`:** Знаменитый полифил Дугласа Крокфорда (Douglas Crockford), который добавлял поддержку `JSON.parse` и `JSON.stringify` в устаревшие браузеры (IE7 и старше).

> **Примечание:** В целом код содержит большое количество ошибок и архитектурных недочетов. Проект выложен в исходном виде, так как он ценен для меня как отправная точка — он показывает самое начало моего развития в качестве PHP/JS разработчика.

---

### EN: Description

**The form was created in 2015 for the SmartApple language school.** It allows users to select courses of interest using checkboxes and enter their email address to receive download links. 

This is an archival project originally prepared for an older portfolio. It demonstrates the development approaches and mindsets I relied on between 2012 and 2015.

#### Technical Highlights & Legacy Stack
* **jQuery & Micro-libraries:** Typical for its era, the project relies on jQuery alongside standalone utility libraries, including a workaround for proper `placeholder` support, which wasn't universally handled by all browsers at the time.
* **`ajax/JSON.php`:** This is the `Services_JSON` library from PEAR. It was required for PHP versions prior to 5.2, which lacked built-in `json_encode` and `json_decode` functions. In `post.php`, it is used solely for the `$json->encode($arr)` line. By 2015, this file was already outdated, but the form was adapted from an even older codebase dating back to the pre-PHP 5 era.
* **`js/json2.js`:** Douglas Crockford's polyfill, which added `JSON.parse` and `JSON.stringify` support to IE7 and older browsers.

> **Note:** Overall, the code contains numerous mistakes and outdated practices. It reflects the very beginning of my journey as a PHP/JS developer and is kept as a historical reference.

