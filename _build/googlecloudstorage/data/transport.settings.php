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

$settings['googlecloudstorage.core_path'] = $modx->newObject('modSystemSetting');
$settings['googlecloudstorage.core_path']->fromArray(array(
    'key' => 'googlecloudstorage.core_path',
    'value' => '{core_path}components/googlecloudstorage/',
    'xtype' => 'textfield',
    'namespace' => 'googlecloudstorage',
    'area' => 'URL',
        ), '', true, true);

$settings['googlecloudstorage.assets_url'] = $modx->newObject('modSystemSetting');
$settings['googlecloudstorage.assets_url']->fromArray(array(
    'key' => 'googlecloudstorage.assets_url',
    'value' => '{assets_url}components/googlecloudstorage/',
    'xtype' => 'textfield',
    'namespace' => 'googlecloudstorage',
    'area' => 'URL',
        ), '', true, true);

return $settings;