# shop - SYMFONY 1.4 DOCTRINE
# AUTHOR - UMURZAKOV FARRUKH
ДЛЯ СТАБИЛЬНОЙ РАБОТЫ ПРОЕКТА СМОТРИТЕ ДОКУМЕНТАЦИЮ ПО УСТАНОВКЕ ФРЕЙМВОРКА - https://symfony.com/legacy/doc/jobeet/1_4/en/01?orm=Doctrine


Я использовал php 5.3.1, 	Apache 2.0 Handler,  MYSQL 5.1.41.

Логика:
    - Создана админ панель
    - Создана панель регистрации
    - Валидация форм
    - Красивый и читаемый URL адрессс
    - Главная страница берет из базы все активные товары в виде карточек, максимальное количество карточек на странице - 10шт.
    - Создание/правка/удаление/просмотр товара, если удалить товар с сайта, удалится все связанное с этим товаром с БД (АВТОРИЗИРОВАННЫМ ПОЛЬЗОВАТЕЛЯМ)
    - Если пользователь не авторизован, он может только просматривать
    - Товар активен только 30 дней
    - Полный контроль товаров и типов товаров с админ панели (продление товара еще на 30 дней, удаление неактивных товаров(более 60 дней))
    - Максимальное количество товаров админ панели - 10 шт.
 Доделать :
    - вид всех форм, закончить валидацию всех форм, сделать поиск по сайту конкретного товара, править логику регистрации ...
    
    ps
      фронтэнд делал на MDboostrap 4+
      
    pps
      скрины мб скину позже.