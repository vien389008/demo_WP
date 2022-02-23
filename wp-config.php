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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         'IA%oCQ %$:$G#uz5IBBe](=sA[nW`vx`=9~?#>^+YRxpt;]fM_tV0JMug{]|PAb#' );
define( 'SECURE_AUTH_KEY',  'sgIO1^>Z@e`20fig(/# !b*mu%{(=LhRfkV!t6DbXt,z~OYid2<N.%TuP?}p(_Qn' );
define( 'LOGGED_IN_KEY',    '[j{[Vj_Rw`7(SG2`)X^`h# fmA-j J451;^RkdSdc/^CO,p=F({OUQ7|e~ZQdj%c' );
define( 'NONCE_KEY',        'Ywp3m/`<80/|u}XS?CwMEvGLAk?B32A?gR/0^5F#j7ME#Q#FYWC8W0i{#Ko^N]#H' );
define( 'AUTH_SALT',        '9V(GGH8(*-}5C#YFjk<ol<bcaO2{Z0qFFwI9[f]t%(4`b-mwh(7P)?~Ol%$vuNK6' );
define( 'SECURE_AUTH_SALT', 'Is]]9:NHH%v>hqUCPMFj(d`D>hFpto1BVUh4#tq6H{amyHYb4.[cC;dObx[iV}Lb' );
define( 'LOGGED_IN_SALT',   '!As+bn>h%-/0.InFk=#a;+qHx>JJOxpQ3mc}ywVagkSfQ:0}a7CUGkHGvZB753-{' );
define( 'NONCE_SALT',       '>#I7F}j?kY$PKw#l(Ngl]svzEa%~2>xF9X:Wd^-;/0+d95J:]Mtx=PqZGrRQ#>33' );

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
