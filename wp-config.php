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
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         'dB0 R=s;G!|9O[svRMBF@nrA@,g`t}i6c@Q=*hJx_Ny`;p,}h5.#]3k=nryY?8Y~' );
define( 'SECURE_AUTH_KEY',  'P3*{qP_%dw>rV<S-_akRZ)WsY-J.e{3}+K-9=1JH{q=x6)>O:EJ~YE8f[|qj`yW7' );
define( 'LOGGED_IN_KEY',    '_^~.BADQ$fJoQ|No%z*/[%MACC@lp>htnw<}nhu9>1IT8P/VMx$kVEja`:F^=<?)' );
define( 'NONCE_KEY',        'ja9(P;mR}}3H.b~*(@Ir)8T,mpcjM-xv4=Y,C.Nkb;tLqsoQ)m{]&+C+F%2WH}k1' );
define( 'AUTH_SALT',        '}7D@CnGp<5e+8(qn4QA2*[-n]G@s+C8)buN]RQXlO:XG4fh5$l6&DAu f@^yH )w' );
define( 'SECURE_AUTH_SALT', 'KKO|Zm5,WA#vG@Q0j`OWvd@=L:$S`}lcJyPTxNI{}u:;Or:f8sb^ziT7==Wa N<Z' );
define( 'LOGGED_IN_SALT',   ')f]9{PSA>jW=B{JM[BN@8)r!,iIX/yQPp&w]/JjR)un8V]xm{R%M(M{[*Cfam=HI' );
define( 'NONCE_SALT',       'bTL+mzV6?RExKS1xR[Zy$#uAQ9DJc~[T<p5e}TK}>O1uroxVrQ!-Al7-IFXxTjdv' );

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
