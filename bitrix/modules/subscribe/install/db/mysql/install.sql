CREATE TABLE b_list_rubric
(
	ID		int(11)		NOT NULL auto_increment,
	LID		CHAR(2)		NOT NULL REFERENCES b_lang (LID),
	CODE		VARCHAR(100)	NULL,
	NAME		VARCHAR(100)	NULL,
	DESCRIPTION	TEXT		NULL,
	SORT		int(11)		DEFAULT 100 NOT NULL,
	ACTIVE		CHAR(1)		DEFAULT 'Y' NOT NULL,
	AUTO		char(1)		DEFAULT 'N' NOT NULL,
	DAYS_OF_MONTH	VARCHAR(100)	NULL,
	DAYS_OF_WEEK	VARCHAR(15)	NULL,
	TIMES_OF_DAY	VARCHAR(255)	NULL,
	TEMPLATE	VARCHAR(100)	NULL,
	LAST_EXECUTED	datetime	NULL,
	VISIBLE		char(1)		DEFAULT 'Y' NOT NULL,
	FROM_FIELD	VARCHAR(255)	NULL,
	PRIMARY KEY (ID)
);
CREATE TABLE b_subscription
(
	ID		int(11)		NOT NULL auto_increment,
	DATE_INSERT	DATETIME	NOT NULL,
	DATE_UPDATE	DATETIME	NULL,
	USER_ID		int(11)		NULL REFERENCES b_user (ID),
	ACTIVE		CHAR(1)		DEFAULT 'Y' NOT NULL,
	EMAIL		VARCHAR(255)	NOT NULL,
	FORMAT		VARCHAR(4)	DEFAULT 'text' NOT NULL,
	CONFIRM_CODE	VARCHAR(8)	NULL,
	CONFIRMED	CHAR(1)		DEFAULT 'N' NOT NULL,
	DATE_CONFIRM	DATETIME	NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE UK_SUBSCRIPTION_EMAIL (EMAIL, USER_ID),
	index IX_DATE_CONFIRM(CONFIRMED, DATE_CONFIRM)
);
CREATE TABLE b_subscription_rubric
(
	SUBSCRIPTION_ID	int(11) NOT NULL REFERENCES b_subscription (ID),
	LIST_RUBRIC_ID	int(11) NOT NULL REFERENCES b_list_rubric (ID),
	UNIQUE UK_SUBSCRIPTION_RUBRIC (SUBSCRIPTION_ID,LIST_RUBRIC_ID)
);
CREATE TABLE b_posting
(
	ID		INT(11)		NOT NULL auto_increment,
	TIMESTAMP_X	TIMESTAMP	NOT NULL default current_timestamp on update current_timestamp,
	STATUS		CHAR(1)		DEFAULT 'D' NOT NULL,
	VERSION		CHAR(1)		NULL,
	DATE_SENT	DATETIME	NULL,
	SENT_BCC	mediumtext	NULL,
	FROM_FIELD	VARCHAR(255)	NOT NULL,
	TO_FIELD	VARCHAR(255)	NULL,
	BCC_FIELD	mediumtext	NULL,
	EMAIL_FILTER	VARCHAR(255)	NULL,
	SUBJECT		VARCHAR(255)	NOT NULL,
	BODY_TYPE	VARCHAR(4)	DEFAULT 'text' NOT NULL,
	BODY		mediumtext	NOT NULL,
	DIRECT_SEND	CHAR(1)		DEFAULT 'N' NOT NULL,
	CHARSET		VARCHAR(50)	NULL,
	MSG_CHARSET	VARCHAR(255)	NULL,
	SUBSCR_FORMAT	VARCHAR(4)	NULL,
	ERROR_EMAIL	mediumtext	NULL,
	AUTO_SEND_TIME	DATETIME	NULL,
	BCC_TO_SEND	mediumtext	NULL,
	PRIMARY KEY (ID)
);
CREATE TABLE b_posting_email
(
	ID INT(11) NOT NULL auto_increment,
	POSTING_ID INT(11) NOT NULL,
	STATUS CHAR(1) NOT NULL,
	EMAIL VARCHAR(255) NOT NULL,
	SUBSCRIPTION_ID INT(11),
	USER_ID INT(11),
	PRIMARY KEY (ID),
	INDEX ix_posting_email_status (POSTING_ID, STATUS),
	INDEX ix_posting_email_email (POSTING_ID, EMAIL)
);
CREATE TABLE b_posting_rubric
(
	POSTING_ID	INT(11) NOT NULL REFERENCES b_posting (ID),
	LIST_RUBRIC_ID	INT(11) NOT NULL REFERENCES b_list_rubric (ID),
	UNIQUE UK_POSTING_POSTING_RUBRIC (POSTING_ID,LIST_RUBRIC_ID)
);
CREATE TABLE b_posting_group
(
	POSTING_ID	INT(11) NOT NULL REFERENCES b_posting (ID),
	GROUP_ID	INT(11) NOT NULL REFERENCES b_group (ID),
	UNIQUE UK_POSTING_POSTING_GROUP (POSTING_ID,GROUP_ID)
);
CREATE TABLE b_posting_file
(
	POSTING_ID	INT(11) NOT NULL REFERENCES b_posting (ID),
	FILE_ID		INT(11) NOT NULL REFERENCES b_file (ID),
	UNIQUE KEY UK_POSTING_POSTING_FILE (POSTING_ID,FILE_ID)
);
