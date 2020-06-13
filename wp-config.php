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
define( 'DB_NAME', 'https://github.com/Haoplix/Haoplix.github.io' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Haoplix' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '739182465132465798798465132739182465RrHaoplix' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'Haoplix.github.io' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '$@b6gcl7Bps`V}G)Kd2l;!/HU=+?;>|)?%k`Qwbpq25+:/m*39&XI:yJtTjCG2g|' );
define( 'SECURE_AUTH_KEY',  'uVK@Z+XX34gf=OZ^4R}jorg{ +<}ct()uMQQZmwJ#gM!^f6*<jzJs+cip$I|k_GW' );
define( 'LOGGED_IN_KEY',    '5-AOv.cOVXGJbeUL+0*+>wNq*-r7Z53p_G<iMig NKlurS3OEK]iJu@$th-c&&$j' );
define( 'NONCE_KEY',        'CO c8+T: `;Hzb/kz_F]*R&%F(N-W3D8-06sVgO.vaxkbW~F~C}*7=5-<j|9t]rh' );
define( 'AUTH_SALT',        ',YwFKk%y59>&Jei%gSTPUMf].K:xM*,iY9O:SDfB,9i|+@5?2O-b12D_$$wpDMs@' );
define( 'SECURE_AUTH_SALT', 'BBm#k:N]5o=icd*{USm2aAy+x?D/9:Nm]F=G1Co4|PZ.8GiZ|_)X*jxx}m D_|*^' );
define( 'LOGGED_IN_SALT',   'Ly+=$0tsZ3A`k3K)lSpN|,m-v2:EC0!&v*F[gw}(2g,J-{hTjru!jrk-!N7+=ssG' );
define( 'NONCE_SALT',       'd.0.:RK ruiPn?nXfkp5wmIG8-d2QKE[?p[@p<HQE{,YX{`g{+%dq0-asEl<HO4H' );

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
