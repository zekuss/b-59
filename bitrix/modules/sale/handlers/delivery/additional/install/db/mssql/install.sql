CREATE TABLE B_SALE_HDALE
(
	CODE VARCHAR(100) NOT NULL,
	ID INT NOT NULL,
	NAME VARCHAR(100) NOT NULL,
	PCITY VARCHAR(100) NULL,
	PSUBREGION VARCHAR(100) NULL,
	PREGION VARCHAR(100) NULL,
	PCOUNTRY VARCHAR(100) NULL,
	LOCATION_ID INT NULL,
	LOCATION_EXT_ID INT NULL
)
GO
ALTER TABLE B_SALE_HDALE ADD CONSTRAINT PK_B_SALE_HDALE PRIMARY KEY (CODE)
GO
CREATE INDEX IX_BSHDALE_LOCATION_ID ON B_SALE_HDALE (LOCATION_ID)
GO