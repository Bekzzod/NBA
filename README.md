# NBA Systems
---
# Подготовка:
---
## 1. Скачать и установить Open Server редакции Premium ([torrent-файл](http://rutracker-2017.org/engine/download.php?id=2377) или [сайт разработчика](https://ospanel.io/download/))
## 2. Скачать [десктопный клиент для Git](https://desktop.github.com/), залогиниться/зарегистрироваться и клонировать данный репозиторий в папку C:\OSPanel\domains
В программе: File - Clone Repository - Вкладка URL - вставить https://github.com/Bekzzod/NBA/ и задать папку C:\OSPanel\domains. У репозитория должен получиться путь C:\OSPanel\domains\NBA. Саму папку NBA создавать не нужно, ее создаст программа.
## 3. Настроить Open Server. 
Приложение находится по пути C:\OSPanel\Open Server x64.exe.  
После запуска иконка приложения появляется в трее, переход в настройки и всё управление осуществляется по правому клику на нее.  
Настройки по вкладкам:  
Основные - Требовать учетные записи администратора
![](https://github.com/Bekzzod/NBA/raw/master/readme_media/admin.png)  

Сервер - Настройка использования переменной Path: Свой Path + Win Path 
![](https://github.com/Bekzzod/NBA/raw/master/readme_media/server.png)  

Модули - HTTP: Apache-PHP-7-x64  
         PHP: PHP-7.1-x64  
         MySQL/MariaDB: MySQL-5.7-x64  
		 
![](https://github.com/Bekzzod/NBA/raw/master/readme_media/modules.png)  

Домены - Управление доменами: Ручное + Автопоиск  
         Имя домена: estate; папка домена: \NBA\ (выбор по нажатии трёх точек); нажать "Добавить" 
![](https://github.com/Bekzzod/NBA/raw/master/readme_media/domens.png)