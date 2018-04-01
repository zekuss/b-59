CREATE TABLE `b_report` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `OWNER_ID` varchar(20) NULL,
  `TITLE` varchar(255) NOT NULL,
  `DESCRIPTION` text NULL,
  `CREATED_DATE` datetime NOT NULL,
  `CREATED_BY` int(11) unsigned NOT NULL,
  `SETTINGS` text NULL,
  `MARK_DEFAULT` smallint unsigned NULL,
  PRIMARY KEY (`ID`),
  KEY `OWNER_ID` (`OWNER_ID`)
);
CREATE TABLE IF NOT EXISTS `b_report_sharing` (
  ID int(11) NOT NULL AUTO_INCREMENT,
  REPORT_ID int(11) NOT NULL DEFAULT 0,
  ENTITY varchar(50) NOT NULL,
  RIGHTS varchar(50) NOT NULL,
  PRIMARY KEY (ID),
  INDEX IX_ENTITY (ENTITY),
  INDEX IX_REPORT_ID (REPORT_ID)
);