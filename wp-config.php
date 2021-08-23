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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ebaholash' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         '_?@&sx}1Gm_A/m+Lvy.3BCP`y*oe&g&^A.g4jR~*U-_8(xIwM*BX%Oz&wlcr=H `' );
define( 'SECURE_AUTH_KEY',  'P5PY1R$w@ll}Rq6C<!ZiCjPCgV;Bk~RZGb+gw33+49R-=T:4xcf;Atg9i!,,Q{1D' );
define( 'LOGGED_IN_KEY',    'cfQDibWxpN67T?)ChS>6/n/[XajoHhGSw_eMJ_F7KYq+=P.I#@Uo5~_tvJiNL%U,' );
define( 'NONCE_KEY',        ':oO.-~3UB!T3`PHvQu]>U;Me%V}|(=#A,S%*q=_ #.xVh?l9/[BP_1<]>~G3@D82' );
define( 'AUTH_SALT',        'Cy ={YuArX8%ke)&75>XfS&%z9pKA@6C#0c<NZj9n<c+x955PoQr?&`MTRBg4F-N' );
define( 'SECURE_AUTH_SALT', 'MN`?g-8!q(xzB@&*Qzo^SQeCWkb=~3pjyZ$<^2G%$?Q;w&57k)]wxMersSG)*;l@' );
define( 'LOGGED_IN_SALT',   '9(,YY] dH&_ua5|F`w-?l.?_Z<J;Wdta*&WH=3 0a89,=a-Nuh?h&b`k#SMsNf{n' );
define( 'NONCE_SALT',       'WOZAX=)_<gu/[?8t8Q?>mzoTf>.e7QcsiBoXR%@&I0bGn0$i5$~|igu/Ib(C9:eT' );

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
