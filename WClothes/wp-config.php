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
define( 'DB_NAME', 'data_clothes' );

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
define( 'AUTH_KEY',         '_Eg]y|xHr=<0pq>;/iE>Y9&_#`0!e_xneJ<b6zzj>lCH-.-N}iMz+R~F9EE&(yd)' );
define( 'SECURE_AUTH_KEY',  'IaVj`)0leX,Gj}_&:}XHHfwk1k@<T$0a>e^O$,904i&`d<Sn!W#;*w^ksriWFzQl' );
define( 'LOGGED_IN_KEY',    '+/+goR;;X><oNIib;mL;]aR7#Es4to.BY_-N-T@nnO x<n(jooD%y<Qkz:LA$[me' );
define( 'NONCE_KEY',        'g9fdg 2`t^fpY]i%oaRMoLWI83XNtZJAf&.ii4}}XovaV`Uh;W+44gD.H{Vd^pmr' );
define( 'AUTH_SALT',        'cU]uR1r/.2yky}$&.^4/*j0{u^!dCMYo]J&*p!1kGY%N#(Kn]?xsn~OJ62{E &,r' );
define( 'SECURE_AUTH_SALT', '|`vH:v 06cn%wEvXL*#mZ_{F}jK(uARxAWsF@mptzgZD)3l#5llr6Gls&nRYtX]b' );
define( 'LOGGED_IN_SALT',   '#iil-$ V8dn>EMeh*V8TEOVMk%`yN!g#Hh_f8]~p{o<D9HAdG %YQ}5LsA>%::X*' );
define( 'NONCE_SALT',       'dqLyIie9+;Y3_d*!TDEV<y.;P^(+.L/dye*EbC?t&Mn~<GnnC3T<UryuP4!,7n!n' );

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
