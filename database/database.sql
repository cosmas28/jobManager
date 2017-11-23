SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `pp_ad_codes`
-- ----------------------------
DROP TABLE IF EXISTS `pp_ad_codes`;
CREATE TABLE `pp_ad_codes` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `bottom` text,
  `right_side_1` text,
  `right_side_2` text,
  `google_analytics` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_ad_codes`
-- ----------------------------
BEGIN;
INSERT INTO `pp_ad_codes` VALUES ('1', '<a href=\"#\"><img src=\"http://codeareena.com/jobportal/public/images/ad728.png\" /></a>', '<a href=\"#\"><img src=\"http://codeareena.com/jobportal/public/images/banner160x600.jpg\" /></a>', '<a href=\"#\"><img src=\"http://codeareena.com/jobportal/public/images/ad160x600.jpg\" /></a>', '');
COMMIT;


-- ----------------------------
--  Table structure for `pp_admin`
-- ----------------------------
DROP TABLE IF EXISTS `pp_admin`;
CREATE TABLE `pp_admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(80) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_admin`
-- ----------------------------
BEGIN;
INSERT INTO `pp_admin` VALUES ('1', 'demo', 'demo123456', null);
COMMIT;

-- ----------------------------
--  Table structure for `pp_cities`
-- ----------------------------
DROP TABLE IF EXISTS `pp_cities`;
CREATE TABLE `pp_cities` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `city_slug` varchar(150) NOT NULL,
  `city_name` varchar(150) DEFAULT NULL,
  `sort_order` int(3) NOT NULL DEFAULT '998',
  `country_ID` int(11) NOT NULL,
  `is_popular` enum('yes','no') NOT NULL DEFAULT 'no',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_cities`
-- ----------------------------
BEGIN;
INSERT INTO `pp_cities` VALUES ('1', '1', '', 'Lamu', '998', '0', ''), ('2', '1', '', 'Nairobi', '998', '0', ''), ('3', '1', '', 'Malindi', '998', '0', ''), ('4', '1', '', 'Namanga', '998', '0', ''), ('5', '1', '', 'Naivasha', '998', '0', ''), ('6', '1', '', 'Kiambu', '998', '0', ''), ('7', '1', '', 'Eldoret', '998', '0', ''), ('8', '1', '', 'Moyale', '998', '0', ''), ('12', '1', '', 'Kitale', '998', '0', ''), ('13', '1', '', 'Kisumu', '998', '0', ''), ('14', '1', '', 'Mombasa', '998', '0', ''), ('15', '1', '', 'Narok', '998', '0', ''), ('16', '1', '', 'Nakuru', '998', '0', ''), ('17', '1', '', 'Mtito Andei', '998', '0', ''), ('18', '1', '', 'Athi River', '998', '0', ''), ('19', '1', '', 'Voi', '998', '0', '');
COMMIT;

