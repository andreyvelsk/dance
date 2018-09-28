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
define('DB_NAME', 'danceschool');

/** Имя пользователя MySQL */
define('DB_USER', 'danceschool');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Dance56Dance');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');



define ('WPLANG', 'ru_Ru');


define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(l}Bd<cnbf-_Oyd_bo3nS*y&Wy,vy go)Jj&}l FEpo6&&5VPU7vgQ_l]z=aU0DI');
define('SECURE_AUTH_KEY',  'O3eNJgZam{^:kv>82~)EgK0ZC=?jer]^ci95KRs,u72/jEMyB~7E<)0{VEhqnZI5');
define('LOGGED_IN_KEY',    '/#~bC)C;n]=@,aiigoc28on-Kz}7hkWo(T6M!o`ti>6`]*aP3&PoSL^;t=R)Fvz=');
define('NONCE_KEY',        'CH97/@zgGCP2X|Z(X/aN#1.u@)#L]W^mOrpo%o),H;;${nBei?0L$E/jNJ||@X>U');
define('AUTH_SALT',        ')/)bYp26v],v$8.9AL*yj%^$M3,W~-OH#u[Dd@P~m@j(f[l*}1VieO1*(4e2QqMM');
define('SECURE_AUTH_SALT', 'wGI(N-Q0WiEH|h~,a-al8.gODL}@T:$CD2-W#aAUR^_3,_y*>: mTatjM[s#Q`}`');
define('LOGGED_IN_SALT',   '~*@4B%CYFDI?X7-eOx}0Vm)n+H%{hlgL,73CRt }_!O.fmw+:[2j6K6B]P28>E)y');
define('NONCE_SALT',       '0J2Ke;PEqGpr3Z*&y(pP5.#/ge@wXn=8BN @ObQ5z.06m`Cr3IW!^R]Uagd+PEC]');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
