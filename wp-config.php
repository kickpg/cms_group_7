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
define( 'DB_NAME', 'cms_learning' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'h)B{e}m0q}Bc/tc.9u}`h3fO%vb2O62@DQPXbW^$5Q?IF>=~1ysY[|*3z7K.d9dk' );
define( 'SECURE_AUTH_KEY',  ';g*y|X0[-1=0y-k$k%:Qjp~X0HgE;JKk19A2H&N@f<n9YS8v3t8DpZLI>#?ma6oc' );
define( 'LOGGED_IN_KEY',    'm5N1rCFN@o]0>;bEMTcSk0[!J@5mf/5*pKN[x(N[fm40v I/en{*HMZtlY{^hV79' );
define( 'NONCE_KEY',        '1c)k6|WwIV cV/5SA49Bbo@/U[~w.hEJnMevo,zr-qa`P?|lAi#n/c|)1fc%dB}A' );
define( 'AUTH_SALT',        'v)}e>>0AyW*s(9B;-p@y&9`;kOvz&F_]IvI=Z:5.!D3ILib$G(ADJ1Y4b(mn$3($' );
define( 'SECURE_AUTH_SALT', '|5lb(]s_!0k^4fR),lL p2[h3I%N@f=s0`Y-kPWT7=PGc~|`&B04MesHUu*yAb=T' );
define( 'LOGGED_IN_SALT',   '3{ZetovT|/yvc[u|laI!6HYTqW(o(1,Mm]<L>Gn2%=9dJ_x^I6{T_jkFK2XOf}9E' );
define( 'NONCE_SALT',       'ttLvCW#xd9k_|$xW]sn4&MSAj~Dy&I}65Wx8btV.c@7CV> LN!1NEUw_qCt|.1?~' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
