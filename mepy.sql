/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : mepy

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 31/10/2021 10:03:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `thumb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES (1, 1, 'Mepy.ENT', 'The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'image-1.jpg', 1, NULL, NULL);
INSERT INTO `articles` VALUES (2, 2, 'Mepy Record', 'The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'image-1.jpg', 1, NULL, NULL);
INSERT INTO `articles` VALUES (3, 3, 'Mepy Creativa', 'The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'image-1.jpg', 1, NULL, NULL);
INSERT INTO `articles` VALUES (4, 4, 'Mepy Talent Management', 'The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'image-1.jpg', 1, NULL, NULL);
INSERT INTO `articles` VALUES (5, 5, 'Entertainment', 'The standard Lorem Ipsum passage, used since the 1500s \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'image-1.jpg', 1, NULL, NULL);

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'About Profile', 'about-profile', '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `categories` VALUES (2, 'Record', 'record', '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `categories` VALUES (3, 'Creativa', 'creativa', '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `categories` VALUES (4, 'Talent Managament', 'talent-managament', '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `categories` VALUES (5, 'Entertainment', 'entertainment', '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `categories` VALUES (6, 'test', 'test', '2021-10-31 02:38:06', '2021-10-31 02:38:06');

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `clients_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES (1, 'Media Promosi Indonesia', 'media promo.png', 1, NULL, NULL);
INSERT INTO `clients` VALUES (2, 'Lazada', 'lazada.png', 1, NULL, NULL);
INSERT INTO `clients` VALUES (3, 'Bank BCA', 'bca.png', 1, NULL, NULL);
INSERT INTO `clients` VALUES (4, 'Ruang Guru', 'ruang guru.png', 1, NULL, NULL);
INSERT INTO `clients` VALUES (5, 'Zalora', 'zalora.png', 1, NULL, NULL);

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, 'mujahid munir1', 'superadmin@gmail.com', '11', '111', '2021-10-31 03:00:43', '2021-10-31 03:00:43');
INSERT INTO `contacts` VALUES (2, 'mujahid munir1', 'bayurachmawanrahmat@gmail.com', '11', '11', '2021-10-31 03:01:39', '2021-10-31 03:01:39');
INSERT INTO `contacts` VALUES (3, 'mujahid munir', 'mujahidmunir15@gmail.com', '11', 'sadsadsa', '2021-10-31 03:02:33', '2021-10-31 03:02:33');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `srticle_id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galleries
-- ----------------------------
INSERT INTO `galleries` VALUES (1, 4, '-', '-', 'image-1.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (2, 4, '-', '-', 'image-2.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (3, 4, '-', '-', 'image-3.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (4, 4, '-', '-', 'image-4.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (5, 4, '-', '-', 'image-5.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (6, 4, '-', '-', 'image-6.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (7, 4, '-', '-', 'image-7.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (8, 4, '-', '-', 'image-8.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (9, 4, '-', '-', 'image-9.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (10, 4, '-', '-', 'image-10.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (11, 4, '-', '-', 'image-11.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (12, 4, '-', '-', 'image-12.jpg', 1, '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `galleries` VALUES (13, 2, 'test', '', '-', 0, NULL, '2021-10-30 15:12:32');
INSERT INTO `galleries` VALUES (18, 2, 'mujahid munir', '0', '0', 0, '2021-10-31 00:55:22', '2021-10-31 01:57:32');
INSERT INTO `galleries` VALUES (19, 2, 'mujahid munir', '0', '0', 0, '2021-10-31 01:17:27', '2021-10-31 01:57:36');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 45 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (34, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (35, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (36, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (37, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (38, '2021_10_23_172035_create_permission_tables', 1);
INSERT INTO `migrations` VALUES (39, '2021_10_24_041329_create_categories_table', 1);
INSERT INTO `migrations` VALUES (40, '2021_10_24_043027_create_clients_table', 1);
INSERT INTO `migrations` VALUES (41, '2021_10_24_043103_create_sliders_table', 1);
INSERT INTO `migrations` VALUES (42, '2021_10_24_050124_create_articles_table', 1);
INSERT INTO `migrations` VALUES (43, '2021_10_24_053539_create_galleries_table', 1);
INSERT INTO `migrations` VALUES (44, '2021_10_27_233942_contacts', 1);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 1);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'super_admin', 'web', '2021-10-28 00:23:30', '2021-10-28 00:23:30');
INSERT INTO `roles` VALUES (2, 'admin', 'web', '2021-10-28 00:23:30', '2021-10-28 00:23:30');

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NULL DEFAULT NULL,
  `page` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `sliders_image_unique`(`image`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES (1, '-', '-', 'banner-1.jpg', 1, 'home', '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `sliders` VALUES (2, '-', '-', 'banner-2.jpg', 1, 'home', '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `sliders` VALUES (3, '-', '-', 'banner-3.jpg', 1, 'home', '2021-10-28 00:23:31', '2021-10-28 00:23:31');
INSERT INTO `sliders` VALUES (4, '-', '-', 'banner.jpg', 1, 'talent', '2021-10-28 00:23:31', '2021-10-28 00:23:31');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'super admin', 'superadmin@gmail.com', NULL, '$2y$10$nKPfEJuXYik49aZq89unBOj60xUa1pDllP6omNlwFA1Xsh0ZoWt6O', NULL, NULL, NULL);
INSERT INTO `users` VALUES (2, 'admin', 'admin@gmail.com', NULL, '$2y$10$wb6pgio9fHJoB2IC7D1WUu306bBQ9D46AJJoiwx5jZzgPFDhTnrnm', NULL, NULL, NULL);

-- ----------------------------
-- View structure for v_categories
-- ----------------------------
DROP VIEW IF EXISTS `v_categories`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_categories` AS SELECT
	*
