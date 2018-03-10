<?php
class Scratch3BlocksHooks {
	// Ouput HTML for <scratch3blocks> tag
	
	public static function sb3ParserInit (Parser $parser) {
		// Register <scratch3blocks> and <sb3> tag
		$parser->setHook('scratch3blocks', array( "Scratch3BlocksHooks", 'sbRenderTag') );
		$parser->setHook('sb3', array( "Scratch3BlocksHooks", 'sbRenderInlineTag') );
		//throw new Exception(var_dump($parser));
		return true;
	}
	
	public static function sb3Setup() {
		global $wgOut;
		$wgOut->addModules('ext.scratch3Blocks');
	}

	// Output HTML for <scratch3blocks> tag
	public static function sbRenderTag ($input, array $args, Parser $parser, PPFrame $frame) {
		return '<pre class="blocks">' . htmlspecialchars($input) . '</pre>';
	}

	// Output HTML for inline <sb3> tag
	public static function sbRenderInlineTag ($input, array $args, Parser $parser, PPFrame $frame) {
		return '<code class="blocks">' . htmlspecialchars($input) . '</code>';
	}
}
?>
