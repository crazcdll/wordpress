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
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'zcdll');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'google');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.cBQT}+{3$PJEQcD0t@K.Y$UdrD?u>^d(IT@%q8wdRScmD13N`_Vh+E(p_/KXz(o');
define('SECURE_AUTH_KEY',  'eN*8Zpyub7jJ?uoHV$d=U1ysYU8XJyJA=O).8{;SNYM{](9=j=E%!$/Ds6ly1Jtj');
define('LOGGED_IN_KEY',    'RD2!AW,v{5NjcA?-_7) Y!x=R-kcx%K]ks2{KEJG2-jafI|^p^;6.sRIrT/@!B1)');
define('NONCE_KEY',        'j8Bf<{OJH;D,KNMBMv3mmNNf]y|Ufa$6uQI<rT2,Oc?@fY;*pH- qA]r%SAk}tm(');
define('AUTH_SALT',        'ZHur[e~Vt|!=NgRT_%+K?9VTP_&g] tVizn.RqB[=.}32{jk]t3WZ1`{m9Q{WC^g');
define('SECURE_AUTH_SALT', '=@[cV:o.vv!um^RRs1?U0QOG8D0+&%2o}@tfyRPh?dU2Pz<aF I2jT9oEoIRqMaG');
define('LOGGED_IN_SALT',   'zMV&,Ts8&=XDT^:uJ.;v15xI(!S!/`P~pz.T*6(S/q,5)GbvIJ]6!hRkUu>3`7tk');
define('NONCE_SALT',       'PXVNSwpRD5,^(&d!~02a1=Ur{]H4_OG~}XiCS$z(0kBux=l 75|zgZ5lG$Fs,?mc');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

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

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
