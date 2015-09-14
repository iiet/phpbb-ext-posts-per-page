<?php
/**
*
* @package Individual posts per page
* @copyright (c) 2015 Oliver Schramm
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// Displayed in ACP -> Post settings
	'PPP_POSTS_PER_PAGE_MAXIMUM'			=> 'Maksymalna liczba postów na stronie',
	'PPP_POSTS_PER_PAGE_MAXIMUM_EXPLAIN'	=> 'Ustala maksymalną liczbę postów na stronie, którą może ustawić użytkownik. Minimalną dozwoloną wartością jest domyślna ilość wyświetlanych postów, ustawiona w panelu. Jeśli ta wartość jest mniejsza, będzie ignorowana. Jedynym wyjątkiem jest 0, dla którego użytkownik nie może w ogóle wybrać ilości postów.',
	'PPP_TOPIC_POSTS_PER_PAGE_MAXIMUM'		=> 'Maksymalna liczba postów na stronie dla danego tematu',
	'PPP_TOPIC_POSTS_PER_PAGE_MAXIMUM_EXPLAIN' => 'Ustala maksymalną liczbę postów na stronie dla danego tematu, którą może ustawić użytkownik z odpowiednimi uprawnieniami. Minimalną dozwoloną wartością jest domyślna ilość wyświetlanych postów, ustawiona w panelu. Jeśli ta wartość jest mniejsza, będzie ignorowana. Jedynym wyjątkiem jest 0, dla którego użytkownik nie może w ogóle wybrać ilości postów.',
	'PPP_TOPICS_PER_PAGE_MAXIMUM'			=> 'Maksymalna liczba tematów na stronie',
	'PPP_TOPICS_PER_PAGE_MAXIMUM_EXPLAIN'	=> 'Ustala maksymalną liczbę tematów na stronie, którą może ustawić użytkownik. Minimalną dozwoloną wartością jest domyślna ilość wyświetlanych tematów, ustawiona w panelu. Jeśli ta wartość jest mniejsza, będzie ignorowana. Jedynym wyjątkiem jest 0, dla którego użytkownik nie może w ogóle wybrać ilości tematów.',

	// Displayed in posting.php, UCP and ACP -> Manage users
	'PPP_POSTS_PER_PAGE_EXPLAIN'		=> 'To ustawienie może być nadpisane w niektórych tematach przez użytkowników, którzy mogą to zrobić. Ustaw na 0, aby przywrócić domyślną wartość. (aktualnie: %d)',
	'PPP_TOPIC_POSTS_PER_PAGE_EXPLAIN'	=> 'To ustawienie nadpisuje ustawienia użytkownika. Ustaw na 0, aby przywrócić domyślną wartość (aktualnie: %d)',
	'PPP_TOPICS_PER_PAGE_EXPLAIN'		=> 'Ustaw na zero, by używać domyślnych ustawień. (aktualnie: %d)',

	// Validation errors
	'TOO_LARGE_POSTS_PP'	=> 'Liczba <strong>postów na stronie</strong> jest za duża.',
	'TOO_LARGE_TOPICS_PP'	=> 'Liczba <strong>tematów na stronie</strong>  jest za duża.',
	'TOO_SMALL_POSTS_PP'	=> 'Liczba <strong>postów na stronie</strong> jest za mała.',
	'TOO_SMALL_TOPICS_PP'	=> 'Liczba <strong>tematów na stronie</strong> jest za mała.',
));
