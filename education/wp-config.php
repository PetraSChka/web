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
define( 'DB_NAME', 'eduDB' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'eduDB' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'PetraSChka1' );

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
define( 'AUTH_KEY',         '2@!k(byk)L%pZArzRC,nxM*S$n9>~dYAQExhc&+^jh>5`L3h[3O}}BvKdu9l/D=r' );
define( 'SECURE_AUTH_KEY',  'FdvPY(1{H<Xa;B6>P9UjoUGFcf]GQ]U-zK_WYkn#yNPcz@*sWmdZW>=x_=igi0nc' );
define( 'LOGGED_IN_KEY',    '}UuZh-n&M}_+H?5k4I^mv7yi X%KUgST[NpY;8@|>Xu,H((S7pkBV|`[X!e},T.{' );
define( 'NONCE_KEY',        '9rOknM.p=ON%v^KY<exsLTM>]XO$7AnNltcr/B%dg=:j&qX[09BS8X<-z{JY!+cg' );
define( 'AUTH_SALT',        'Q7F/A8,8xeFHYzD{GcM&6e5|9/M[i>%LU1O=s|?I.Ug&88X7(JD(aY_*)^!ED7kV' );
define( 'SECURE_AUTH_SALT', 'J~`WI|2M.ec)w5wK8-qe@2308h5Y<u^oNaOEGA PWC0}Tv1%b!qQOz/etUG=Q]BJ' );
define( 'LOGGED_IN_SALT',   'Im=rcdE;39[IC1! yK8uZlTg:&u<`&*l1@d`cQ~^V- G-@Vs*4y3@#uS4I.WC I+' );
define( 'NONCE_SALT',       '.zYvByjWhvG G^:;5V J*.K[&*nFcolVDP};)|<5$( i6ip_Na)z3cm;q=A! *-5' );

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
