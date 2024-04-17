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
 * * Настройки базы данных
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
define( 'DB_NAME', '2290-22_38372' );

/** Имя пользователя базы данных */
define( 'DB_USER', '2290-22_38372' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'a41539ff8cf06a5c4a56' );

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
define( 'AUTH_KEY',         ' 1SAOd;>y;j8,K@*kVOq{Ua1C]+rrYhPF$?M=Ho?8IR7MH`8-9z`1dDR)75RcI<>' );
define( 'SECURE_AUTH_KEY',  'CWGrNowcqv$mBe(D[EAmJ<k~k/[P{)o&7^6.~a0>R}aZnMD[RE{K^M:Y2,f$S% a' );
define( 'LOGGED_IN_KEY',    ']<?M)jz=sJ`JZp,+%]Ud:lMwkbj]RXC0p[gsuI*J+RvR}AmbSI/$WO_AqL7C/38%' );
define( 'NONCE_KEY',        'rZ^/~M_y>?oV}^oWoxCU*]s:z/&u.[ulLYALNf!h}cCU2IGq`UzGaA-BIj4#1(M*' );
define( 'AUTH_SALT',        'eKb8YI;Lo??AeXN#y7szp=/Z,ql;>DE}OZH3oggt &&xL]*23NwB7;J#m 8#)[D,' );
define( 'SECURE_AUTH_SALT', 'tv~;<3L<%+3>^Lr`mmrb.EU3680zv}&H$bA 3/Kxw I`eiXA6C9XT{r,tm2bJ#xI' );
define( 'LOGGED_IN_SALT',   'n[BEz`9RCgIHjRMjP=o?PrDDPo@O1I GVP2jVv[:?ht&[$X?m{FmW>1-!}COl48S' );
define( 'NONCE_SALT',       'y~dH)_^D|H:JG%jkkjbUO*-E@>~D>:QwNg@$k>8EdOfe49u$F9+50p@SU[FK7TW/' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'zpwar_';


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