<?php
/**
 * Wolfplex Messages
 *
 * @file
 * @ingroup Extensions
 */

if (!defined('MEDIAWIKI')) die();

$wgExtensionCredits['other'][] = array(
    'path'           => __FILE__,
    'name'           => 'WolfplexMessages',
    'author'         => 'Sébastien Santoro aka Dereckson',
    'descriptionmsg' => 'wolfplexmessages-desc',
);

$dir = __DIR__ . '/';
$wgExtensionMessagesFiles['WolfplexMessages'] = $dir . 'WolfplexMessages.i18n.php';
