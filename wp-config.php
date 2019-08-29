<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wordpress22' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'test' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '123!@#QWEasd' );

/** MySQL主机 */
define( 'DB_HOST', '198.35.45.87' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y 6L&z1h((S0CuAL;iE9XQjrc}DL$J#2Pm_6]m}[jiOxoLa4TCt@rM[,{?$<E*{z' );
define( 'SECURE_AUTH_KEY',  'fi_F[&=7/*Wq1qVM$zNuc=C&a,RJzg>SaDk;kS{S}ooj(I7wch0%k-3nd2YYKM;G' );
define( 'LOGGED_IN_KEY',    '<Nz~<uh+pp-cgoALZV2EbCpA `+N1^UB-j%fA+b(>s.qu>V1WENSQv!L)F9FvMb9' );
define( 'NONCE_KEY',        '=fF;[V88e$ Q>!hC-:#Y?s};S,_.LCbKVyau:vTeP*-X!cKP{9,eS[RP8O]{gdZ<' );
define( 'AUTH_SALT',        '@e& D@xAE#2dJ8yoGXoH|^CnI[&Ydm7!#~(K-F1E%Cv]~6yl^FlYx<K0{-@9zML=' );
define( 'SECURE_AUTH_SALT', 'h}fdxa7(Y@Il2 bXZ{2<pUH5R1U^]O6Fde$kcRrvNcQ[RX9j9q%+]qn4yV7#?mup' );
define( 'LOGGED_IN_SALT',   'vK7Xs$) gw[3[W3>>Q4I*N8[0=B#gJ[Uc8(~kIG(ukvJ.*IFjoFf nktrd|i3$go' );
define( 'NONCE_SALT',       'UA 0%=^1vJ:rms(=-9jrQ)j;zH32QwK{nbAd9+>.g><zyL(jpNQ`eO~n!2m5DU~_' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
