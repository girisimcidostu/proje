<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'kavakharfiyat' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j%kn^rr&V]{,r{>r<5pf.-OIUKeJ/I2G)%8b]BbSz$66bas@)MjSO!ebyy;wN?C=' );
define( 'SECURE_AUTH_KEY',  'TU_WaqUUvot)#pW+j8^/.^w@-8&&q{&~R(Ffq=d,,|<N;lCHBM0%=+cw+DpTu=$-' );
define( 'LOGGED_IN_KEY',    'Db67HdO[hI,Oh.pgeF6rFNuhm!Dzr]dQwfsIXf6N,~i*`Aw`BX{p1!QwYCf4[sQ ' );
define( 'NONCE_KEY',        'LA)3dt!FK9bh4 |l7mwTF4&>iAn:SsDVh0!Wcl9kM?`xy;DjCN$eYWq_<?lm$}Q*' );
define( 'AUTH_SALT',        'pI^}(u{0>8m*Dqd2VV1q][W;iCzYF#a;4F>y)pR@4EJe=M4Me13(7>;u~BE@mO+F' );
define( 'SECURE_AUTH_SALT', 'OJ4}:,_(0z2guEn)#MW}Bnso(CF 3%n~ZevkGVMt^l qp-|mavL>.PKet%p>I_{f' );
define( 'LOGGED_IN_SALT',   'WFM%i>aoD9&`:L>,<eHqU&a;]p0<Ss{*%ZFL`Xk%dU8f*b_~8xuYrv&<{#$LTjaP' );
define( 'NONCE_SALT',       '5(SX_m9<sC%L(r&Ml%JqXq/udzA|GQ2??LQ;rPv}u)fV[Y$H=i6qT-VCww:6ZwZC' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
