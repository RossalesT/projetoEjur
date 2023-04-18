<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'dbprojeto' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5.TC4|~=?G_S|B`_Gj;Muz=Q:Wa1<zOn U-__xWXUeA2GOd&K4X8=Z q| AL>b*^' );
define( 'SECURE_AUTH_KEY',  ']G1(0Sp40!y2*~mn=U?AV>GRXw#Xk$H~v4*MG6z,)C)neu_>yE!z $Mu_:O& %7H' );
define( 'LOGGED_IN_KEY',    'ercvJo3#^<k6lIR)[mJXy[YC5U?xzKx)q)g,=lNOH=$-L n6iV.f(Y%^K^KtOnH}' );
define( 'NONCE_KEY',        'Kby,yFZcPj?q5L&F49W!4+,H>/S=N[_?_S^<}#RbN2;o!,[@Zej$La`]UZmp5A1-' );
define( 'AUTH_SALT',        ';=;Jf`TA~42&TT.95b;1fYf)/diZY2]J9K}a{vm7`,:vw,T9=vrlMKPrN[6Jt$Y5' );
define( 'SECURE_AUTH_SALT', 'k!{l?EYfILJ:AqSlJA|Xr $m.:h4kFks$>sD[&;u3ulb2CH}XrL);imm$<aH8C5u' );
define( 'LOGGED_IN_SALT',   'TRy)TCAB0vas)eNj03si{#z38BP.m?*_@3ri:c@W/NSGVGV6qs9,^#lv0h_]fY(X' );
define( 'NONCE_SALT',       'mbn@8i//X^t}z+Q.Y0dV18YU=I6N9An?&]k![J<s!hP~2b^pgVrLW0w4XYvtJg::' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_ejur';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
