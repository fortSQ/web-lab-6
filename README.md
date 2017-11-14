# web-lab-6
Разработка серверных веб-приложений. Лабораторная работа №6

## Ход работы

### 1

Устанавливаем Silex через утилиту Composer с помощью командной строки:

```bash
composer create-project fabpot/silex-skeleton lab ~2.0
```

В текущей рабочей директории создастся папка lab, куда загрузится демо-приложение.

Переходим в данную папку:

```bash
cd lab
```

Запускаем встроенный PHP-сервер через Composer командой:

```bash
composer run
```

И проверяем, запуская в браузере ссылку http://localhost:8888/index_dev.php/

Если ошибок нет, мы увидим страницу-приветствие с текстом "**Welcome to your new Silex Application!**", а внизу debug-панель:

![](screenshots/1.png)

### 2