-- ----------------------------
--  Table structure for `pp_cms`
-- ----------------------------
DROP TABLE IF EXISTS `pp_cms`;
CREATE TABLE `pp_cms` (
  `pageID` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(100) DEFAULT NULL,
  `pageSlug` varchar(100) DEFAULT NULL,
  `pageContent` text,
  `pageImage` varchar(100) DEFAULT NULL,
  `pageParentPageID` int(11) DEFAULT '0',
  `dated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `pageStatus` enum('Inactive','Published') DEFAULT 'Inactive',
  `seoMetaTitle` varchar(100) DEFAULT NULL,
  `seoMetaKeyword` varchar(255) DEFAULT NULL,
  `seoMetaDescription` varchar(255) DEFAULT NULL,
  `seoAllowCrawler` tinyint(1) DEFAULT '1',
  `pageCss` text,
  `pageScript` text,
  `menuTop` tinyint(4) DEFAULT '0',
  `menuBottom` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`pageID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_cms`
-- ----------------------------
BEGIN;
INSERT INTO `pp_cms` VALUES ('7', 'About Us', 'about-us.html', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br />\n<br />\nAliquam imperdiet cursus felis, sed posuere nunc. In sollicitudin accumsan orci, eu aliquet lectus tempus nec. Fusce facilisis metus a diam dignissim tristique. Fusce id ligula lectus. In tempor ut purus vel pharetra. Quisque ultrices justo id lectus tristique finibus. Praesent facilisis velit eu elementum tempus. In vel lectus congue, ultricies orci congue, imperdiet massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin, magna ultricies vulputate feugiat, tortor arcu dignissim urna, vitae porta sem justo ut enim. Donec ullamcorper tellus vel fringilla varius. In nec felis quam. Quisque ut nunc non dui bibendum tristique quis accumsan libero.<br />\n<br />\nNunc finibus nisi id nisi scelerisque eleifend. Sed vulputate finibus vestibulum. Nulla facilisi. Etiam convallis leo nisl, et hendrerit ligula ornare ut. Nunc et enim ultrices, vehicula dui sit amet, fringilla tellus. Quisque eu elit lorem. Nunc hendrerit orci ut ex molestie, eget semper lorem cursus. Proin congue consectetur felis et cursus. Sed aliquam nunc nec odio ultricies, eget aliquet nisl porta. Phasellus consequat eleifend enim. Donec in tincidunt diam, id mattis nulla. Cras in luctus arcu, eu efficitur mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. In tincidunt sapien libero, sit amet convallis tortor sollicitudin non. Sed id nulla ac nulla volutpat vehicula. Morbi lacus nunc, tristique rutrum molestie vel, tincidunt ut lectus.<br />\nAliquam imperdiet cursus<br />\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br />\n<br />\nAliquam imperdiet cursus felis, sed posuere nunc. In sollicitudin accumsan orci, eu aliquet lectus tempus nec. Fusce facilisis metus a diam dignissim tristique. Fusce id ligula lectus. In tempor ut purus vel pharetra. Quisque ultrices justo id lectus tristique finibus. Praesent facilisis velit eu elementum tempus. In vel lectus congue, ultricies orci congue, imperdiet massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin, magna ultricies vulputate feugiat, tortor arcu dignissim urna, vitae porta sem justo ut enim. Donec ullamcorper tellus vel fringilla varius. In nec felis quam. Quisque ut nunc non dui bibendum tristique quis accumsan libero.<br />\n<br />\nNunc finibus nisi id nisi scelerisque eleifend. Sed vulputate finibus vestibulum. Nulla facilisi. Etiam convallis leo nisl, et hendrerit ligula ornare ut. Nunc et enim ultrices, vehicula dui sit amet, fringilla tellus. Quisque eu elit lorem. Nunc hendrerit orci ut ex molestie, eget semper lorem cursus. Proin congue consectetur felis et cursus. Sed aliquam nunc nec odio ultricies, eget aliquet nisl porta. Phasellus consequat eleifend enim. Donec in tincidunt diam, id mattis nulla. Cras in luctus arcu, eu efficitur mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. In tincidunt sapien libero, sit amet convallis tortor sollicitudin non. Sed id nulla ac nulla volutpat vehicula. Morbi lacus nunc, tristique rutrum molestie vel, tincidunt ut lectus.<br />\nSuspendisse quis mi commodo, eleifend massa ut, dapibus ligula.<br />\nMaecenas sagittis sem sed sapien blandit venenatis.<br />\nPraesent eleifend ligula id ex condimentum, eu finibus lorem hendrerit.<br />\nVestibulum consequat nunc a elit faucibus lacinia.<br />\nProin quis libero eget lorem vulputate imperdiet.<br />\nVivamus iaculis arcu eget libero imperdiet, sit amet posuere ante consectetur.', 'about-company1.jpg', '0', '2016-11-26 23:33:43', 'Published', 'About Us', 'About Job Portal, Jobs, IT', 'The leading online job portal', '1', null, null, '1', '1'), ('13', 'How To Get Job', 'how-to-get-job.html', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br />\n<br />\nAliquam imperdiet cursus felis, sed posuere nunc. In sollicitudin accumsan orci, eu aliquet lectus tempus nec. Fusce facilisis metus a diam dignissim tristique. Fusce id ligula lectus. In tempor ut purus vel pharetra. Quisque ultrices justo id lectus tristique finibus. Praesent facilisis velit eu elementum tempus. In vel lectus congue, ultricies orci congue, imperdiet massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin, magna ultricies vulputate feugiat, tortor arcu dignissim urna, vitae porta sem justo ut enim. Donec ullamcorper tellus vel fringilla varius. In nec felis quam. Quisque ut nunc non dui bibendum tristique quis accumsan libero.<br />\n<br />\nNunc finibus nisi id nisi scelerisque eleifend. Sed vulputate finibus vestibulum. Nulla facilisi. Etiam convallis leo nisl, et hendrerit ligula ornare ut. Nunc et enim ultrices, vehicula dui sit amet, fringilla tellus. Quisque eu elit lorem. Nunc hendrerit orci ut ex molestie, eget semper lorem cursus. Proin congue consectetur felis et cursus. Sed aliquam nunc nec odio ultricies, eget aliquet nisl porta. Phasellus consequat eleifend enim. Donec in tincidunt diam, id mattis nulla. Cras in luctus arcu, eu efficitur mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. In tincidunt sapien libero, sit amet convallis tortor sollicitudin non. Sed id nulla ac nulla volutpat vehicula. Morbi lacus nunc, tristique rutrum molestie vel, tincidunt ut lectus.<br />\nAliquam imperdiet cursus<br />\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', null, '0', '2016-11-26 23:39:56', 'Published', 'How To Get Job', 'Tips, Job, Online', 'How to get job includes tips and tricks to crack interview', '1', null, null, '0', '0'), ('14', 'Interview', 'interview.html', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br />\n<br />\nAliquam imperdiet cursus felis, sed posuere nunc. In sollicitudin accumsan orci, eu aliquet lectus tempus nec. Fusce facilisis metus a diam dignissim tristique. Fusce id ligula lectus. In tempor ut purus vel pharetra. Quisque ultrices justo id lectus tristique finibus. Praesent facilisis velit eu elementum tempus. In vel lectus congue, ultricies orci congue, imperdiet massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin, magna ultricies vulputate feugiat, tortor arcu dignissim urna, vitae porta sem justo ut enim. Donec ullamcorper tellus vel fringilla varius. In nec felis quam. Quisque ut nunc non dui bibendum tristique quis accumsan libero.<br />\n<br />\nNunc finibus nisi id nisi scelerisque eleifend. Sed vulputate finibus vestibulum. Nulla facilisi. Etiam convallis leo nisl, et hendrerit ligula ornare ut. Nunc et enim ultrices, vehicula dui sit amet, fringilla tellus. Quisque eu elit lorem. Nunc hendrerit orci ut ex molestie, eget semper lorem cursus. Proin congue consectetur felis et cursus. Sed aliquam nunc nec odio ultricies, eget aliquet nisl porta. Phasellus consequat eleifend enim. Donec in tincidunt diam, id mattis nulla. Cras in luctus arcu, eu efficitur mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. In tincidunt sapien libero, sit amet convallis tortor sollicitudin non. Sed id nulla ac nulla volutpat vehicula. Morbi lacus nunc, tristique rutrum molestie vel, tincidunt ut lectus.<br />\nAliquam imperdiet cursus<br />\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', null, '0', '2016-11-26 23:42:22', 'Published', 'Interview', 'job, jobs, interview, tips', 'How to take interview', '1', null, null, '0', '0'), ('15', 'CV Writing', 'cv-writing.html', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br />\n<br />\nAliquam imperdiet cursus felis, sed posuere nunc. In sollicitudin accumsan orci, eu aliquet lectus tempus nec. Fusce facilisis metus a diam dignissim tristique. Fusce id ligula lectus. In tempor ut purus vel pharetra. Quisque ultrices justo id lectus tristique finibus. Praesent facilisis velit eu elementum tempus. In vel lectus congue, ultricies orci congue, imperdiet massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin, magna ultricies vulputate feugiat, tortor arcu dignissim urna, vitae porta sem justo ut enim. Donec ullamcorper tellus vel fringilla varius. In nec felis quam. Quisque ut nunc non dui bibendum tristique quis accumsan libero.<br />\n<br />\nNunc finibus nisi id nisi scelerisque eleifend. Sed vulputate finibus vestibulum. Nulla facilisi. Etiam convallis leo nisl, et hendrerit ligula ornare ut. Nunc et enim ultrices, vehicula dui sit amet, fringilla tellus. Quisque eu elit lorem. Nunc hendrerit orci ut ex molestie, eget semper lorem cursus. Proin congue consectetur felis et cursus. Sed aliquam nunc nec odio ultricies, eget aliquet nisl porta. Phasellus consequat eleifend enim. Donec in tincidunt diam, id mattis nulla. Cras in luctus arcu, eu efficitur mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. In tincidunt sapien libero, sit amet convallis tortor sollicitudin non. Sed id nulla ac nulla volutpat vehicula. Morbi lacus nunc, tristique rutrum molestie vel, tincidunt ut lectus.<br />\nAliquam imperdiet cursus<br />\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', null, '0', '2016-11-26 23:44:04', 'Published', 'CV writing tips and tricks', 'CV, resume', 'How to write a professional CV.', '1', null, null, '0', '0'), ('16', 'Privacy Policy', 'privacy-policy.html', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br />\n<br />\nAliquam imperdiet cursus felis, sed posuere nunc. In sollicitudin accumsan orci, eu aliquet lectus tempus nec. Fusce facilisis metus a diam dignissim tristique. Fusce id ligula lectus. In tempor ut purus vel pharetra. Quisque ultrices justo id lectus tristique finibus. Praesent facilisis velit eu elementum tempus. In vel lectus congue, ultricies orci congue, imperdiet massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin, magna ultricies vulputate feugiat, tortor arcu dignissim urna, vitae porta sem justo ut enim. Donec ullamcorper tellus vel fringilla varius. In nec felis quam. Quisque ut nunc non dui bibendum tristique quis accumsan libero.<br />\n<br />\nNunc finibus nisi id nisi scelerisque eleifend. Sed vulputate finibus vestibulum. Nulla facilisi. Etiam convallis leo nisl, et hendrerit ligula ornare ut. Nunc et enim ultrices, vehicula dui sit amet, fringilla tellus. Quisque eu elit lorem. Nunc hendrerit orci ut ex molestie, eget semper lorem cursus. Proin congue consectetur felis et cursus. Sed aliquam nunc nec odio ultricies, eget aliquet nisl porta. Phasellus consequat eleifend enim. Donec in tincidunt diam, id mattis nulla. Cras in luctus arcu, eu efficitur mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. In tincidunt sapien libero, sit amet convallis tortor sollicitudin non. Sed id nulla ac nulla volutpat vehicula. Morbi lacus nunc, tristique rutrum molestie vel, tincidunt ut lectus.<br />\nAliquam imperdiet cursus<br />\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', null, '0', '2016-11-26 15:12:48', 'Published', 'Privacy Policy', 'Privacy, policies', 'Job portal privacy policies', '1', null, null, '0', '0');
COMMIT;

-- ----------------------------
--  Table structure for `pp_cms_previous`
-- ----------------------------
DROP TABLE IF EXISTS `pp_cms_previous`;
CREATE TABLE `pp_cms_previous` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(60) DEFAULT NULL,
  `heading` varchar(155) DEFAULT NULL,
  `content` text,
  `page_slug` varchar(100) DEFAULT NULL,
  `sts` enum('blocked','active') DEFAULT 'active',
  `dated` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_cms_previous`
-- ----------------------------
BEGIN;
INSERT INTO `pp_cms_previous` VALUES ('4', null, 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a velit sed risus pulvinar faucibus. Nulla facilisi. Nullam vehicula nec ligula eu vulputate. Nunc id ultrices mi, ac tristique lectus. Suspendisse porta ultrices ultricies. Sed quis nisi vel magna maximus aliquam a vel nisl. Cras non rutrum diam. Nulla sed ipsum a felis posuere pharetra ut sit amet augue. Sed id nisl sodales, vulputate mi eu, viverra neque. Fusce fermentum, est ut accumsan accumsan, risus ante varius diam, non venenatis eros ligula fermentum leo. Etiam consectetur imperdiet volutpat. Donec ut pharetra nisi, eget pellentesque tortor. Integer eleifend dolor eu ex lobortis, ac gravida augue tristique. Proin placerat consectetur tincidunt. Nullam sollicitudin, neque eget iaculis ultricies, est justo pulvinar turpis, vulputate convallis leo orci at sapien.\n<br /><br />\nQuisque ac scelerisque libero, nec blandit neque. Nullam felis nisl, elementum eu sapien ut, convallis interdum felis. In turpis odio, fermentum non pulvinar gravida, posuere quis magna. Ut mollis eget neque at euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer faucibus orci a pulvinar malesuada. Aenean at felis vitae lorem venenatis consequat. Nam non nunc euismod, consequat ligula non, tristique odio. Ut leo sapien, aliquet sed ultricies et, scelerisque quis nulla. Aenean non sapien maximus, convallis eros vitae, iaculis massa. In fringilla hendrerit nisi, eu pellentesque massa faucibus molestie. Etiam laoreet eros quis faucibus rutrum. Quisque eleifend purus justo, eget tempus quam interdum non.\n<br /><br />\nNullam enim ex, vulputate at ultricies bibendum, interdum sit amet tortor. Fusce semper augue ac ipsum ultricies interdum. Cras maximus faucibus sapien, et lacinia leo efficitur id. Nullam laoreet pulvinar nibh et ullamcorper. Etiam a lorem rhoncus, rutrum felis sed, blandit orci. Nulla vel tellus gravida, pretium neque a, fringilla lectus. Morbi et leo mi. Aliquam interdum ex ipsum. Vivamus eu ultrices ante, eget volutpat massa. Nulla nisi purus, sollicitudin euismod eleifend pulvinar, dictum rutrum lacus. Nam hendrerit sed arcu a pellentesque. Vestibulum maximus ligula tellus, a euismod dui feugiat et. Aliquam viverra blandit est nec ultricies.\n<br /><br />\nNullam et sem a dui accumsan ornare. Praesent faucibus ultricies orci. Maecenas hendrerit tincidunt rutrum. Phasellus eget libero eget ante interdum venenatis. Cras sodales finibus vulputate. Aenean aliquet velit eget felis pellentesque, et blandit ex facilisis. Vivamus sit amet euismod diam, at rhoncus ex. Nullam consectetur, erat ut maximus dignissim, ex eros pellentesque ex, at dictum odio dui in urna. Nulla rutrum nisi eget risus accumsan, sit amet iaculis risus interdum. Curabitur accumsan eu purus nec condimentum. Fusce pulvinar ex id sagittis sodales. Donec hendrerit scelerisque est, in viverra nibh lobortis et.\n<br /><br />\n<ul>\n<li>Quisque facilisis purus vel sem laoreet posuere.</li>\n<li>Proin eleifend velit ut elit sollicitudin scelerisque.</li>\n<li>Nulla aliquet urna in magna congue, ac hendrerit velit lacinia.</li>\n<li>Aliquam id urna ut lorem porta vulputate.</li>\n<li>Sed ultrices sem quis risus tincidunt, ut lacinia nunc aliquet.</li>\n<li>Phasellus in est suscipit, feugiat tortor ac, iaculis enim.</li>\n</ul>', 'about_us.html', 'active', '2014-05-16 13:47:11'), ('12', null, 'First Day of New Job', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\n<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\n<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;', 'first_day_job.html', 'active', '2014-05-16 14:46:14'), ('13', null, 'Privacy Policy', '<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\n<br />\n<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\n<br />\n<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'privacy-policy.html', 'active', '2015-05-20 23:38:56'), ('15', null, 'Why Job', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a velit sed risus pulvinar faucibus. Nulla facilisi. Nullam vehicula nec ligula eu vulputate. Nunc id ultrices mi, ac tristique lectus. Suspendisse porta ultrices ultricies. Sed quis nisi vel magna maximus aliquam a vel nisl. Cras non rutrum diam. Nulla sed ipsum a felis posuere pharetra ut sit amet augue. Sed id nisl sodales, vulputate mi eu, viverra neque. Fusce fermentum, est ut accumsan accumsan, risus ante varius diam, non venenatis eros ligula fermentum leo. Etiam consectetur imperdiet volutpat. Donec ut pharetra nisi, eget pellentesque tortor. Integer eleifend dolor eu ex lobortis, ac gravida augue tristique. Proin placerat consectetur tincidunt. Nullam sollicitudin, neque eget iaculis ultricies, est justo pulvinar turpis, vulputate convallis leo orci at sapien.<br />\n<br />\nQuisque ac scelerisque libero, nec blandit neque. Nullam felis nisl, elementum eu sapien ut, convallis interdum felis. In turpis odio, fermentum non pulvinar gravida, posuere quis magna. Ut mollis eget neque at euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer faucibus orci a pulvinar malesuada. Aenean at felis vitae lorem venenatis consequat. Nam non nunc euismod, consequat ligula non, tristique odio. Ut leo sapien, aliquet sed ultricies et, scelerisque quis nulla. Aenean non sapien maximus, convallis eros vitae, iaculis massa. In fringilla hendrerit nisi, eu pellentesque massa faucibus molestie. Etiam laoreet eros quis faucibus rutrum. Quisque eleifend purus justo, eget tempus quam interdum non.<br />\n<br />\nNullam enim ex, vulputate at ultricies bibendum, interdum sit amet tortor. Fusce semper augue ac ipsum ultricies interdum. Cras maximus faucibus sapien, et lacinia leo efficitur id. Nullam laoreet pulvinar nibh et ullamcorper. Etiam a lorem rhoncus, rutrum felis sed, blandit orci. Nulla vel tellus gravida, pretium neque a, fringilla lectus. Morbi et leo mi. Aliquam interdum ex ipsum. Vivamus eu ultrices ante, eget volutpat massa. Nulla nisi purus, sollicitudin euismod eleifend pulvinar, dictum rutrum lacus. Nam hendrerit sed arcu a pellentesque. Vestibulum maximus ligula tellus, a euismod dui feugiat et. Aliquam viverra blandit est nec ultricies.<br />\n<br />\nNullam et sem a dui accumsan ornare. Praesent faucibus ultricies orci. Maecenas hendrerit tincidunt rutrum. Phasellus eget libero eget ante interdum venenatis. Cras sodales finibus vulputate. Aenean aliquet velit eget felis pellentesque, et blandit ex facilisis. Vivamus sit amet euismod diam, at rhoncus ex. Nullam consectetur, erat ut maximus dignissim, ex eros pellentesque ex, at dictum odio dui in urna. Nulla rutrum nisi eget risus accumsan, sit amet iaculis risus interdum. Curabitur accumsan eu purus nec condimentum. Fusce pulvinar ex id sagittis sodales. Donec hendrerit scelerisque est, in viverra nibh lobortis et.', 'why_job.html', 'active', '2016-03-12 16:12:11'), ('16', null, 'Preparing for Interview', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a velit sed risus pulvinar faucibus. Nulla facilisi. Nullam vehicula nec ligula eu vulputate. Nunc id ultrices mi, ac tristique lectus. Suspendisse porta ultrices ultricies. Sed quis nisi vel magna maximus aliquam a vel nisl. Cras non rutrum diam. Nulla sed ipsum a felis posuere pharetra ut sit amet augue. Sed id nisl sodales, vulputate mi eu, viverra neque. Fusce fermentum, est ut accumsan accumsan, risus ante varius diam, non venenatis eros ligula fermentum leo. Etiam consectetur imperdiet volutpat. Donec ut pharetra nisi, eget pellentesque tortor. Integer eleifend dolor eu ex lobortis, ac gravida augue tristique. Proin placerat consectetur tincidunt. Nullam sollicitudin, neque eget iaculis ultricies, est justo pulvinar turpis, vulputate convallis leo orci at sapien.\n<br /><br />\nQuisque ac scelerisque libero, nec blandit neque. Nullam felis nisl, elementum eu sapien ut, convallis interdum felis. In turpis odio, fermentum non pulvinar gravida, posuere quis magna. Ut mollis eget neque at euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer faucibus orci a pulvinar malesuada. Aenean at felis vitae lorem venenatis consequat. Nam non nunc euismod, consequat ligula non, tristique odio. Ut leo sapien, aliquet sed ultricies et, scelerisque quis nulla. Aenean non sapien maximus, convallis eros vitae, iaculis massa. In fringilla hendrerit nisi, eu pellentesque massa faucibus molestie. Etiam laoreet eros quis faucibus rutrum. Quisque eleifend purus justo, eget tempus quam interdum non.\n<br /><br />\nNullam enim ex, vulputate at ultricies bibendum, interdum sit amet tortor. Fusce semper augue ac ipsum ultricies interdum. Cras maximus faucibus sapien, et lacinia leo efficitur id. Nullam laoreet pulvinar nibh et ullamcorper. Etiam a lorem rhoncus, rutrum felis sed, blandit orci. Nulla vel tellus gravida, pretium neque a, fringilla lectus. Morbi et leo mi. Aliquam interdum ex ipsum. Vivamus eu ultrices ante, eget volutpat massa. Nulla nisi purus, sollicitudin euismod eleifend pulvinar, dictum rutrum lacus. Nam hendrerit sed arcu a pellentesque. Vestibulum maximus ligula tellus, a euismod dui feugiat et. Aliquam viverra blandit est nec ultricies.\n<br /><br />\nNullam et sem a dui accumsan ornare. Praesent faucibus ultricies orci. Maecenas hendrerit tincidunt rutrum. Phasellus eget libero eget ante interdum venenatis. Cras sodales finibus vulputate. Aenean aliquet velit eget felis pellentesque, et blandit ex facilisis. Vivamus sit amet euismod diam, at rhoncus ex. Nullam consectetur, erat ut maximus dignissim, ex eros pellentesque ex, at dictum odio dui in urna. Nulla rutrum nisi eget risus accumsan, sit amet iaculis risus interdum. Curabitur accumsan eu purus nec condimentum. Fusce pulvinar ex id sagittis sodales. Donec hendrerit scelerisque est, in viverra nibh lobortis et.\n<br /><br />\n<ul>\n<li>Quisque facilisis purus vel sem laoreet posuere.</li>\n<li>Proin eleifend velit ut elit sollicitudin scelerisque.</li>\n<li>Nulla aliquet urna in magna congue, ac hendrerit velit lacinia.</li>\n<li>Aliquam id urna ut lorem porta vulputate.</li>\n<li>Sed ultrices sem quis risus tincidunt, ut lacinia nunc aliquet.</li>\n<li>Phasellus in est suscipit, feugiat tortor ac, iaculis enim.</li>\n</ul>', 'interview.html', 'active', '2016-03-12 16:17:56'), ('17', null, 'CV Writing Tips', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a velit sed risus pulvinar faucibus. Nulla facilisi. Nullam vehicula nec ligula eu vulputate. Nunc id ultrices mi, ac tristique lectus. Suspendisse porta ultrices ultricies. Sed quis nisi vel magna maximus aliquam a vel nisl. Cras non rutrum diam. Nulla sed ipsum a felis posuere pharetra ut sit amet augue. Sed id nisl sodales, vulputate mi eu, viverra neque. Fusce fermentum, est ut accumsan accumsan, risus ante varius diam, non venenatis eros ligula fermentum leo. Etiam consectetur imperdiet volutpat. Donec ut pharetra nisi, eget pellentesque tortor. Integer eleifend dolor eu ex lobortis, ac gravida augue tristique. Proin placerat consectetur tincidunt. Nullam sollicitudin, neque eget iaculis ultricies, est justo pulvinar turpis, vulputate convallis leo orci at sapien.\n<br /><br />\nQuisque ac scelerisque libero, nec blandit neque. Nullam felis nisl, elementum eu sapien ut, convallis interdum felis. In turpis odio, fermentum non pulvinar gravida, posuere quis magna. Ut mollis eget neque at euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer faucibus orci a pulvinar malesuada. Aenean at felis vitae lorem venenatis consequat. Nam non nunc euismod, consequat ligula non, tristique odio. Ut leo sapien, aliquet sed ultricies et, scelerisque quis nulla. Aenean non sapien maximus, convallis eros vitae, iaculis massa. In fringilla hendrerit nisi, eu pellentesque massa faucibus molestie. Etiam laoreet eros quis faucibus rutrum. Quisque eleifend purus justo, eget tempus quam interdum non.\n<br /><br />\nNullam enim ex, vulputate at ultricies bibendum, interdum sit amet tortor. Fusce semper augue ac ipsum ultricies interdum. Cras maximus faucibus sapien, et lacinia leo efficitur id. Nullam laoreet pulvinar nibh et ullamcorper. Etiam a lorem rhoncus, rutrum felis sed, blandit orci. Nulla vel tellus gravida, pretium neque a, fringilla lectus. Morbi et leo mi. Aliquam interdum ex ipsum. Vivamus eu ultrices ante, eget volutpat massa. Nulla nisi purus, sollicitudin euismod eleifend pulvinar, dictum rutrum lacus. Nam hendrerit sed arcu a pellentesque. Vestibulum maximus ligula tellus, a euismod dui feugiat et. Aliquam viverra blandit est nec ultricies.\n<br /><br />\nNullam et sem a dui accumsan ornare. Praesent faucibus ultricies orci. Maecenas hendrerit tincidunt rutrum. Phasellus eget libero eget ante interdum venenatis. Cras sodales finibus vulputate. Aenean aliquet velit eget felis pellentesque, et blandit ex facilisis. Vivamus sit amet euismod diam, at rhoncus ex. Nullam consectetur, erat ut maximus dignissim, ex eros pellentesque ex, at dictum odio dui in urna. Nulla rutrum nisi eget risus accumsan, sit amet iaculis risus interdum. Curabitur accumsan eu purus nec condimentum. Fusce pulvinar ex id sagittis sodales. Donec hendrerit scelerisque est, in viverra nibh lobortis et.\n<br /><br />\n<ul>\n<li>Quisque facilisis purus vel sem laoreet posuere.</li>\n<li>Proin eleifend velit ut elit sollicitudin scelerisque.</li>\n<li>Nulla aliquet urna in magna congue, ac hendrerit velit lacinia.</li>\n<li>Aliquam id urna ut lorem porta vulputate.</li>\n<li>Sed ultrices sem quis risus tincidunt, ut lacinia nunc aliquet.</li>\n<li>Phasellus in est suscipit, feugiat tortor ac, iaculis enim.</li>\n</ul>', 'cv_tips.html', 'active', '2016-03-12 16:19:17'), ('18', null, 'How to get Job', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a velit sed risus pulvinar faucibus. Nulla facilisi. Nullam vehicula nec ligula eu vulputate. Nunc id ultrices mi, ac tristique lectus. Suspendisse porta ultrices ultricies. Sed quis nisi vel magna maximus aliquam a vel nisl. Cras non rutrum diam. Nulla sed ipsum a felis posuere pharetra ut sit amet augue. Sed id nisl sodales, vulputate mi eu, viverra neque. Fusce fermentum, est ut accumsan accumsan, risus ante varius diam, non venenatis eros ligula fermentum leo. Etiam consectetur imperdiet volutpat. Donec ut pharetra nisi, eget pellentesque tortor. Integer eleifend dolor eu ex lobortis, ac gravida augue tristique. Proin placerat consectetur tincidunt. Nullam sollicitudin, neque eget iaculis ultricies, est justo pulvinar turpis, vulputate convallis leo orci at sapien.<br />\n<br />\nQuisque ac scelerisque libero, nec blandit neque. Nullam felis nisl, elementum eu sapien ut, convallis interdum felis. In turpis odio, fermentum non pulvinar gravida, posuere quis magna. Ut mollis eget neque at euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer faucibus orci a pulvinar malesuada. Aenean at felis vitae lorem venenatis consequat. Nam non nunc euismod, consequat ligula non, tristique odio. Ut leo sapien, aliquet sed ultricies et, scelerisque quis nulla. Aenean non sapien maximus, convallis eros vitae, iaculis massa. In fringilla hendrerit nisi, eu pellentesque massa faucibus molestie. Etiam laoreet eros quis faucibus rutrum. Quisque eleifend purus justo, eget tempus quam interdum non.<br />\n<br />\nNullam enim ex, vulputate at ultricies bibendum, interdum sit amet tortor. Fusce semper augue ac ipsum ultricies interdum. Cras maximus faucibus sapien, et lacinia leo efficitur id. Nullam laoreet pulvinar nibh et ullamcorper. Etiam a lorem rhoncus, rutrum felis sed, blandit orci. Nulla vel tellus gravida, pretium neque a, fringilla lectus. Morbi et leo mi. Aliquam interdum ex ipsum. Vivamus eu ultrices ante, eget volutpat massa. Nulla nisi purus, sollicitudin euismod eleifend pulvinar, dictum rutrum lacus. Nam hendrerit sed arcu a pellentesque. Vestibulum maximus ligula tellus, a euismod dui feugiat et. Aliquam viverra blandit est nec ultricies.<br />\n<br />\nNullam et sem a dui accumsan ornare. Praesent faucibus ultricies orci. Maecenas hendrerit tincidunt rutrum. Phasellus eget libero eget ante interdum venenatis. Cras sodales finibus vulputate. Aenean aliquet velit eget felis pellentesque, et blandit ex facilisis. Vivamus sit amet euismod diam, at rhoncus ex. Nullam consectetur, erat ut maximus dignissim, ex eros pellentesque ex, at dictum odio dui in urna. Nulla rutrum nisi eget risus accumsan, sit amet iaculis risus interdum. Curabitur accumsan eu purus nec condimentum. Fusce pulvinar ex id sagittis sodales. Donec hendrerit scelerisque est, in viverra nibh lobortis et.<br />\n<br />\nQuisque facilisis purus vel sem laoreet posuere.<br />\nProin eleifend velit ut elit sollicitudin scelerisque.<br />\nNulla aliquet urna in magna congue, ac hendrerit velit lacinia.<br />\nAliquam id urna ut lorem porta vulputate.<br />\nSed ultrices sem quis risus tincidunt, ut lacinia nunc aliquet.<br />\nPhasellus in est suscipit, feugiat tortor ac, iaculis enim.', 'how_to_get_job.html', 'active', '2016-03-12 16:21:26');
COMMIT;

-- ----------------------------
--  Table structure for `pp_companies`
-- ----------------------------
DROP TABLE IF EXISTS `pp_companies`;
CREATE TABLE `pp_companies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(155) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `industry_ID` int(5) DEFAULT NULL,
  `ownership_type` enum('NGO','Private','Public') DEFAULT 'Private',
  `company_description` text,
  `company_location` varchar(155) DEFAULT NULL,
  `company_phone` varchar(30) DEFAULT NULL,
  `company_logo` varchar(155) DEFAULT NULL,
  `company_country` varchar(80) DEFAULT NULL,
  `sts` enum('blocked','pending','active') DEFAULT 'active',
  `company_city` varchar(80) DEFAULT NULL,
  `company_slug` varchar(155) DEFAULT NULL,
  `flag` varchar(5) DEFAULT NULL,
  `ownership_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_companies`
-- ----------------------------
BEGIN;
INSERT INTO `pp_companies` VALUES ('1', 'Mega Technologies', null, 22, 'Private', 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum
convallis. Maecenas vitae ipsum sed risus viverra volutpat non ac sapien. Donec viverra massa at dolor imperdiet hendrerit.
Nullam quis est vitae dui placerat posuere. Phasellus eget erat sit amet lacus semper consectetur. Sed a nisi nisi.
Pellentesque hendrerit est id quam facilisis auctor a ut ante. Etiam metus arcu, sagittis vitae massa ac,
faucibus tempus dolor. Sed et tempus ex.\n\nAliquam interdum erat vel convallis tristique. Phasellus lectus eros,
interdum ac sollicitudin vestibulum, scelerisque vitae ligula. Cras aliquam est id velit laoreet, et mattis massa
ultrices. Ut aliquam mi nunc, et tempor neque malesuada in. Nulla at viverra metus, id porttitor nulla.
In et arcu id felis eleifend auctor vitae a justo. Nullam eleifend, purus id hendrerit tempus, massa elit vehicula metus,
pharetra elementum lectus elit ac felis. Sed fermentum luctus aliquet.
Vestibulum pulvinar ornare ipsum, gravida condimentum nulla luctus sit amet.
Sed tempor eros a tempor faucibus. Proin orci tortor, placerat sit amet elementum sit amet, ornare vel urna.',
'Lorem ipsum dolor street, 32423', '313313137', 'JOBPORTAL-1457690431.jpg', null, 'active',
null, 'mega-technologies', null, 'Private');
COMMIT;

-- ----------------------------
--  Table structure for `pp_countries`
-- ----------------------------
DROP TABLE IF EXISTS `pp_countries`;
CREATE TABLE `pp_countries` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(150) NOT NULL DEFAULT '',
  `country_citizen` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_countries`
-- ----------------------------
BEGIN;
INSERT INTO `pp_countries` VALUES ('1', 'Kenya', 'Kenya');
COMMIT;

-- ----------------------------
--  Table structure for `pp_email_content`
-- ----------------------------
DROP TABLE IF EXISTS `pp_email_content`;
CREATE TABLE `pp_email_content` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email_name` varchar(155) DEFAULT NULL,
  `from_name` varchar(155) DEFAULT NULL,
  `content` text,
  `from_email` varchar(90) DEFAULT NULL,
  `subject` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_employers`
-- ----------------------------
DROP TABLE IF EXISTS `pp_employers`;
CREATE TABLE `pp_employers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `company_ID` int(6) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass_code` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `mobile_phone` varchar(30) NOT NULL DEFAULT '',
  `gender` enum('female','male') DEFAULT NULL,
  `dated` date NOT NULL,
  `sts` enum('blocked','pending','active') NOT NULL DEFAULT 'active',
  `dob` date DEFAULT NULL,
  `home_phone` varchar(30) DEFAULT NULL,
  `verification_code` varchar(155) DEFAULT NULL,
  `first_login_date` datetime DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `old_emp_id` int(11) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `present_address` varchar(155) DEFAULT NULL,
  `top_employer` enum('no','yes') DEFAULT 'no',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_favourite_candidates`
-- ----------------------------
DROP TABLE IF EXISTS `pp_favourite_candidates`;
CREATE TABLE `pp_favourite_candidates` (
  `employer_id` int(11) NOT NULL AUTO_INCREMENT,
  `seekerid` int(11) DEFAULT NULL,
  `employerlogin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`employer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_favourite_companies`
-- ----------------------------
DROP TABLE IF EXISTS `pp_favourite_companies`;
CREATE TABLE `pp_favourite_companies` (
  `seekerid` int(11) NOT NULL AUTO_INCREMENT,
  `companyid` int(11) DEFAULT NULL,
  `seekerlogin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`seekerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_institute`
-- ----------------------------
DROP TABLE IF EXISTS `pp_institute`;
CREATE TABLE `pp_institute` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sts` enum('blocked','active') DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_job_alert`
-- ----------------------------
DROP TABLE IF EXISTS `pp_job_alert`;
CREATE TABLE `pp_job_alert` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `job_ID` int(11) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_job_alert_queue`
-- ----------------------------
DROP TABLE IF EXISTS `pp_job_alert_queue`;
CREATE TABLE `pp_job_alert_queue` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_ID` int(11) DEFAULT NULL,
  `job_ID` int(11) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_job_functional_areas`
-- ----------------------------
DROP TABLE IF EXISTS `pp_job_functional_areas`;
CREATE TABLE `pp_job_functional_areas` (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `industry_ID` int(7) DEFAULT NULL,
  `functional_area` varchar(155) DEFAULT NULL,
  `sts` enum('suspended','active') DEFAULT 'active',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- ----------------------------
--  Table structure for `pp_job_industries`
-- ----------------------------
DROP TABLE IF EXISTS `pp_job_industries`;
CREATE TABLE `pp_job_industries` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `industry_name` varchar(155) DEFAULT NULL,
  `slug` varchar(155) DEFAULT NULL,
  `sts` enum('suspended','active') DEFAULT 'active',
  `top_category` enum('no','yes') DEFAULT 'no',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- ----------------------------
--  Records of `pp_job_industries`
-- ----------------------------
BEGIN;
INSERT INTO `pp_job_industries` VALUES ('3', 'Accounts', 'accounts', 'active', 'yes'), ('5', 'Advertising', 'advertising', 'active', 'yes'), ('7', 'Banking', 'banking', 'active', 'yes'), ('10', 'Customer Service', 'customer-service', 'active', 'yes'), ('16', 'Graphic / Web Design', 'graphic-web-design', 'active', 'yes'), ('18', 'HR / Industrial Relations', 'hr-industrial-relations', 'active', 'yes'), ('22', 'IT - Software', 'it-software', 'active', 'yes'), ('35', 'Teaching / Education', 'teaching-education', 'active', 'yes'), ('40', 'IT - Hardware', 'it-hardware', 'active', 'yes');
COMMIT;

-- ----------------------------
--  Table structure for `pp_job_seekers`
-- ----------------------------
DROP TABLE IF EXISTS `pp_job_seekers`;
CREATE TABLE `pp_job_seekers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `dated` datetime NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `gender` enum('female','male') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `default_cv_id` int(11) NOT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `home_phone` varchar(25) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `career_objective` text,
  `sts` enum('active','blocked','pending') NOT NULL DEFAULT 'active',
  `verification_code` varchar(155) DEFAULT NULL,
  `first_login_date` datetime DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `slug` varchar(155) DEFAULT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `queue_email_sts` tinyint(1) DEFAULT NULL,
  `send_job_alert` enum('no','yes') DEFAULT 'yes',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_job_titles`
-- ----------------------------
DROP TABLE IF EXISTS `pp_job_titles`;
CREATE TABLE `pp_job_titles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_job_titles`
-- ----------------------------
BEGIN;
INSERT INTO `pp_job_titles` VALUES ('1', 'Web Designer', 'Web Designer'), ('2', 'Web Developer', 'Web Developer'), ('3', 'Graphic Designer', 'Graphic Designer'), ('4', 'Project Manager', 'Project Manager'), ('5', 'Network Administrator', 'Network Administrator'), ('6', 'Network Engineer', 'Network Engineer'), ('7', 'Software Engineer', 'Software Engineer'), ('8', 'System Administrator', 'System Administrator'), ('9', 'System Analyst', 'System Analyst');
COMMIT;

-- ----------------------------
--  Table structure for `pp_newsletter`
-- ----------------------------
DROP TABLE IF EXISTS `pp_newsletter`;
CREATE TABLE `pp_newsletter` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email_name` varchar(50) DEFAULT NULL,
  `from_name` varchar(60) DEFAULT NULL,
  `from_email` varchar(120) DEFAULT NULL,
  `email_subject` varchar(100) DEFAULT NULL,
  `email_body` text,
  `email_interval` int(4) DEFAULT NULL,
  `status` enum('inactive','active') DEFAULT 'active',
  `dated` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- ----------------------------
--  Table structure for `pp_post_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `pp_post_jobs`;
CREATE TABLE `pp_post_jobs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `employer_ID` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company_ID` int(11) NOT NULL,
  `industry_ID` int(11) NOT NULL,
  `pay` varchar(60) NOT NULL,
  `dated` date NOT NULL,
  `sts` enum('inactive','pending','blocked','active') NOT NULL DEFAULT 'pending',
  `is_featured` enum('no','yes') NOT NULL DEFAULT 'no',
  `country` varchar(100) NOT NULL,
  `last_date` date NOT NULL,
  `age_required` varchar(50) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `job_mode` enum('Home Based','Part Time','Full Time') NOT NULL DEFAULT 'Full Time',
  `vacancies` int(3) NOT NULL,
  `job_description` longtext NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_phone` varchar(30) NOT NULL,
  `viewer_count` int(11) NOT NULL DEFAULT '0',
  `job_slug` varchar(255) DEFAULT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL,
  `required_skills` varchar(255) DEFAULT NULL,
  `email_queued` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ID`),
  FULLTEXT KEY `job_search` (`job_title`,`job_description`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_prohibited_keywords`
-- ----------------------------
DROP TABLE IF EXISTS `pp_prohibited_keywords`;
CREATE TABLE `pp_prohibited_keywords` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_prohibited_keywords`
-- ----------------------------
BEGIN;
INSERT INTO `pp_prohibited_keywords` VALUES ('8', 'idiot'), ('9', 'fuck'), ('10', 'bitch');
COMMIT;

-- ----------------------------
--  Table structure for `pp_qualifications`
-- ----------------------------
DROP TABLE IF EXISTS `pp_qualifications`;
CREATE TABLE `pp_qualifications` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `val` varchar(25) DEFAULT NULL,
  `text` varchar(25) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_qualifications`
-- ----------------------------
BEGIN;
INSERT INTO `pp_qualifications` VALUES ('1', 'BA', 'BA', null), ('2', 'BE', 'BE', null), ('3', 'BS', 'BS', null), ('4', 'CA', 'CA', null), ('5', 'Certification', 'Certification', null), ('6', 'Diploma', 'Diploma', null), ('7', 'HSSC', 'HSSC', null), ('8', 'MA', 'MA', null), ('9', 'MBA', 'MBA', null), ('10', 'MS', 'MS', null), ('11', 'PhD', 'PhD', null), ('12', 'SSC', 'SSC', null), ('13', 'ACMA', 'ACMA', null), ('14', 'MCS', 'MCS', null), ('15', 'Does not matter', 'Does not matter', null);
COMMIT;

-- ----------------------------
--  Table structure for `pp_salaries`
-- ----------------------------
DROP TABLE IF EXISTS `pp_salaries`;
CREATE TABLE `pp_salaries` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `val` varchar(25) DEFAULT NULL,
  `text` varchar(25) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_scam`
-- ----------------------------
DROP TABLE IF EXISTS `pp_scam`;
CREATE TABLE `pp_scam` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) DEFAULT NULL,
  `job_ID` int(11) DEFAULT NULL,
  `reason` text,
  `dated` datetime DEFAULT NULL,
  `ip_address` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_seeker_academic`
-- ----------------------------
DROP TABLE IF EXISTS `pp_seeker_academic`;
CREATE TABLE `pp_seeker_academic` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_ID` int(11) DEFAULT NULL,
  `degree_level` varchar(30) DEFAULT NULL,
  `degree_title` varchar(100) DEFAULT NULL,
  `major` varchar(155) DEFAULT NULL,
  `institude` varchar(155) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `completion_year` int(5) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_seeker_additional_info`
-- ----------------------------
DROP TABLE IF EXISTS `pp_seeker_additional_info`;
CREATE TABLE `pp_seeker_additional_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_ID` int(11) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL COMMENT 'JSON data',
  `interest` varchar(155) DEFAULT NULL,
  `awards` varchar(100) DEFAULT NULL,
  `additional_qualities` varchar(155) DEFAULT NULL,
  `convicted_crime` enum('no','yes') DEFAULT 'no',
  `crime_details` text,
  `summary` text,
  `bad_habits` varchar(255) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`ID`),
  FULLTEXT KEY `resume_search` (`summary`,`keywords`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_seeker_applied_for_job`
-- ----------------------------
DROP TABLE IF EXISTS `pp_seeker_applied_for_job`;
CREATE TABLE `pp_seeker_applied_for_job` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_ID` int(11) NOT NULL,
  `job_ID` int(11) NOT NULL,
  `cover_letter` text,
  `expected_salary` varchar(20) DEFAULT NULL,
  `dated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(40) DEFAULT NULL,
  `employer_ID` int(11) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_seeker_experience`
-- ----------------------------
DROP TABLE IF EXISTS `pp_seeker_experience`;
CREATE TABLE `pp_seeker_experience` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_ID` int(11) DEFAULT NULL,
  `job_title` varchar(155) DEFAULT NULL,
  `company_name` varchar(155) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `responsibilities` text,
  `dated` datetime DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_seeker_skills`
-- ----------------------------
DROP TABLE IF EXISTS `pp_seeker_skills`;
CREATE TABLE `pp_seeker_skills` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_ID` int(11) DEFAULT NULL,
  `skill_name` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  FULLTEXT KEY `js_skill_search` (`skill_name`)
) ENGINE=MyISAM AUTO_INCREMENT=309 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `pp_sessions`;
CREATE TABLE `pp_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_settings`
-- ----------------------------
DROP TABLE IF EXISTS `pp_settings`;
CREATE TABLE `pp_settings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `emails_per_hour` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pp_settings`
-- ----------------------------
BEGIN;
INSERT INTO `pp_settings` VALUES ('1', '300');
COMMIT;

-- ----------------------------
--  Table structure for `pp_skills`
-- ----------------------------
DROP TABLE IF EXISTS `pp_skills`;
CREATE TABLE `pp_skills` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(40) DEFAULT NULL,
  `industry_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pp_stories`
-- ----------------------------
DROP TABLE IF EXISTS `pp_stories`;
CREATE TABLE `pp_stories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `seeker_ID` int(11) NOT NULL,
  `is_featured` enum('yes','no') DEFAULT 'no',
  `sts` enum('active','inactive') DEFAULT 'inactive',
  `title` varchar(250) DEFAULT NULL,
  `story` text,
  `dated` datetime DEFAULT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `tbl_gallery`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_gallery`;
CREATE TABLE `tbl_gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image_caption` varchar(150) DEFAULT NULL,
  `image_name` varchar(155) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  `sts` enum('inactive','active') DEFAULT 'active',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Procedure structure for `count_active_opened_jobs`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_active_opened_jobs`;
delimiter ;;
CREATE  PROCEDURE `count_active_opened_jobs`()
BEGIN
	#Routine body goes here...
	SELECT COUNT(ID) as total
	FROM `pp_post_jobs` AS pj
	WHERE pj.sts='active' AND CURRENT_DATE < pj.last_date;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_active_opened_jobs_by_company_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_active_opened_jobs_by_company_id`;
delimiter ;;
CREATE  PROCEDURE `count_active_opened_jobs_by_company_id`(IN comp_id INT(11))
BEGIN
	#Routine body goes here...
	SELECT COUNT(ID) as total
	FROM `pp_post_jobs` AS pj
	WHERE pj.company_ID=comp_id AND pj.sts='active';
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_active_records_by_city_front_end`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_active_records_by_city_front_end`;
delimiter ;;
CREATE  PROCEDURE `count_active_records_by_city_front_end`(IN city VARCHAR(40))
BEGIN
	#Routine body goes here...
	SELECT COUNT(pj.ID) AS total
	FROM `pp_post_jobs` AS pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.city=city AND pj.sts='active' AND pc.sts = 'active';
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_active_records_by_industry_front_end`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_active_records_by_industry_front_end`;
delimiter ;;
CREATE  PROCEDURE `count_active_records_by_industry_front_end`(IN industry_id INT(11))
BEGIN
	SELECT COUNT(pj.ID) AS total
	FROM `pp_post_jobs` AS pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	INNER JOIN pp_job_industries AS ji ON pj.industry_ID=ji.ID
	WHERE pj.industry_ID=industry_id AND pj.sts='active' AND pc.sts = 'active';
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_all_posted_jobs_by_company_id_frontend`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_all_posted_jobs_by_company_id_frontend`;
delimiter ;;
CREATE  PROCEDURE `count_all_posted_jobs_by_company_id_frontend`(IN comp_id INT(11))
BEGIN
	#Routine body goes here...
	SELECT COUNT(pj.ID) AS total
	FROM `pp_post_jobs` AS pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.company_ID=comp_id AND pj.sts='active' AND pc.sts = 'active';
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_applied_jobs_by_employer_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_applied_jobs_by_employer_id`;
delimiter ;;
CREATE  PROCEDURE `count_applied_jobs_by_employer_id`(IN employer_id INT(11))
BEGIN
	SELECT COUNT(pp_seeker_applied_for_job.ID) AS total
	FROM `pp_seeker_applied_for_job`
	INNER JOIN pp_post_jobs ON pp_post_jobs.ID=pp_seeker_applied_for_job.job_ID
	INNER JOIN pp_job_seekers ON pp_job_seekers.ID=pp_seeker_applied_for_job.seeker_ID
	WHERE pp_post_jobs.employer_ID=employer_id;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_applied_jobs_by_jobseeker_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_applied_jobs_by_jobseeker_id`;
delimiter ;;
CREATE  PROCEDURE `count_applied_jobs_by_jobseeker_id`(IN jobseeker_id INT(11))
BEGIN
	SELECT COUNT(pp_seeker_applied_for_job.ID) AS total
	FROM `pp_seeker_applied_for_job`
	WHERE pp_seeker_applied_for_job.seeker_ID=jobseeker_id;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_ft_job_search_filter_3`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_ft_job_search_filter_3`;
delimiter ;;
CREATE  PROCEDURE `count_ft_job_search_filter_3`(IN param_city VARCHAR(255), param_company_slug VARCHAR(255), param_title VARCHAR(255))
BEGIN
	SELECT COUNT(pj.ID) as total
	FROM pp_post_jobs pj
	INNER JOIN pp_companies pc ON pc.ID = pj.company_ID
	WHERE (pj.job_title like CONCAT("%",param,"%") OR pj.job_description like CONCAT("%",param,"%") OR pj.required_skills like CONCAT("%",param,"%"))
AND pc.company_slug = param_company_slug AND pj.city = param_city AND pj.sts = 'active' AND pc.sts = 'active';
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_ft_search_job`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_ft_search_job`;
delimiter ;;
CREATE  PROCEDURE `count_ft_search_job`(IN param VARCHAR(255), param2 VARCHAR(255))
BEGIN
	SELECT COUNT(pc.ID) as total
	FROM `pp_post_jobs` pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.sts = 'active' AND pc.sts = 'active'
AND (pj.job_title like CONCAT("%",param,"%") OR pj.job_description like CONCAT("%",param,"%") OR pj.required_skills like CONCAT("%",param,"%"))
AND pj.city like CONCAT("%",param2,"%");
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_ft_search_resume`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_ft_search_resume`;
delimiter ;;
CREATE  PROCEDURE `count_ft_search_resume`(IN param VARCHAR(255))
BEGIN
	SELECT COUNT(DISTINCT ss.ID) as total
	FROM `pp_job_seekers` js
	INNER JOIN pp_seeker_skills AS ss ON js.ID=ss.seeker_ID
	WHERE js.sts = 'active'
AND ss.skill_name like CONCAT('%',param,'%');
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `count_search_posted_jobs`
-- ----------------------------
DROP PROCEDURE IF EXISTS `count_search_posted_jobs`;
delimiter ;;
CREATE  PROCEDURE `count_search_posted_jobs`(IN where_condition VARCHAR(255))
BEGIN
	#Routine body goes here...
SET @query = "SELECT COUNT(pj.ID) as total
	FROM `pp_post_jobs` pj
	LEFT JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE
";

SET @where_clause = CONCAT(where_condition);
SET @query = CONCAT(@query, @where_clause);

PREPARE stmt FROM @query;
EXECUTE stmt;

END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `ft_job_search_filter_3`
-- ----------------------------
DROP PROCEDURE IF EXISTS `ft_job_search_filter_3`;
delimiter ;;
CREATE  PROCEDURE `ft_job_search_filter_3`(IN param_city VARCHAR(255), param_company_slug VARCHAR(255), param_title VARCHAR(255), from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.employer_ID, pj.company_ID, pj.job_description, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug, MATCH(pj.job_title, pj.job_description) AGAINST( param_title ) AS score
	FROM pp_post_jobs pj
	INNER JOIN pp_companies pc ON pc.ID = pj.company_ID
	WHERE (pj.job_title like CONCAT("%",param_title,"%") OR pj.job_description like CONCAT("%",param_title,"%") OR pj.required_skills like CONCAT("%",param_title,"%"))
AND pc.company_slug = param_company_slug AND pj.city = param_city AND pj.sts = 'active' AND pc.sts = 'active'

ORDER BY score DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `ft_search_job`
-- ----------------------------
DROP PROCEDURE IF EXISTS `ft_search_job`;
delimiter ;;
CREATE  PROCEDURE `ft_search_job`(IN param VARCHAR(255), param2 VARCHAR(255), from_limit INT(5), to_limit INT(5))
BEGIN

	SELECT pj.ID, pj.job_title, pj.pay, pj.job_slug, pj.employer_ID, pj.company_ID, pj.job_description, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug, MATCH(pj.job_title, pj.job_description) AGAINST(param) AS score
	FROM `pp_post_jobs` pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.sts = 'active' AND pc.sts = 'active'
	AND (
			pj.job_title like CONCAT("%",param,"%")
			OR pj.job_description like CONCAT("%",param,"%")
			OR pj.required_skills like CONCAT("%",param,"%")
			OR pj.pay like CONCAT("%",REPLACE(param,' ','-'),"%")
			OR pj.city like CONCAT("%",param,"%")
		)
		AND (pj.city) like CONCAT("%",param2,"%")
ORDER BY pj.ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `ft_search_jobs_group_by_city`
-- ----------------------------
DROP PROCEDURE IF EXISTS `ft_search_jobs_group_by_city`;
delimiter ;;
CREATE  PROCEDURE `ft_search_jobs_group_by_city`(IN param VARCHAR(255))
BEGIN
	SELECT city, COUNT(city) as score
	FROM `pp_post_jobs` pj
	WHERE pj.sts = 'active'
AND (
			pj.job_title like CONCAT("%",param,"%")
			OR pj.job_description like CONCAT("%",param,"%")
			OR pj.required_skills like CONCAT("%",param,"%")
			OR pj.pay like CONCAT("%",REPLACE(param,' ','-'),"%")
			OR pj.city like CONCAT("%",param,"%")
		)
	GROUP BY city
	ORDER BY score DESC
	LIMIT 0,5;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `ft_search_jobs_group_by_company`
-- ----------------------------
DROP PROCEDURE IF EXISTS `ft_search_jobs_group_by_company`;
delimiter ;;
CREATE  PROCEDURE `ft_search_jobs_group_by_company`(IN param VARCHAR(255))
BEGIN
	SELECT  pc.company_name,pc.company_slug, COUNT(pc.company_name) as score
	FROM `pp_post_jobs` pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.sts = 'active' AND pc.sts = 'active'
AND (
			pj.job_title like CONCAT("%",param,"%")
			OR pj.job_description like CONCAT("%",param,"%")
			OR pj.required_skills like CONCAT("%",param,"%")
			OR pj.pay like CONCAT("%",REPLACE(param,' ','-'),"%")
			OR pj.city like CONCAT("%",param,"%")
		)
	GROUP BY pc.company_name
	ORDER BY score DESC
	LIMIT 0,5;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `ft_search_jobs_group_by_salary_range`
-- ----------------------------
DROP PROCEDURE IF EXISTS `ft_search_jobs_group_by_salary_range`;
delimiter ;;
CREATE  PROCEDURE `ft_search_jobs_group_by_salary_range`(IN param VARCHAR(255))
BEGIN
	SELECT pay, COUNT(pay) as score
	FROM `pp_post_jobs` pj
	WHERE pj.sts = 'active'
AND (
			pj.job_title like CONCAT("%",param,"%")
			OR pj.job_description like CONCAT("%",param,"%")
			OR pj.required_skills like CONCAT("%",param,"%")
			OR pj.pay like CONCAT("%",REPLACE(param,' ','-'),"%")
			OR pj.city like CONCAT("%",param,"%")
		)
	GROUP BY pay
	ORDER BY score DESC
	LIMIT 0,5;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `ft_search_jobs_group_by_title`
-- ----------------------------
DROP PROCEDURE IF EXISTS `ft_search_jobs_group_by_title`;
delimiter ;;
CREATE  PROCEDURE `ft_search_jobs_group_by_title`(IN param VARCHAR(255))
BEGIN
	SELECT job_title, COUNT(job_title) as score
	FROM `pp_post_jobs` pj
	WHERE pj.sts = 'active'
AND (
			pj.job_title like CONCAT("%",param,"%")
			OR pj.job_description like CONCAT("%",param,"%")
			OR pj.required_skills like CONCAT("%",param,"%")
			OR pj.pay like CONCAT("%",REPLACE(param,' ','-'),"%")
			OR pj.city like CONCAT("%",param,"%")
		)

	GROUP BY job_title
	ORDER BY score DESC
	LIMIT 0,5;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `ft_search_resume`
-- ----------------------------
DROP PROCEDURE IF EXISTS `ft_search_resume`;
delimiter ;;
CREATE  PROCEDURE `ft_search_resume`(IN param VARCHAR(255), from_limit INT(5), to_limit INT(5))
BEGIN
  SELECT js.ID, js.first_name, js.gender, js.dob, js.city, js.photo
	FROM pp_job_seekers AS js
	INNER JOIN pp_seeker_skills AS ss ON js.ID=ss.seeker_ID
	WHERE js.sts = 'active' AND ss.skill_name like CONCAT("%",param,"%")
  GROUP BY ss.seeker_ID
	ORDER BY js.ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_active_deactive_posted_job_by_company_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_active_deactive_posted_job_by_company_id`;
delimiter ;;
CREATE  PROCEDURE `get_active_deactive_posted_job_by_company_id`(IN comp_id INT(11), from_limit INT(4), to_limit INT(4))
BEGIN
	#Routine body goes here...
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.job_description, pj.employer_ID, pj.last_date, pj.dated, pj.city, pj.is_featured, pj.sts, pc.company_name, pc.company_logo
	FROM `pp_post_jobs` AS pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.company_ID=comp_id AND pj.sts IN ('active', 'inactive', 'pending') AND pc.sts = 'active'
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_active_featured_job`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_active_featured_job`;
delimiter ;;
CREATE  PROCEDURE `get_active_featured_job`(IN from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.employer_ID, pj.company_ID, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug
	FROM `pp_post_jobs` pj
	LEFT JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.is_featured='yes' AND pj.sts='active' AND pc.sts = 'active'
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_active_posted_job_by_company_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_active_posted_job_by_company_id`;
delimiter ;;
CREATE  PROCEDURE `get_active_posted_job_by_company_id`(IN comp_id INT(11), from_limit INT(4), to_limit INT(4))
BEGIN
	#Routine body goes here...
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.job_description, pj.employer_ID, pj.last_date, pj.dated, pj.city, pj.is_featured, pj.sts, pc.company_name, pc.company_logo
	FROM `pp_post_jobs` AS pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.company_ID=comp_id AND pj.sts='active' AND pc.sts = 'active'
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_active_posted_job_by_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_active_posted_job_by_id`;
delimiter ;;
CREATE  PROCEDURE `get_active_posted_job_by_id`(IN job_id INT(11))
BEGIN
	SELECT pp_post_jobs.*, pc.ID AS CID, emp.first_name, emp.email AS employer_email, pp_job_industries.industry_name, pc.company_name, pc.company_email, pc.company_description, pc.company_logo, pc.company_phone, pc.industry_ID AS cat_ID, pc.company_location, pc.company_slug
,emp.city as emp_city, emp.country as emp_country
FROM `pp_post_jobs`
	INNER JOIN pp_companies AS pc ON pp_post_jobs.company_ID=pc.ID
	INNER JOIN pp_employers AS emp ON pc.ID=emp.company_ID
	INNER JOIN pp_job_industries ON pp_post_jobs.industry_ID=pp_job_industries.ID
	WHERE pp_post_jobs.ID=job_id AND pp_post_jobs.sts='active' AND pc.sts = 'active';
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_all_active_employers`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_all_active_employers`;
delimiter ;;
CREATE  PROCEDURE `get_all_active_employers`(IN from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pc.ID AS CID, pc.company_name, pc.company_logo, pc.company_slug
	FROM `pp_employers` emp
	INNER JOIN pp_companies AS pc ON emp.company_ID=pc.ID
	WHERE emp.sts = 'active'
	ORDER BY emp.ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_all_active_top_employers`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_all_active_top_employers`;
delimiter ;;
CREATE  PROCEDURE `get_all_active_top_employers`(IN from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pc.ID AS CID, pc.company_name, pc.company_logo, pc.company_slug
	FROM `pp_employers` emp
	INNER JOIN pp_companies AS pc ON emp.company_ID=pc.ID
	WHERE emp.sts = 'active' AND emp.top_employer = 'yes'
	ORDER BY emp.ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_all_opened_jobs`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_all_opened_jobs`;
delimiter ;;
CREATE  PROCEDURE `get_all_opened_jobs`(IN from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.employer_ID, pj.company_ID, pj.job_description, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug, ji.industry_name
	FROM `pp_post_jobs` pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	INNER JOIN pp_job_industries AS ji ON pj.industry_ID=ji.ID
	WHERE pj.sts = 'active' AND pc.sts='active'
	ORDER BY pj.ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_all_posted_jobs`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_all_posted_jobs`;
delimiter ;;
CREATE  PROCEDURE `get_all_posted_jobs`(IN from_limit INT(5), to_limit INT(5))
BEGIN
	#Routine body goes here...
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.employer_ID, pj.company_ID, pj.job_description, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug, pj.ip_address
	FROM `pp_post_jobs` pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_all_posted_jobs_by_company_id_frontend`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_all_posted_jobs_by_company_id_frontend`;
delimiter ;;
CREATE  PROCEDURE `get_all_posted_jobs_by_company_id_frontend`(IN comp_id INT(11), from_limit INT(4), to_limit INT(4))
BEGIN
	#Routine body goes here...
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.job_description, pj.employer_ID, pj.last_date, pj.dated, pj.city, pj.is_featured, pj.sts, pc.company_name, pc.company_logo
	FROM `pp_post_jobs` AS pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.company_ID=comp_id AND pj.sts='active' AND pc.sts = 'active'
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_all_posted_jobs_by_status`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_all_posted_jobs_by_status`;
delimiter ;;
CREATE  PROCEDURE `get_all_posted_jobs_by_status`(IN job_status VARCHAR(10), from_limit INT(5), to_limit INT(5))
BEGIN
	#Routine body goes here...
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.employer_ID, pj.company_ID, pj.job_description, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug
	FROM `pp_post_jobs` pj
	INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.sts = job_status
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_applied_jobs_by_employer_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_applied_jobs_by_employer_id`;
delimiter ;;
CREATE  PROCEDURE `get_applied_jobs_by_employer_id`(IN employer_id INT(11), from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pp_seeker_applied_for_job.dated AS applied_date, pp_post_jobs.ID, pp_post_jobs.job_title, pp_job_seekers.ID AS job_seeker_ID, pp_post_jobs.job_slug, pp_job_seekers.first_name, pp_job_seekers.last_name, pp_job_seekers.slug
	FROM `pp_seeker_applied_for_job`
	INNER JOIN pp_post_jobs ON pp_post_jobs.ID=pp_seeker_applied_for_job.job_ID
	INNER JOIN pp_job_seekers ON pp_job_seekers.ID=pp_seeker_applied_for_job.seeker_ID
	WHERE pp_post_jobs.employer_ID=employer_id
	ORDER BY pp_seeker_applied_for_job.ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_applied_jobs_by_jobseeker_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_applied_jobs_by_jobseeker_id`;
delimiter ;;
CREATE  PROCEDURE `get_applied_jobs_by_jobseeker_id`(IN jobseeker_id INT(11), from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pp_seeker_applied_for_job.ID as applied_id, pp_seeker_applied_for_job.dated AS applied_date, pp_post_jobs.ID, pp_post_jobs.job_title, pp_post_jobs.job_slug, pp_companies.company_name, pp_companies.company_slug, pp_companies.company_logo
	FROM `pp_seeker_applied_for_job`
	INNER JOIN pp_post_jobs ON pp_post_jobs.ID=pp_seeker_applied_for_job.job_ID
	INNER JOIN pp_employers ON pp_employers.ID=pp_post_jobs.employer_ID
	INNER JOIN pp_companies ON pp_companies.ID=pp_employers.company_ID
	WHERE pp_seeker_applied_for_job.seeker_ID=jobseeker_id
	ORDER BY pp_seeker_applied_for_job.ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_applied_jobs_by_seeker_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_applied_jobs_by_seeker_id`;
delimiter ;;
CREATE  PROCEDURE `get_applied_jobs_by_seeker_id`(IN applicant_id INT(11), from_limit INT(5), to_limit INT(5))
BEGIN
	#Routine body goes here...
	SELECT aj.*, pp_post_jobs.ID AS posted_job_id, pp_post_jobs.employer_ID, pp_post_jobs.job_title, pp_post_jobs.job_slug, pp_post_jobs.city, pp_post_jobs.is_featured, pp_post_jobs.sts, pp_companies.company_name, pp_companies.company_logo, pp_job_seekers.first_name, pp_job_seekers.last_name, pp_job_seekers.photo
	FROM `pp_seeker_applied_for_job` aj
	INNER JOIN pp_job_seekers ON aj.seeker_ID=pp_job_seekers.ID
	INNER JOIN pp_post_jobs ON aj.job_ID=pp_post_jobs.ID
	INNER JOIN pp_companies ON pp_post_jobs.company_ID=pp_companies.ID
	WHERE aj.seeker_ID=applicant_id
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_company_by_slug`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_company_by_slug`;
delimiter ;;
CREATE  PROCEDURE `get_company_by_slug`(IN slug VARCHAR(70))
BEGIN
	SELECT emp.ID AS empID, pc.ID, emp.country, emp.city, pc.company_name, pc.company_description, pc.company_location, pc.company_logo, pc.company_slug
	FROM `pp_employers` AS emp
	INNER JOIN pp_companies AS pc ON emp.company_ID=pc.ID
	WHERE pc.company_slug=slug AND emp.sts='active';
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_experience_by_jobseeker_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_experience_by_jobseeker_id`;
delimiter ;;
CREATE  PROCEDURE `get_experience_by_jobseeker_id`(IN jobseeker_id INT(11))
BEGIN
	SELECT pp_seeker_experience.*
	FROM `pp_seeker_experience`
	WHERE pp_seeker_experience.seeker_ID=jobseeker_id
	ORDER BY pp_seeker_experience.start_date DESC;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_featured_job`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_featured_job`;
delimiter ;;
CREATE  PROCEDURE `get_featured_job`(IN from_limit INT(5), to_limit INT(5))
BEGIN
	#Routine body goes here...
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.employer_ID, pj.company_ID, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug
	FROM `pp_post_jobs` pj
	LEFT JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE pj.is_featured='yes'
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_latest_posted_job_by_employer_ID`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_latest_posted_job_by_employer_ID`;
delimiter ;;
CREATE  PROCEDURE `get_latest_posted_job_by_employer_ID`(IN emp_id INT(11), from_limit INT(4), to_limit INT(4))
BEGIN
	#Routine body goes here...
	SELECT pp_post_jobs.ID, pp_post_jobs.job_title, pp_post_jobs.job_slug, pp_post_jobs.employer_ID, pp_post_jobs.last_date, pp_post_jobs.dated, pp_post_jobs.city, pp_post_jobs.is_featured, pp_post_jobs.sts, pp_job_industries.industry_name, pc.company_name, pc.company_logo
	FROM `pp_post_jobs`
	INNER JOIN pp_companies AS pc ON pp_post_jobs.company_ID=pc.ID
	INNER JOIN pp_employers AS emp ON pp_post_jobs.employer_ID=emp.ID
	INNER JOIN pp_job_industries ON pp_post_jobs.industry_ID=pp_job_industries.ID
	WHERE pp_post_jobs.employer_ID=emp_id
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_opened_jobs_home_page`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_opened_jobs_home_page`;
delimiter ;;
CREATE  PROCEDURE `get_opened_jobs_home_page`(IN from_limit INT(5), to_limit INT(5))
BEGIN
set @prev := 0, @rownum := '';
SELECT ID, job_title, pay, job_slug, employer_ID, company_ID, job_description, city, dated, last_date, is_featured, sts, company_name, company_logo, company_slug, industry_name
FROM (
  SELECT ID, job_title, pay, job_slug, employer_ID, company_ID, job_description, city, dated, last_date, is_featured, sts, company_name, company_logo, company_slug, industry_name,
         IF( @prev <> company_ID,
             @rownum := 1,
             @rownum := @rownum+1
         ) AS rank,
         @prev := company_ID,
         @rownum
			FROM (
					SELECT pj.ID, pj.job_title, pj.pay, pj.job_slug, pj.employer_ID, pj.company_ID, pj.job_description, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, company_name, company_logo, company_slug, industry_name
					FROM pp_post_jobs AS pj
					INNER JOIN pp_companies AS pc ON pj.company_ID=pc.ID
					INNER JOIN pp_job_industries AS ji ON pj.industry_ID=ji.ID
					WHERE pj.sts = 'active' AND pc.sts='active'
					ORDER BY company_ID DESC, ID DESC
			) pj
) jobs_ranked
WHERE jobs_ranked.rank <= 2
ORDER BY jobs_ranked.ID DESC
LIMIT from_limit,to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_posted_job_by_company_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_posted_job_by_company_id`;
delimiter ;;
CREATE  PROCEDURE `get_posted_job_by_company_id`(IN comp_id INT(11), from_limit INT(4), to_limit INT(4))
BEGIN
	#Routine body goes here...
	SELECT pp_post_jobs.ID, pp_post_jobs.job_title, pp_post_jobs.job_slug, pp_post_jobs.employer_ID, pp_post_jobs.last_date, pp_post_jobs.dated, pp_post_jobs.city, pp_post_jobs.job_description, pp_post_jobs.is_featured, pp_post_jobs.sts, pp_job_industries.industry_name, pc.company_name, pc.company_logo
	FROM `pp_post_jobs`
	INNER JOIN pp_companies AS pc ON pp_post_jobs.company_ID=pc.ID
	INNER JOIN pp_job_industries ON pp_post_jobs.industry_ID=pp_job_industries.ID
	WHERE pp_post_jobs.company_ID=comp_id
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_posted_job_by_employer_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_posted_job_by_employer_id`;
delimiter ;;
CREATE  PROCEDURE `get_posted_job_by_employer_id`(IN emp_id INT(11), from_limit INT(4), to_limit INT(4))
BEGIN
	#Routine body goes here...
	SELECT pp_post_jobs.ID, pp_post_jobs.job_title, pp_post_jobs.job_slug, pp_post_jobs.job_description, pp_post_jobs.contact_person, pp_post_jobs.contact_email, pp_post_jobs.contact_phone, pp_post_jobs.employer_ID, pp_post_jobs.last_date, pp_post_jobs.dated, pp_post_jobs.city, pp_post_jobs.is_featured, pp_post_jobs.sts, pp_job_industries.industry_name, pc.company_name, pc.company_logo
	FROM `pp_post_jobs`
	INNER JOIN pp_companies AS pc ON pp_post_jobs.company_ID=pc.ID
	INNER JOIN pp_employers AS emp ON pp_post_jobs.employer_ID=emp.ID
	INNER JOIN pp_job_industries ON pp_post_jobs.industry_ID=pp_job_industries.ID
	WHERE pp_post_jobs.employer_ID=emp_id
	ORDER BY ID DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_posted_job_by_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_posted_job_by_id`;
delimiter ;;
CREATE  PROCEDURE `get_posted_job_by_id`(IN job_id INT(11))
BEGIN
	#Routine body goes here...
	SELECT pp_post_jobs.*, pc.ID AS CID, pp_job_industries.industry_name, pc.company_name, pc.company_email, pc.company_description, pc.company_logo, pc.company_phone, pc.company_fax,pc.industry_ID AS cat_ID, pc.company_location, pc.company_slug
,em.city as emp_city, em.country as emp_country
	FROM `pp_post_jobs`
	INNER JOIN pp_companies AS pc ON pp_post_jobs.company_ID=pc.ID
  INNER JOIN pp_employers AS em ON pc.ID=em.company_ID
	INNER JOIN pp_job_industries ON pp_post_jobs.industry_ID=pp_job_industries.ID
	WHERE pp_post_jobs.ID=job_id;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_posted_job_by_id_employer_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_posted_job_by_id_employer_id`;
delimiter ;;
CREATE  PROCEDURE `get_posted_job_by_id_employer_id`(IN job_id INT(11), emp_id INT(11))
BEGIN
	SELECT pp_post_jobs.*, pc.ID AS CID, pp_job_industries.industry_name, pc.company_name, pc.company_email, pc.company_description, pc.company_logo, pc.company_phone, pc.industry_ID AS cat_ID, pc.company_location, pc.company_slug
	FROM `pp_post_jobs`
	INNER JOIN pp_companies AS pc ON pp_post_jobs.company_ID=pc.ID
	INNER JOIN pp_employers AS emp ON pp_post_jobs.employer_ID=emp.ID
	INNER JOIN pp_job_industries ON pp_post_jobs.industry_ID=pp_job_industries.ID
	WHERE pp_post_jobs.ID=job_id AND pp_post_jobs.employer_ID=emp_id;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `get_qualification_by_jobseeker_id`
-- ----------------------------
DROP PROCEDURE IF EXISTS `get_qualification_by_jobseeker_id`;
delimiter ;;
CREATE  PROCEDURE `get_qualification_by_jobseeker_id`(IN jobseeker_id INT(11))
BEGIN
	SELECT pp_seeker_academic.*
	FROM `pp_seeker_academic`
	WHERE pp_seeker_academic.seeker_ID=jobseeker_id
	ORDER BY pp_seeker_academic.completion_year DESC;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `job_search_by_city`
-- ----------------------------
DROP PROCEDURE IF EXISTS `job_search_by_city`;
delimiter ;;
CREATE  PROCEDURE `job_search_by_city`(IN param_city VARCHAR(255), from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.employer_ID, pj.company_ID, pj.job_description, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug
	FROM pp_post_jobs pj
	INNER JOIN pp_companies pc ON pc.ID = pj.company_ID
	WHERE pj.city = param_city AND pj.sts = 'active' AND pc.sts = 'active'
	ORDER BY pj.dated DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `job_search_by_industry`
-- ----------------------------
DROP PROCEDURE IF EXISTS `job_search_by_industry`;
delimiter ;;
CREATE  PROCEDURE `job_search_by_industry`(IN param VARCHAR(255), from_limit INT(5), to_limit INT(5))
BEGIN
	SELECT pj.ID, pj.job_title, pj.job_slug, pj.employer_ID, pj.company_ID, pj.job_description, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo, pc.company_slug
	FROM pp_post_jobs pj
	INNER JOIN pp_companies pc ON pc.ID = pj.company_ID
	WHERE pj.industry_ID = param AND pj.sts = 'active' AND pc.sts = 'active'
	ORDER BY pj.dated DESC
	LIMIT from_limit, to_limit;
END
 ;;
delimiter ;

-- ----------------------------
--  Procedure structure for `search_posted_jobs`
-- ----------------------------
DROP PROCEDURE IF EXISTS `search_posted_jobs`;
delimiter ;;
CREATE  PROCEDURE `search_posted_jobs`(IN where_condition VARCHAR(255), from_limit INT(11), to_limit INT(11))
BEGIN
	#Routine body goes here...
SET @query = "SELECT pj.ID, pj.job_title,  pj.job_slug, pj.employer_ID, pj.company_ID, pj.city, pj.dated, pj.last_date, pj.is_featured, pj.sts, pc.company_name, pc.company_logo
	FROM `pp_post_jobs` pj
	LEFT JOIN pp_companies AS pc ON pj.company_ID=pc.ID
	WHERE
";

SET @where_clause = CONCAT(where_condition);
SET @after_where_clause = CONCAT("ORDER BY ID DESC LIMIT ",from_limit,", ",to_limit,"");
SET @full_search_clause = CONCAT(@where_clause, @after_where_clause);
SET @query = CONCAT(@query, @full_search_clause);

PREPARE stmt FROM @query;
EXECUTE stmt;

END
 ;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
