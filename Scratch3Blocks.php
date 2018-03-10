<?php
/*
 * ScratchBlocks extension for MediaWiki
 * Renders <scratchblocks> tags to shiny scratch blocks
 *
 * Copyright 2013, Tim Radvan
 * Copyright 2018, Apple502j
 * MIT Licensed
 * http://opensource.org/licenses/MIT
 *
 * Includes s3blocks
 * https://github.com/s3blocks/s3blocks
 *
 */


if (!defined('MEDIAWIKI')) {
    die();
}

require_once __DIR__ . "/Scratch3BlocksHooks.php";

// Hooks

$wgExtensionFunctions[] = 'Scratch3BlocksHooks::sb3Setup';
$wgHooks['ParserFirstCallInit'][] = 'Scratch3BlocksHooks::sb3ParserInit';


// Define resources

$wgResourceModules['ext.scratch3Blocks'] = array(
    'scripts' => array(
        's3blocks/src/scratchblocks.js',
        's3blocks/src/translations.js',
        'run_s3blocks.js',
    ),

    'styles' => '/inline.css',

    // jQuery is loaded anyway
    'dependencies' => array(),

    // Where the files are
    'localBasePath' => __DIR__,
    'remoteExtPath' => 'ScratchBlocks'
);

$wgExtensionCredits['parserhook'][] = array(
    'name' => "Scratch3blocks",           // Name of extension - string
    'description' => "This plugin can add Scratch 3.0's block in the wiki.",
    'version' => 1.0,
    'author' => ["ErnieParke","blob8108","tjvr","NitroCipher","apple502j"],
    'url' => "https://github.com/apple502j/sb3-wiki",
    'license-name' => "MIT",
);
