<?php

if (!defined('UPDRAFTCENTRAL_CLIENT_DIR')) die('Security check');

// Translations for UpdraftCentral
return array(
	'updraftcentral_connection' => __('UpdraftCentral Connection', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_connection_successful' => __('An UpdraftCentral connection has been made successfully.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_connection_failed' => __('A new UpdraftCentral connection has not been made.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'unknown_key' => __('The key referred to was unknown.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'not_logged_in' => __('You are not logged into this WordPress site in your web browser.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'must_visit_url' => __('You must visit this URL in the same browser and login session as you created the key in.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'security_check' => __('Security check.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'must_visit_link' => __('You must visit this link in the same browser and login session as you created the key in.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'connection_already_made' => __('This connection appears to already have been made.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'close' => __('Close', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'nothing_yet_logged' => __('(Nothing yet logged)', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'invalid_url' => __('An invalid URL was entered', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_key_created' => __('UpdraftCentral key created successfully', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'need_to_copy_key' => __('You now need to copy the key below and enter it at your %s.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'press_add_site_button' => __('At your UpdraftCentral dashboard you should press the "Add Site" button then paste the key in the input box.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'detailed_instructions' => __('Detailed instructions for this can be found at %s', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'control_this_site' => __('You can now control this site via your UpdraftCentral dashboard at %s.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'attempt_to_register_failed' => __('A key was created, but the attempt to register it with %1$s was unsuccessful.', UPDRAFTCENTRAL_TEXT_DOMAIN).' '.__('You can try again, or try using the alternative connection method if the problem persists.', UPDRAFTCENTRAL_TEXT_DOMAIN).' '.__('For more information visit %2$s', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'key_created_successfully' => __('Key created successfully.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'copy_paste_key' => __('You must copy and paste this key now - it cannot be shown again.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'no_updraftcentral_dashboards' => __('There are no UpdraftCentral dashboards that can currently control this site.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'unknown' => __('Unknown', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'access_as_user' => __('Access this site as user:', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'public_key_sent' => __('Public key was sent to:', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'created' => __('Created:', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'key_size' => __('Key size: %d bits', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'delete' => __('Delete...', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'manage_keys' => __('Manage existing keys (%d)...', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'key_description' => __('Key description', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'details' => __('Details', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'connect_to_updraftcentral_dashboard' => __('Connect this site to an UpdraftCentral dashboard found at...', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'in_example' => __('i.e. if you have %s there', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'an_account' => __('an account', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'self_hosted_dashboard' => __('Self-hosted dashboard', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'website_installed' => __('A website where you have installed %s', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'enter_url' => __('Enter the URL where your self-hosted install of UpdraftCentral is located:', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_dashboard_url' => __('URL for the site of your UpdraftCentral dashboard', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'next' => __('Next', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_connection_details' => __('UpdraftCentral dashboard connection details', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'description' => __('Description', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'enter_description' => __('Enter any description', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'encryption_key_size' => __('Encryption key size:', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'bits' => __('%s bits', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'bytes' => __('%s bytes', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'easy_to_break' => __('easy to break, fastest', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'faster' => __('faster (possibility for slow PHP installs)', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'recommended' => __('recommended', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'slower' => __('slower, strongest', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'use_alternative_method' => __('Use the alternative method for making a connection with the dashboard.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'more_information' => __('More information...', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'this_is_useful' => __('This is useful if the dashboard webserver cannot be contacted with incoming traffic by this website (for example, this is the case if this website is hosted on the public Internet, but the UpdraftCentral dashboard is on localhost, or on an Intranet, or if this website has an outgoing firewall), or if the dashboard website does not have a SSL certificate.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'create' => __('Create', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'back' => __('Back...', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'view_log_events' => __('View recent UpdraftCentral log events', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_remote_control' => __('UpdraftCentral (Remote Control)', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_description' => __('UpdraftCentral enables control of your WordPress sites %s from a central dashboard.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'including_description' => array(
		'wp_optimize_desc' => __('(including management of WP-Optimize)', UPDRAFTCENTRAL_TEXT_DOMAIN),
		'updraftplus_desc' => __('(including management of backups and updates)', UPDRAFTCENTRAL_TEXT_DOMAIN),
	),
	'read_more' => __('Read more about it here.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'create_another_key' => __('Create another key', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'unable_to_connect' => __('Unable to connect to the filesystem', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'unable_to_activate' => __('Unable to activate %s successfully.', UPDRAFTCENTRAL_TEXT_DOMAIN).' '.__('Make sure that this %s is compatible with your remote WordPress version.', UPDRAFTCENTRAL_TEXT_DOMAIN).' '.__('WordPress version currently installed in your remote website is %s.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'unable_to_install' => __('Unable to install %s.', UPDRAFTCENTRAL_TEXT_DOMAIN).' '.__('Make sure you upload the correct file and that the zip file is a valid %s file (not corrupted) and try uploading the file again.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'failed_to_attach_media' => __('Failed to attach media.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'media_attached' => __('Media has been attached to post.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'failed_to_detach_media' => __('Failed to detach media.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'media_detached' => __('Media has been detached from post.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'failed_to_delete_media' => __('Failed to delete selected media.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'selected_media_deleted' => __('Selected media has been deleted successfully.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'unattached' => __('Unattached', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'default_template' => __('Default template', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'parameters_missing' => __('Expected parameter(s) missing.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'fetching' => __('Fetching...', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'deleting' => __('Deleting...', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'enter_mothership_url' => __('Please enter a valid URL', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'creating_please_allow' => __('Creating...', UPDRAFTCENTRAL_TEXT_DOMAIN).(function_exists('openssl_encrypt') ? '' : ' ('.__('your PHP install lacks the openssl module; as a result, this can take minutes; if nothing has happened by then, then you should either try a smaller key size, or ask your web hosting company how to enable this PHP module on your setup.', UPDRAFTCENTRAL_TEXT_DOMAIN).')'),
	'unexpectedresponse' => __('Unexpected response:', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_wizard_empty_url' => __('Please enter the URL where your UpdraftCentral dashboard is hosted.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'updraftcentral_wizard_invalid_url' => __('Please enter a valid URL e.g http://example.com', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'insufficient_privilege' => __('Sorry, you do not have enough privilege to execute the requested action.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'copy_to_clipboard' => __('Copy to clipboard', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'key_copied' => __('The key was copied to the clipboard.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'unable_to_copy' => __('The attempt to copy to the clipboard failed.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'wpo_not_active' => __('WP_Optimize is not installed or active.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'log_file_not_exist' => __('Log file does not exist or could not be read.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'security_check_failed' => __('Security check failed; try refreshing the page.', UPDRAFTCENTRAL_TEXT_DOMAIN).' '.__('If refreshing the page does not help then perhaps you do not have sufficient privilege to manage WP-Optimize.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'no_such_command' => __('No such command found.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'command_not_allowed' => __('You are not allowed to run this command.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'command_not_found' => __('The command is either not found or not allowed.', UPDRAFTCENTRAL_TEXT_DOMAIN),
	'network_admin_only' => __('The command can only be executed by a network admin.', UPDRAFTCENTRAL_TEXT_DOMAIN),
);