FROM
	categories ;

-- ----------------------------
-- View structure for v_creativa
-- ----------------------------
DROP VIEW IF EXISTS `v_creativa`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_creativa` AS SELECT
	galleries.id,
	galleries.`name`,
	galleries.image,
	galleries.`status` 
FROM
	articles
	INNER JOIN galleries ON articles.id = galleries.srticle_id
	INNER JOIN categories ON articles.category_id = categories.id 
WHERE
	articles.category_id = 3 
	AND articles.STATUS = 1 ;

-- ----------------------------
-- View structure for v_entertainment
-- ----------------------------
DROP VIEW IF EXISTS `v_entertainment`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_entertainment` AS SELECT
	galleries.id,
	galleries.`name`,
	galleries.image,
	galleries.`status` 
FROM
	articles
	INNER JOIN galleries ON articles.id = galleries.srticle_id
	INNER JOIN categories ON categories.id = articles.category_id 
WHERE
	articles.category_id = 5
	AND 
	articles.STATUS = 1 ;

-- ----------------------------
-- View structure for v_record
-- ----------------------------
DROP VIEW IF EXISTS `v_record`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_record` AS SELECT
	galleries.`name`, 
	galleries.image, 
	galleries.id, 
	galleries.`status`
FROM
	categories
	INNER JOIN
	articles
	ON 
		categories.id = articles.category_id
	INNER JOIN
	galleries
	ON 
		galleries.srticle_id = articles.id
WHERE
	articles.category_id = 2 
	AND galleries.STATUS = 1 ;

-- ----------------------------
-- View structure for v_sliders
-- ----------------------------
DROP VIEW IF EXISTS `v_sliders`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_sliders` AS SELECT
	*
FROM
	sliders
	
	WHERE status = 1 ;

-- ----------------------------
-- View structure for v_talent
-- ----------------------------
DROP VIEW IF EXISTS `v_talent`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_talent` AS SELECT
	galleries.id,
	galleries.`name`,
	galleries.image,
	galleries.`status`,
	galleries.job 
FROM
	categories
	INNER JOIN articles ON categories.id = articles.category_id
	INNER JOIN galleries ON articles.id = galleries.srticle_id 
WHERE
	articles.category_id = 4 
	AND articles.STATUS = 1 ;

SET FOREIGN_KEY_CHECKS = 1;
