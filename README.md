# SmartApple Language School — Course Selection Form (2014)

[![Ru](https://shields.io)](#ru-описание)
[![En](https://shields.io)](#en-description)

---

### RU: Описание

**Форма делалась в 2014 году для языковой школы SmartApple.** Она предлагает выбрать чекбоксами интересующие курсы и ввести email, на который затем отправляются ссылки на скачивание материалов. 

Это архивная работа, подготовленная для старого портфолио. Она наглядно демонстрирует подходы и практики, которые я использовал в веб-разработке в период с 2012 по 2015 год.

#### Особенности и технологии периода (2012–2015)
* **jQuery и микро-библиотеки:** В то время было нормой собирать проект из отдельных небольших скриптов «на вес». Сюда входит и полифил для корректной работы атрибута `placeholder`, так как в тот период он поддерживался далеко не всеми браузерами.
* **`ajax/JSON.php`:** Это библиотека `Services_JSON` из репозитория PEAR. Она требовалась для версий PHP ниже 5.2, где еще отсутствовали встроенные функции `json_encode` и `json_decode`. В файле `post.php` она используется исключительно ради одной строки: `$json->encode($arr)`. В 2014 году этот подход уже очень давно устарел, но я этого не знал и форма дорабатывалась на базе еще более старого кода из эпохи до PHP5.
* **`js/json2.js`:** Знаменитый полифил Дугласа Крокфорда (Douglas Crockford), который добавлял поддержку `JSON.parse` и `JSON.stringify` в устаревшие браузеры (IE7 и старше).

> **Примечание:** В целом код содержит большое количество ошибок и архитектурных недочетов. Проект выложен в исходном виде, самое начало моего развития в качестве PHP/JS разработчика. Главное, этот код прекрасно работал и работает до сих пор.

---

### EN: Description

**The form was created in 2014 for the SmartApple language school.** It allows users to select courses of interest using checkboxes and enter their email address to receive download links. 

This is an archival project prepared for an older portfolio. It demonstrates the development approaches and practices I used in web development between 2012 and 2015.

#### Technical Highlights & Legacy Stack (2012–2015)
* **jQuery & Micro-libraries:** Back then, it was common practice to assemble projects from individual, lightweight standalone scripts. This included a polyfill for proper `placeholder` attribute support, as it wasn't universally handled by all browsers at the time.
* **`ajax/JSON.php`:** This is the `Services_JSON` library from PEAR. It was required for PHP versions prior to 5.2, which lacked built-in `json_encode` and `json_decode` functions. In `post.php`, it is used solely for the `$json->encode($arr)` line. By 2014, this approach was already long outdated, but I was unaware of that at the time, and the form was built upon an even older codebase dating back to the pre-PHP 5 era.
* **`js/json2.js`:** Douglas Crockford's famous polyfill, which added `JSON.parse` and `JSON.stringify` support to legacy browsers (IE7 and older).

> **Note:** Overall, the code contains numerous mistakes and architectural flaws. The project is uploaded in its original form to showcase the very beginning of my journey as a PHP/JS developer. Most importantly, this code worked perfectly back then and still works flawlessly today.
