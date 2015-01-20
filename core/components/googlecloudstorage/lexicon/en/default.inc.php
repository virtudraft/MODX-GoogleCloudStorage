<?php

/* google cloud source type */
$_lang['source_type.gcs'] = 'Google Cloud Storage';
$_lang['source_type.gcs_desc'] = 'Navigates a Google Cloud Storage bucket.';
$_lang['prop_gcs.app_name'] = 'Application Name';
$_lang['prop_gcs.app_name_desc'] = 'Set the application name, this is included in the User-Agent HTTP header.';
$_lang['prop_gcs.email_address_desc'] = 'Set the OAuth 2.0 Email Address.';
$_lang['prop_gcs.private_key_file_desc'] = 'The absolute path of private key file (for "Service account", a *.p12 file format). {core_path}, {assets_path}, or {base_path} can be used. @see <a href="https://cloud.google.com/storage/docs/authentication#generating-a-private-key" target="_blank">Generating a private key</a>.';
$_lang['prop_gcs.client_id_desc'] = 'Set the OAuth 2.0 Client ID.';
$_lang['prop_gcs.client_secret_desc'] = 'Set the OAuth 2.0 Client Secret.';
$_lang['prop_gcs.api_key_desc'] = 'Set the developer key to use, these are obtained through the API Console. @see <a href="https://developers.google.com/console/help/?csw=1#generatingdevkeys" target="_blank">https://developers.google.com/console/help/?csw=1#generatingdevkeys</a>';
$_lang['prop_gcs.redirect_uri_desc'] = 'Set the OAuth 2.0 Redirect URI.';
$_lang['prop_gcs.default_project_id_desc'] = 'The ID of the project in which you created the client ID';
$_lang['prop_gcs.default_bucket_name_desc'] = 'The name of a bucket in the same project as client ID you created.';
$_lang['prop_gcs.default_object_name_desc'] = 'An object in the bucket your specified above. The code will not run properly if you don\'t identify an object that exists. If you need to, you can upload an object by following the steps in <a href="https://cloud.google.com/storage/docs/gettingstarted-console" target="_blank">Getting Started Using the Developers Console</a>.';
$_lang['prop_gcs.scopes_desc'] = 'Set the scopes to be requested (comma separated values). OAuth tokens use scopes to determine the level of access to your data. @see <a href="https://cloud.google.com/storage/docs/authentication" target="_blank">https://cloud.google.com/storage/docs/authentication</a>';
$_lang['prop_gcs.url_desc'] = 'The URL of the Google Cloud Storage instance. @see <a href="https://cloud.google.com/storage/docs/reference-uris" target="_blank">https://cloud.google.com/storage/docs/reference-uris</a>';
$_lang['gcs_no_move_folder'] = 'The Google Cloud Storage driver does not support moving of folders at this time.';


$_lang['prop_gcs.imageExtensions_desc'] = 'A comma-separated list of file extensions to use as images. MODX will attempt to make thumbnails of files with these extensions.';
$_lang['prop_gcs.skipFiles_desc'] = 'A comma-separated list. MODX will skip over and hide files and folders that match any of these.';
$_lang['prop_gcs.thumbnailQuality_desc'] = 'The quality of the rendered thumbnails, in a scale from 0-100.';
$_lang['prop_gcs.thumbnailType_desc'] = 'The image type to render thumbnails as.';