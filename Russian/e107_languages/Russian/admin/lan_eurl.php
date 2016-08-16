<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Russian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/08/14 18:13:49
|
|        $Author: admin $
+---------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Управление URL-адресов сайта");
define("LAN_EURL_NAME_CONFIG", "Профили");
define("LAN_EURL_NAME_ALIASES", "Псевдонимы");
define("LAN_EURL_NAME_SETTINGS", "Общие параметры");
define("LAN_EURL_NAME_HELP", "Справка");
define("LAN_EURL_EMPTY", "Список пуст");
define("LAN_EURL_LEGEND_CONFIG", "Выберите URL-адрес профиля на стройплощадке");
define("LAN_EURL_LEGEND_ALIASES", "Настроить псевдонимы базовый URL-адрес в URL-адрес профиля");
define("LAN_EURL_DEFAULT", "По умолчанию");
define("LAN_EURL_PROFILE", "Профиль");
define("LAN_EURL_INFOALT", "Информация");
define("LAN_EURL_PROFILE_INFO", "Профиль информация не доступна");
define("LAN_EURL_LOCATION", "Расположение профиля");
define("LAN_EURL_LOCATION_NONE", "Конфигурационный файл не доступен");
define("LAN_EURL_FORM_HELP_DEFAULT", "Псевдоним, когда в языке по умолчанию.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Значение по умолчанию —");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Псевдоним в");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Базовый URL-адрес");
define("LAN_EURL_ERR_ALIAS_MODULE", "Псевдоним «%1\$s» не могут быть сохранены - есть система URL профиль с тем же именем. Пожалуйста, выберите другое значение псевдонима для системы URL профиля «%2\$s»");
define("LAN_EURL_SURL_UPD", "  SEF URLs были обновлены");
define("LAN_EURL_SURL_NUPD", "  SEF URLs НЕБЫЛИ обновлены");
define("LAN_EURL_SETTINGS_PATHINFO", "Удаление файла из URL-адреса");
define("LAN_EURL_SETTINGS_MAINMODULE", "Связать корневое пространство имен");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Выберите, какие области сайта будет связан с URL базы сайта. Пример: Когда новости Ваш корень пространства имен http://yoursite.com/News-Item-Title будет связан с новостями (пункт Просмотр страницы будет решена)");
define("LAN_EURL_SETTINGS_REDIRECT", "Перенаправление в системе не найден страницы");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Если задано значение false, не найден страницы будет прямая (без перенаправления браузера)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Автоматизированный тип string создание SEF");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Выбрать как будет собран SEF строки, когда он автоматически построен из значения заголовка (например, в Новости, пользовательские страницы, и т.д.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Просто закрепите его");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize к--строчная");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize к верблюд Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize с нет дело изменить");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "underscore_to_lower_case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Underscore_To_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Underscore_with_no_case_CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "Plus + сепаратор + до + Нижняя + случай");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Плюс + сепаратор + до + верблюд + дело");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus + сепаратор + с + no + случай + смена");
define("LAN_EURL_MODREWR_DESCR", "Удаляет имя файла сценария входа (index.php/) из URL-адресов. Вам понадобится mod_rewrite установлен и запущен на вашем сервере (Apache веб-сервер). После включения этого параметра перейдите к корневой папке сайта, переименовать htaccess.txt в .htaccess и modifgy <em>«RewriteBase»</em> директива, если требуется.");
define("LAN_EURL_MENU", "URL-адрес сайта");
define("LAN_EURL_MENU_CONFIG", "URL-адрес профили");
define("LAN_EURL_MENU_ALIASES", "Псевдонимы");
define("LAN_EURL_MENU_SETTINGS", "Параметры");
define("LAN_EURL_MENU_HELP", "Справка");
define("LAN_EURL_MENU_PROFILES", "Профили");
define("LAN_EURL_UC", "Стадии строительства");
define("LAN_EURL_CORE_MAIN", "Сайта корневое пространство имен - псевдонимов не в пользе.");
define("LAN_EURL_FRIENDLY", "Дружественные");
define("LAN_EURL_LEGACY", "Наследие прямой URL.");
define("LAN_EURL_REWRITE_LABEL", "Дружественные URL-адресов");
define("LAN_EURL_REWRITE_DESCR", "Поиск двигатель и пользователь дружественных URL.");
define("LAN_EURL_CORE_NEWS", "Новости");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Полное дружественных URL (не производительность и наиболее дружественных)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Дружественные URL-адресов без ID (не производительность, более дружественной)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Демонстрирует ручной связь разбора и монтаж.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Дружественные URL-адресов с идентификатором (Спектакль мудрый)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Показывает, что автоматизированная связь разбора и монтаж на основе предопределенных маршрут правил.");
define("LAN_EURL_CORE_USER", "Пользователи");
define("LAN_EURL_USER_REWRITE_LABEL", "Дружественные URL-адресов");
define("LAN_EURL_USER_REWRITE_DESCR", "Поиск двигатель и пользователь дружественных URL.");
define("LAN_EURL_CORE_PAGE", "Пользовательские страницы");
define("LAN_EURL_PAGE_SEF_LABEL", "Дружественные URL-адресов с идентификатором (производительность)");
define("LAN_EURL_PAGE_SEF_DESCR", "Поиск двигатель и пользователь дружественных URL.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Дружественные URL-адресов без ID (не производительность, более дружественной)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Поиск двигатель и пользователь дружественных URL.");
define("LAN_EURL_CORE_SEARCH", "Поиск");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "По умолчанию URL-адрес поиска");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Наследие прямой URL-адрес.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Дружественные URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");
define("LAN_EURL_CORE_SYSTEM", "Системы");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "По умолчанию система URL");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URL-адреса для страниц как не найден, отказано в доступе, и т.д.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Системы дружественных URL");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URL-адреса для страниц как не найден, отказано в доступе, и т.д.");
define("LAN_EURL_CORE_INDEX", "Главная страница");
define("LAN_EURL_CORE_INDEX_INFO", "Передние страницы не может иметь псевдоним.");
define("LAN_EURL_REBUILD", "Перестроить");


?>