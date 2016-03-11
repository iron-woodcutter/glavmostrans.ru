<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'glavmostrans');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Serp_123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'vXrIqiyCA$mI7?rC3$Gi,F{d!v}Yac5d3mh8SSC+axw3rK3{| Nfh7#v$LUsmkyU');
define('SECURE_AUTH_KEY', 'q3AHV7&RfELL=oz-HK40&BHZ>~!Iac5gtx,CSUB5%b0^-M^WfWmDo?R#VT76r<h|');
define('LOGGED_IN_KEY', '3@b P8FLu~>xOTp9 *ZTmniw;aYWac5Zoj5oV0ns`kiA0sT!@SrjIxC3[4d@VP{E');
define('NONCE_KEY', 'Swb-{x$ZE%kz~*te?dX?Y*&Jo~(Sac5sbJ u^zK}VK~e+)$Yp9nE^SISh!,cTUk|');
define('AUTH_SALT', '+GdJa19~?u~|@~Xo9g4IU$XE7OV7ac5yar~Lw?+%PBuYP!2$E]U`T>hJ!z[]sbQ]');
define('SECURE_AUTH_SALT', 'mvtW{S];T8FIsqn(i$O:Ovo-J`Wnac5{ O|IiqN[bK|ur0iEe-~GmtG6>)sYU6<z');
define('LOGGED_IN_SALT', 'T*LM&?JMZJ6O]@ji+;ryR%QlQZIdac5=nv=ErO-l/`aS#kv>3Q4>D8TcKlz%|H)|');
define('NONCE_SALT', '64p#X/+2!cZ]ww=qWV/{8}U2-FN}ac5`n}f f&#5NV~EjC-g85/Mw|u42cClG9to');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
if ($_SERVER['REMOTE_ADDR'] === '5.228.164.158') {
    define('WP_DEBUG', true);
} else {
    define('WP_DEBUG', false);
}
define('FS_METHOD', 'direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
