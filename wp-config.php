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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'maricadb2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'maricaus');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'EJ46r*/Kl(r');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql472.umbler.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '=vvAv)6q73+rHsk@l&G+^{$](Du+<ZxulVlFZsXH*&.tc/gDcW#2jl:Cq=&)r!xe');
define('SECURE_AUTH_KEY',  'L8q__{ADCo>|>k:qXQ4H{97lH?Ra;?PDqrtQ@9px@m{-GlDJXe;d}pN|7F8L!7z$');
define('LOGGED_IN_KEY',    'yf#q*b0vY1MXY<TRvojRKMJc8mene!@h?;{St7|iw$h.MdJE7=y=yOZUsNgJ6Hge');
define('NONCE_KEY',        't?{z}}llOIC)P|ZYt&4%rkAySp]{M|L);PpO36^k,V(Y!Hap3RI3vL+ix<l~n~u;');
define('AUTH_SALT',        'P:JL=ja,iQF5dZ]SVE| *}K)SZaS)K4t-A86zI|v,q{HKTi9>UO1.3g$j1Lk@@I=');
define('SECURE_AUTH_SALT', 'Ht&hzD]2r1Y#=vJ=Q=^pdH?(7|)CIClk98 O4K54^Hg[G[gmhob(w-9WxD`xQsAt');
define('LOGGED_IN_SALT',   '$)JluD.omm(3Of06fREy]xiP#2sge>iIF1*)2=-1tRJjyo}gX^@T`*D@]WP ._Dy');
define('NONCE_SALT',       'Am7q>6.[DTl: (5Ex[ROM1T{oGXY~XeBX-8#]o~cB[oXW!Kj>lcc7dAb^}bU;HTF');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'dterra_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

define('WPLANG', 'pt_BR');
define('WP_LANG_DIR', $_SERVER['DOCUMENT_ROOT'].'wordpress/languages');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
