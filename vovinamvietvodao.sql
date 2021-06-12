

INSERT INTO `arbitres` (`id`, `name`, `lastName`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'a', 'aa', 'a]', '2021-06-11 16:53:46', '2021-06-11 16:53:46');

-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `presidentname`, `presidentlastname`, `presidentphone`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 's', 'ss', 's', 'ss', 's', 's', '2021-06-11 16:53:58', '2021-06-11 16:53:58');


INSERT INTO `controllers` (`id`, `code`, `created_at`, `updated_at`) VALUES
(1, 'red', '2021-06-11 16:54:11', '2021-06-11 16:54:11'),
(2, 'bleu', '2021-06-11 16:54:18', '2021-06-11 16:54:18');

-- --------------------------------------------------------


--
-- Dumping data for table `entraineurs`
--

INSERT INTO `entraineurs` (`id`, `name`, `lastName`, `phone`, `club_id`, `created_at`, `updated_at`) VALUES
(1, 'red', 'a', 'a', 1, '2021-06-11 16:55:16', '2021-06-11 16:55:16'),
(2, 'bleu', 'a', 'a', 1, '2021-06-11 16:55:30', '2021-06-11 16:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`

-- --------------------------------------------------------

--
-- Table structure for table `joueurs`
--

--
-- Dumping data for table `joueurs`
--

INSERT INTO `joueurs` (`id`, `name`, `lastName`, `phone`, `birthdate`, `poid`, `club_id`, `technique`, `created_at`, `updated_at`) VALUES
(1, 'bleu', 'a', 'a', '2021-06-10', '65', 1, '[{\"value\": \"a\"}]', '2021-06-11 16:55:52', '2021-06-11 16:55:52'),
(2, 'red', 'a', 'aa', '2021-06-23', 's', 1, '[{\"value\": \"c\"}]', '2021-06-11 16:56:09', '2021-06-11 16:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `joueur_technic`
--


-- --------------------------------------------------------

--
-- Table structure for table `juges`
--

--
-- Dumping data for table `juges`
--

INSERT INTO `juges` (`id`, `name`, `lastName`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'bleu', 'a', 'a', '2021-06-11 16:54:33', '2021-06-11 16:54:33'),
(2, 'red', 'a', 'a', '2021-06-11 16:54:46', '2021-06-11 16:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--


--
-- Dumping data for table `migrations`
--


-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--


-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--


-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--


-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

-- --------------------------------------------------------

--
-- Table structure for table `salles`
--

--
-- Dumping data for table `salles`
--

INSERT INTO `salles` (`id`, `address`, `name`, `created_at`, `updated_at`) VALUES
(1, 'koko', 'a', '2021-06-11 16:55:00', '2021-06-11 16:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `technics`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anis', 'a@a.a', NULL, '$2y$10$Qa6ua3PfImefnGokmXphMugA.AbWbNlyPZ80zr2wWXqShJzohF/.W', NULL, '2021-06-11 16:53:28', '2021-06-11 16:53:28');

ALTER TABLE combats ADD FOREIGN KEY (joueur_red_id) REFERENCES joueurs(id); 
ALTER TABLE combats ADD FOREIGN KEY (entraineur_red_id) REFERENCES entraineurs(id);
ALTER TABLE combats ADD FOREIGN KEY (juge_red_id) REFERENCES juges(id); 
ALTER TABLE combats ADD FOREIGN KEY (controller_red_id) REFERENCES controllers(id);

ALTER TABLE combats ADD FOREIGN KEY (joueur_bleu_id) REFERENCES joueurs(id); 
ALTER TABLE combats ADD FOREIGN KEY (entraineur_bleu_id) REFERENCES entraineurs(id);
ALTER TABLE combats ADD FOREIGN KEY (juge_bleu_id) REFERENCES juges(id); 
ALTER TABLE combats ADD FOREIGN KEY (controller_bleu_id) REFERENCES controllers(id);

ALTER TABLE combat_historics ADD FOREIGN KEY (joueur_red_id) REFERENCES joueurs(id); 
ALTER TABLE combat_historics ADD FOREIGN KEY (entraineur_red_id) REFERENCES entraineurs(id);
ALTER TABLE combat_historics ADD FOREIGN KEY (juge_red_id) REFERENCES juges(id); 
ALTER TABLE combat_historics ADD FOREIGN KEY (controller_red_id) REFERENCES controllers(id);

ALTER TABLE combat_historics ADD FOREIGN KEY (joueur_bleu_id) REFERENCES joueurs(id); 
ALTER TABLE combat_historics ADD FOREIGN KEY (entraineur_bleu_id) REFERENCES entraineurs(id);
ALTER TABLE combat_historics ADD FOREIGN KEY (juge_bleu_id) REFERENCES juges(id); 
ALTER TABLE combat_historics ADD FOREIGN KEY (controller_bleu_id) REFERENCES controllers(id);