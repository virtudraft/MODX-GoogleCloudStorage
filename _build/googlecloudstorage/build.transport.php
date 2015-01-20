<?php

/**
 * GoogleCloudStorage
 * 
 * Copyright 2015 by goldsky <goldsky@virtudraft.com>
 *
 * A MODX's extra to add Google Cloud Storage <https://cloud.google.com/storage/>
 * into media source, allowing basic manipulation, uploading and URL-retrieval
 * of resources in a specified bucket.
 *
 * GoogleCloudStorage is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation version 3,
 *
 * GoogleCloudStorage is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * GoogleCloudStorage; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package googlecloudstorage
 * @subpackage build
 */

$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

/* define version */
define('PKG_NAME', 'GoogleCloudStorage');
define('PKG_NAME_LOWER', 'googlecloudstorage');

/* override with your own defines here (see build.config.sample.php) */
require_once dirname(__FILE__) . '/build.config.php';
require_once realpath(MODX_CORE_PATH) . '/model/modx/modx.class.php';

/* define sources */
$root = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
$sources = array(
    'root' => $root,
    'build' => BUILD_PATH,
    'resolvers' => realpath(BUILD_PATH . 'resolvers/') . DIRECTORY_SEPARATOR,
    'validators' => realpath(BUILD_PATH . 'validators/') . DIRECTORY_SEPARATOR,
    'data' => realpath(BUILD_PATH . 'data') . DIRECTORY_SEPARATOR,
    'properties' => realpath(BUILD_PATH . 'data/properties/') . DIRECTORY_SEPARATOR,
    'source_core' => realpath(MODX_CORE_PATH . 'components') . DIRECTORY_SEPARATOR . PKG_NAME_LOWER,
    'source_assets' => realpath(MODX_ASSETS_PATH . 'components') . DIRECTORY_SEPARATOR . PKG_NAME_LOWER,
    'docs' => realpath(MODX_CORE_PATH . 'components/' . PKG_NAME_LOWER . '/docs/') . DIRECTORY_SEPARATOR,
    'lexicon' => realpath(MODX_CORE_PATH . 'components/' . PKG_NAME_LOWER . '/lexicon/') . DIRECTORY_SEPARATOR,
);
unset($root);

$modx = new modX();
$modx->initialize('mgr');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');
echo '<pre>';

$googlecloudstorage = $modx->getService('googlecloudstorage', 'GoogleCloudStorage', MODX_CORE_PATH . 'components/googlecloudstorage/model/googlecloudstorage/');

if (!($googlecloudstorage instanceof GoogleCloudStorage))
    return '';
define('PKG_VERSION', GoogleCloudStorage::VERSION);
define('PKG_RELEASE', GoogleCloudStorage::RELEASE);

$modx->loadClass('transport.modPackageBuilder', '', false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAME_LOWER, PKG_VERSION, PKG_RELEASE);
$builder->registerNamespace(PKG_NAME_LOWER, false, true, '{core_path}components/' . PKG_NAME_LOWER . '/');

/**
 * CATEGORY
 */
$category = $modx->newObject('modCategory');
$category->set('id', 1);
$category->set('category', 'GoogleCloudStorage');

/**
 * Apply category to the elements
 */
$elementsAttribute = array(
    xPDOTransport::UNIQUE_KEY => 'category',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
);

$elementsVehicle = $builder->createVehicle($category, $elementsAttribute);

/**
 * RESOLVERS
 */
$modx->log(modX::LOG_LEVEL_INFO, 'Adding in PHP resolvers...');
$elementsVehicle->resolve('php', array(
    'source' => $sources['resolvers'] . 'package.resolver.php',
));
$modx->log(modX::LOG_LEVEL_INFO, 'Adding in PHP resolvers done.');

/**
 * FILE RESOLVERS
 */
$modx->log(modX::LOG_LEVEL_INFO, 'Adding in files...');
$elementsVehicle->resolve('file', array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));
$modx->log(modX::LOG_LEVEL_INFO, 'Adding in files done.');

$builder->putVehicle($elementsVehicle);
unset($elementsVehicle);
$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in Elements done.');
flush();

/**
 * license file, readme and setup options
 */
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
    'changelog' => file_get_contents($sources['docs'] . 'changelog.txt'),
));

$builder->pack();

$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);

$modx->log(modX::LOG_LEVEL_INFO, "\n<br />" . PKG_NAME . " package was built.<br />\nExecution time: {$totalTime}\n");

exit();