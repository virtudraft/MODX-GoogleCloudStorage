<?php

/* google cloud source type */
$_lang['gcs.source_type'] = 'Google Cloud Storage';
$_lang['gcs.source_type_desc'] = 'Navigates a Google Cloud Storage bucket.';
$_lang['gcs.no_move_folder'] = 'The Google Cloud Storage driver does not support moving of folders at this time.';

$_lang['gcs.app_name'] = 'Application Name';
$_lang['prop_gcs.app_name_desc'] = 'Set the application name, this is included in the User-Agent HTTP header.';
$_lang['gcs.client_id'] = 'Client ID.';
$_lang['prop_gcs.client_id_desc'] = 'Set the OAuth 2.0 Client ID.';
$_lang['gcs.email_address_desc'] = 'Email Address.';
$_lang['prop_gcs.email_address_desc'] = 'Set the OAuth 2.0 Email Address.';
$_lang['gcs.private_key_file'] = 'Private Key File';
$_lang['prop_gcs.private_key_file_desc'] = 'The absolute path of private key file (for "Service account", a *.p12 file format). {core_path}, {assets_path}, or {base_path} can be used. @see <a href="https://cloud.google.com/storage/docs/authentication#generating-a-private-key" target="_blank">Generating a private key</a>.';
$_lang['gcs.default_bucket_name'] = 'Default Bucket';
$_lang['prop_gcs.default_bucket_name_desc'] = 'The name of a bucket in the same project as client ID you created.';
$_lang['gcs.default_scopes'] = 'Default Scopes';
$_lang['prop_gcs.default_scopes_desc'] = 'Set the default scopes to be requested (comma separated values). OAuth tokens use scopes to determine the level of access to your data. @see <a href="https://cloud.google.com/storage/docs/authentication" target="_blank">https://cloud.google.com/storage/docs/authentication</a>';

$_lang['prop_gcs.imageExtensions_desc'] = 'A comma-separated list of file extensions to use as images. MODX will attempt to make thumbnails of files with these extensions.';
$_lang['prop_gcs.skipFiles_desc'] = 'A comma-separated list. MODX will skip over and hide files and folders that match any of these.';
$_lang['prop_gcs.thumbnailQuality_desc'] = 'The quality of the rendered thumbnails, in a scale from 0-100.';
$_lang['prop_gcs.thumbnailType_desc'] = 'The image type to render thumbnails as.';