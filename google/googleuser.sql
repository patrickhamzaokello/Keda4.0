CREATE TABLE `goousers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `oauth_provider` enum('google','facebook','twitter','linkedin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'google',
 `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
 `locale` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
 `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;