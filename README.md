Данный проект - временное решение (разделение админ-панели и основного проекта). В данный момент основной проект переезжает на API-центрированный подход, где базой будет админ-панель.

Требования:

php v8.3
Node v20
npm v10

Необходимые файлы и пакеты:

```
git clone git@github.com:Spenkau/sites_statistic.git
```

```
composer install
```

```
npm install
```

Запуск:

Указать данные для подключения к MySQL в .env идентичные данным в основном проекте.

```
php artisan migrate
```

```
php artisan serve
```

```
npm run dev
```

Использование:

1) Зарегистрироваться в основном приложении
2) Изменить роль в таблице role_user своего пользователя на admin.
3) Авторизироваться в админ-панели.
4) Добавить пользователя
5) Перейти на страницу /dashboard и запустить проверку
6) Перейти на страницу пользователи, откуда можно перейти на их сайты, страницы, детали.

3) Запустить проверку API
4) Перейти на детали на страницу /api-points
