# СТРУКТУРА БД


```
CREATE TABLE `urls` (
  `id` bigint UNSIGNED NOT NULL,
  `long_url` varchar(200) NOT NULL,
  `short_url` varchar(200) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

ALTER TABLE `urls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
```
