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
define( 'DB_NAME', 'nika_db' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vMIv?sfB.mJvNVY&eeyqv7*}05z5wgq0y6!7`MYTeshh( w;X`V-w;=:Tj:Fm4, ' );
define( 'SECURE_AUTH_KEY',  '6i[pACV8h+/z&.Ehm}e@^kQ+#,|C])JFL2+?TICD0q&Hv1*$hwMr=>^/RkcXJT8A' );
define( 'LOGGED_IN_KEY',    '=^->#3P7Z}WU,u&I]& ?jm4$K5>t5,V=@%{y8,@F07 uGQ`{e{Huimr ,k:%ve|_' );
define( 'NONCE_KEY',        'mpz;h,?y[igpr03+b;=jAZ`Q^o#0;-j<k}Z9n~y017zA~ g[KV?T_hsH<}T{as%s' );
define( 'AUTH_SALT',        '@`~!)3j?N&gW}XQh(E&xSYjZ;oGqI,xZz@%Y/o ;%<P`iTV*hl/p@toDWa;8L%s!' );
define( 'SECURE_AUTH_SALT', 'br%G@)]:;b()|*YyEim,0]~gi!NWj[<4jXVQ%Ef7:2Uy<`miWn!&#T]YGV]LInDs' );
define( 'LOGGED_IN_SALT',   'c>~MEFvRKT(e#h1$qR2Fr7PibX^Wwp-cs=J$~BS?gam2K%kY hdy5V<0!i^E+_k}' );
define( 'NONCE_SALT',       '{2sFZv6im>6({@=*XGAkd0xqB|3|T%uNg xmt{G>XjI=ljqHUX9t7:|[Lh?I!*- ' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
