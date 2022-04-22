<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'starenkaya_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<F;qzz&_rR=`qh<p0udwuiMs{M6o+4N}n<0~|4(bjVd]!-lWc2%6sG:D2lNy.^G6' );
define( 'SECURE_AUTH_KEY',  'tA0l Hx$Av[yY<)5R)!gIh^,^cOaQs,`zi[69~(00_0Jq[% %Cn)4%qLWA;K0b+}' );
define( 'LOGGED_IN_KEY',    'TfQ fb XV<(eH=7@>2Zrk=zPK/N58X0L(dhK0oDNmWG--FV%YH{Z$fDf/49p5HP)' );
define( 'NONCE_KEY',        '|Cd{!xP),7uPT=_iWn}rIw}FZh|:pQ?8E%,EN[Qm9BAs*xj`:e,6FM<5y7m_^3k@' );
define( 'AUTH_SALT',        'LqLU@_0hC!Ui~~l,=QEuVC`wPSUE*VIsYmiTt68Uj7IHIo>BK:NCHT`>S%[Hrm+Y' );
define( 'SECURE_AUTH_SALT', '`-DM{h*BYgEKszu?B:*B5uw61h*ax<5?#MN&3bVae*iOV,0GP*?<.NX>[Il&G0.w' );
define( 'LOGGED_IN_SALT',   'GKJis-fY1ES!gTwZ]#cZskrsHSi S k4[:E%EIhQMPY^j`3kfbzbs]?SxQ)o@u`Q' );
define( 'NONCE_SALT',       'Tc)v ]2qU|}-}8`u&Q*i0qKUvTdjcFruXJxC yPSXM?rOLzli>~e}Wj*1G8Gzs.X' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
