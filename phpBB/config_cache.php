<?php

// phpBB cache file - DO NOT change anything in here by hand!

$config = array(
	'board_disable' => 0,
	'board_disable_msg' => "",
	'sitename' => "2.2 @ 51",
	'site_desc' => "The phpBB 2.2 test board",
	'cookie_name' => "phpbb22",
	'cookie_path' => "/",
	'cookie_domain' => "",
	'cookie_secure' => 0,
	'session_length' => 3600,
	'allow_html' => 0,
	'allow_html_tags' => "b,i,u,pre",
	'allow_bbcode' => 1,
	'allow_smilies' => 1,
	'allow_sig' => 1,
	'allow_namechange' => 0,
	'allow_topic_notify' => 1,
	'allow_forum_notify' => 1,
	'allow_avatar_local' => 0,
	'allow_avatar_remote' => 0,
	'allow_avatar_upload' => 0,
	'default_lang' => "en",
	'default_style' => 1,
	'default_dateformat' => "D M d, Y g:i a",
	'board_timezone' => 0,
	'override_user_style' => 0,
	'posts_per_page' => 15,
	'topics_per_page' => 30,
	'hot_threshold' => 25,
	'max_post_chars' => 9999,
	'max_post_smilies' => 15,
	'max_sig_chars' => 255,
	'max_poll_options' => 5,
	'min_search_chars' => 3,
	'max_search_chars' => 10,
	'pm_max_boxes' => 4,
	'pm_max_msgs' => 50,
	'board_email_sig' => "Thanks, The Management",
	'board_email' => "youraddress@yourdomain.com",
	'smtp_delivery' => 0,
	'smtp_host' => "",
	'smtp_username' => "",
	'smtp_password' => "",
	'auth_method' => "db",
	'require_activation' => 3,
	'flood_interval' => 15,
	'search_interval' => 0,
	'board_email_form' => 0,
	'avatar_filesize' => 6144,
	'avatar_max_width' => 90,
	'avatar_max_height' => 90,
	'avatar_path' => "images/avatars/upload",
	'avatar_gallery_path' => "images/avatars/gallery",
	'smilies_path' => "images/smiles",
	'icons_path' => "images/icons",
	'prune_enable' => 0,
	'email_enable' => 1,
	'privmsg_disable' => 1,
	'gzip_compress' => 1,
	'coppa_enable' => 1,
	'coppa_fax' => "",
	'coppa_mail' => "",
	'server_name' => "area51.phpbb.com",
	'server_port' => 80,
	'script_path' => "phpBB22",
	'limit_load' => 2.0,
	'active_sessions' => 0,
	'session_gc' => 3600,
	'ldap_server' => "",
	'ldap_base_dn' => "",
	'ldap_uid' => "",
	'version' => "2.1.1 [20021119]",
	'ip_check' => 2,
	'search_gc' => 7200,
	'edit_time' => 15,
	'lastread' => 432000,
);

$acl_options = array(
	'local' => array(
		'f_' => 0,
		'f_announce' => 1,
		'f_attach' => 2,
		'f_bbcode' => 3,
		'f_delete' => 4,
		'f_download' => 5,
		'f_edit' => 6,
		'f_email' => 7,
		'f_flash' => 8,
		'f_html' => 9,
		'f_ignoreflood' => 10,
		'f_ignorequeue' => 11,
		'f_img' => 12,
		'f_list' => 13,
		'f_poll' => 14,
		'f_post' => 15,
		'f_print' => 16,
		'f_quote' => 17,
		'f_rate' => 18,
		'f_read' => 19,
		'f_reply' => 20,
		'f_search' => 21,
		'f_sigs' => 22,
		'f_smilies' => 23,
		'f_sticky' => 24,
		'f_vote' => 25,
		'm_' => 26,
		'm_approve' => 27,
		'm_auth' => 28,
		'm_delete' => 29,
		'm_edit' => 30,
		'm_lock' => 31,
		'm_merge' => 32,
		'm_move' => 33,
		'm_split' => 34,
		'm_unrate' => 35,
	),
	'global' => array(
		'a_' => 0,
		'a_attach' => 1,
		'a_auth' => 2,
		'a_authadmins' => 3,
		'a_authmods' => 4,
		'a_backup' => 5,
		'a_ban' => 6,
		'a_bbcode' => 7,
		'a_board' => 8,
		'a_clearlogs' => 9,
		'a_cookies' => 10,
		'a_defaults' => 11,
		'a_email' => 12,
		'a_events' => 13,
		'a_forum' => 14,
		'a_forumadd' => 15,
		'a_forumdel' => 16,
		'a_group' => 17,
		'a_groupadd' => 18,
		'a_groupdel' => 19,
		'a_icons' => 20,
		'a_names' => 21,
		'a_prune' => 22,
		'a_ranks' => 23,
		'a_restore' => 24,
		'a_search' => 25,
		'a_server' => 26,
		'a_styles' => 27,
		'a_user' => 28,
		'a_useradd' => 29,
		'a_userdel' => 30,
		'a_words' => 31,
		'u_' => 32,
		'u_avatar' => 33,
		'u_email' => 34,
		'u_pm' => 35,
		'm_' => 36,
		'm_approve' => 37,
		'm_auth' => 38,
		'm_delete' => 39,
		'm_edit' => 40,
		'm_lock' => 41,
		'm_merge' => 42,
		'm_move' => 43,
		'm_split' => 44,
		'm_unrate' => 45,
	),
);

?>
