<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'bds');

/** Username của database */
define('DB_USER', 'admin');

/** Mật khẩu của database */
define('DB_PASSWORD', 'admin');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/ea_$1EgpAl&S6l ar#i~{E. mFXvGUjz11X>vyZdBg5caq%ac=RvjfQ4W0KqJL`');
define('SECURE_AUTH_KEY',  '=k%[{1Cc5#s8v3dWJ~,A#gah4bUaD=[l_ CRo~fij[jjri}i7F`E(cw*&zm{t;`3');
define('LOGGED_IN_KEY',    'ey6q@p|f|maIj^7657z-Q+;gEdu8 )#+-#k9;YAiA}0@{~IsES/@R@><)af`<d1q');
define('NONCE_KEY',        '-])m5YdA`</jX4sO=1p&N~{Y+jh,M&~`TH( QF6sE@.i[J#$3zfh7a-Qq+9zky0p');
define('AUTH_SALT',        'clFuRVJcrI39YM M~7Yp&]JtNo3VMbNlyPU#l1=#(k{}B o.n|%s=m)(u>32m_Dt');
define('SECURE_AUTH_SALT', 'wsEQ Z!u_Z=p)X1Zj{4NLk)o9VA r~mNKj4f.BbJfwQh<^pRf~]MKhZX7)bHC{,)');
define('LOGGED_IN_SALT',   'Ms,_y`eh~vj2@q;:, G:Hy1xF`2t/HZj#&u4*LrNgq:W45?Delgxn9*3bu4(f8h1');
define('NONCE_SALT',       '&)A3jXU-O=,dTM}mAiP>T3~ze:(vX#dl]H~.9glzK`:9L.?c=79?(N$7(aNJ(gL>');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
