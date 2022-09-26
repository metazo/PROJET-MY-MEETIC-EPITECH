CREATE DATABASE meetic;

USE meetic;

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailv` timestamp NULL DEFAULT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




INSERT INTO `users` (`id`, `name`, `mail`, `mdp`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 'Lukas', 'lukas.bouhlel@gmail.com', NULL, '$2y$10$56zpM9LB9BtHd251WoQ8QuF6LOj.ubabsw7uYZo4rXv3PUUUFVLv6', NULL, '2020-04-23 14:25:52', '2020-04-23 14:25:52'),
(16, 'Toto', 'toto@gmail.com', NULL, '$2y$10$IgAFQzUveUspUVF3VPQVzeD56NgHQBOLBkqpNGw85BEfJPzp0.4IS', NULL, '2020-04-24 12:13:05', '2020-04-24 12:13:05');



ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`mail`);



ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;
