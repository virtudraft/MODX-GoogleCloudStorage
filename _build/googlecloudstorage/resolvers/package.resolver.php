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
 * Resolve creating db tables
 *
 * @package googlecloudstorage
 * @subpackage build
 */
if ($modx = & $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modx->addExtensionPackage('googlecloudstorage', '[[++core_path]]components/googlecloudstorage/model/');
            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
        case xPDOTransport::ACTION_UNINSTALL:
            $modx->removeExtensionPackage('googlecloudstorage');
            break;
    }
}

return true;
