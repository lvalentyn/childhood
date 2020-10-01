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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'childhood' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'childhood' );

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
define( 'AUTH_KEY',         'w5,aXD^faH?x.Sbi|fT^f4Y7R_|1vID1 rC./_^TGQ9-sjyJ(dXFYC2j?M$DW5vj' );
define( 'SECURE_AUTH_KEY',  'Hts*1{-G>)b^qGbVvP=~.QqgU9(Gd2,Il_WT?Wp,Qxwt+0UKZnJg&HSX?f[D%E@q' );
define( 'LOGGED_IN_KEY',    ':nW$o~szk)jl$]W4F=E*AWY./KGp<R*!.DNH4,dCU!bMII0xNX2E@{iX*?I@ij3T' );
define( 'NONCE_KEY',        ')fP`o0CT1=R?8!;dpQApLZzuB|+ekj^/pg+AizN;cWhRr?ML$C-?iAd(Gd:$EMS(' );
define( 'AUTH_SALT',        '<R6YI]Z9Cc?F6bK{P+!b20wufd@W}2T&$8vCDta+^Kx`oJ+T+`.=^|}npPTX<=bv' );
define( 'SECURE_AUTH_SALT', '+Qz{cos~kzZ*U{cq@ l-fkaHTiQ8UO~Ah8Hjd0SUGuIc)Tx:xK 5xGJb&r5)=QDa' );
define( 'LOGGED_IN_SALT',   '%%^T]w`Hn#MRocsBp4+]Zq!]}&}p91i;;$VScf=#J`F >N%(jqu=|F{3J1Z:SNN.' );
define( 'NONCE_SALT',       '4nN-@zcAdHb58]#R?8KVoroQ] {E#w0s|`YY4ZMp0U%Hw;Pn;^ycjn7S3@4bpql?' );

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
