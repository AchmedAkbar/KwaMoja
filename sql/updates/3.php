<?php

AddColumn('address5', 'debtorsmaster', 'VARCHR(20)', 'NOT NULL', '', 'address4', $db);
AddColumn('address6', 'debtorsmaster', 'VARCHR(15)', 'NOT NULL', '', 'address5', $db);

AddColumn('braddress5', 'custbranch', 'VARCHR(20)', 'NOT NULL', '', 'braddress4', $db);
AddColumn('braddress6', 'custbranch', 'VARCHR(15)', 'NOT NULL', '', 'braddress5', $db);

AddColumn('brpostaddress5', 'custbranch', 'VARCHR(20)', 'NOT NULL', '', 'brpostaddress4', $db);
AddColumn('brpostaddress6', 'custbranch', 'VARCHR(15)', 'NOT NULL', '', 'brpostaddress5', $db);

AddColumn('deladd4', 'locations', 'VARCHR(40)', 'NOT NULL', '', 'deladd3', $db);
AddColumn('deladd5', 'locations', 'VARCHR(20)', 'NOT NULL', '', 'deladd4', $db);
AddColumn('deladd6', 'locations', 'VARCHR(15)', 'NOT NULL', '', 'deladd5', $db);

AddColumn('deladd5', 'purchorders', 'VARCHR(20)', 'NOT NULL', '', 'deladd4', $db);
AddColumn('deladd6', 'purchorders', 'VARCHR(15)', 'NOT NULL', '', 'deladd5', $db);
AddColumn('contact', 'purchorders', 'VARCHR(30)', 'NOT NULL', '', 'deladd6', $db);

AddColumn('deladd5', 'recurringsalesorders', 'VARCHR(20)', 'NOT NULL', '', 'deladd4', $db);
AddColumn('deladd6', 'recurringsalesorders', 'VARCHR(15)', 'NOT NULL', '', 'deladd5', $db);
ChangeColumnType('deladd2', 'recurringsalesoreders', 'VARCHAR(40)', 'NOT NULL', '', $db);
ChangeColumnType('deladd3', 'recurringsalesoreders', 'VARCHAR(40)', 'NOT NULL', '', $db);
ChangeColumnType('deladd4', 'recurringsalesoreders', 'VARCHAR(40)', 'NOT NULL', '', $db);

AddColumn('deladd5', 'salesorders', 'VARCHR(20)', 'NOT NULL', '', 'deladd4', $db);
AddColumn('deladd6', 'salesorders', 'VARCHR(15)', 'NOT NULL', '', 'deladd5', $db);
ChangeColumnType('deladd2', 'salesorders', 'VARCHAR(40)', 'NOT NULL', '', $db);
ChangeColumnType('deladd3', 'salesorders', 'VARCHAR(40)', 'NOT NULL', '', $db);
ChangeColumnType('deladd4', 'salesorders', 'VARCHAR(40)', 'NOT NULL', '', $db);

AddColumn('address5', 'suppliers', 'VARCHR(20)', 'NOT NULL', '', 'address4', $db);
AddColumn('address6', 'suppliers', 'VARCHR(15)', 'NOT NULL', '', 'address5', $db);

ChangeColumnName('regoffice3', 'companies', 'VARCHAR(40)', 'NUT NULL', '', 'regoffice4', $db);
ChangeColumnName('regoffice2', 'companies', 'VARCHAR(40)', 'NUT NULL', '', 'regoffice3', $db);
ChangeColumnName('regoffice1', 'companies', 'VARCHAR(40)', 'NUT NULL', '', 'regoffice2', $db);
ChangeColumnName('postaladdress', 'companies', 'VARCHAR(40)', 'NUT NULL', '', 'regoffice1', $db);
AddColumn('regoffice5', 'companies', 'VARCHR(20)', 'NOT NULL', '', 'regoffice4', $db);
AddColumn('regoffice6', 'companies', 'VARCHR(15)', 'NOT NULL', '', 'regoffice5', $db);


UpdateDBNo(basename(__FILE__, '.php'), $db);

?>