<?php
/*
Plugin Name: SyntaxHighlighter Evolved: Autohotkey Brush
Description: Adds support for the Autohotkey language to the SyntaxHighlighter Evolved plugin.
Author: Jon Bullen
Version: 1.0
Author URI: http://sytone.com/
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_autohotkey_regscript' );

// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_autohotkey_addlang' );

// Register the brush file with WordPress
function syntaxhighlighter_autohotkey_regscript() {
	wp_register_script( 'syntaxhighlighter-brush-autohotkey', plugins_url( 'shBrushAhk.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3' );
}

// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_autohotkey_addlang( $brushes ) {
	$brushes['autohotkey'] = 'autohotkey';
	$brushes['ahk'] = 'autohotkey';
	return $brushes;
}
?>
