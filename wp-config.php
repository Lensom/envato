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
define( 'DB_NAME', 'envato' );

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
define( 'AUTH_KEY',         'QO=Ft=L=KHPjkNnz~e}C``;v,3[Nzc}yjwG?J RLAG)5O$+y*d4e8NV.zjNLp.1Y' );
define( 'SECURE_AUTH_KEY',  'L,C$9Q4|L.S:.4BB2|{e9L s$:FN[soPT6bidxjnZc(xECx;>.B<x]~9,wO8xR.d' );
define( 'LOGGED_IN_KEY',    ';iJ5%g%?8MIvz!&Q#=a26DFkLEh}0]q^G)&>wP MA&/&+:i(`O7s`k@%W78Tb.aO' );
define( 'NONCE_KEY',        '9Rc0(l(0L_{S?#c1AD%h6$Sg#+xYwxjaAkB,?r^f|vxQmThF28u2eWz_/3pOY#=(' );
define( 'AUTH_SALT',        '|M JxA0FM[|6L@A%J6ebS&,qXoxkT0M/^Xo)^L*0~[7c*VPm{>T]XD-<R4kWSK?%' );
define( 'SECURE_AUTH_SALT', 'Q)e]-/< <[0oj9!&@|u5Qlfc4d3W#cYu~C(~`%SW9w7l(qO<05S@9_xXF{e[IZ6%' );
define( 'LOGGED_IN_SALT',   'W5]O^K+2|Iv)x5[6%g^<32::S];G)-/o$F(8$n9:B(uRS7|[lQK{T`XQU}R&E}Wy' );
define( 'NONCE_SALT',       ',Uht2q m~u_]0yYP9<xQl^fO,mOcS`6=7_72jwSzF;o.Vr~z$%JxgoFQC2; lJ*W' );

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
