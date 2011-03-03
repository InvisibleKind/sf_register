<?php

########################################################################
# Extension Manager/Repository config file for ext "sf_register".
#
# Auto generated 03-02-2011 09:19
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FeUser Register',
	'description' => 'Offers the possibility to maintain the fe_user data in frontend by the user self.',
	'category' => 'Sebastian Fischer',
	'shy' => 0,
	'version' => '1.0.1',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'fe_users',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Sebastian Fischer',
	'author_email' => 'typo3@evoweb.de',
	'author_company' => 'evoweb',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.3.0-0.0.0',
			'extbase' => '1.2.0-1.2.1',
			'fluid' => '1.2.0-1.2.1',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:28:{s:12:"ext_icon.gif";s:4:"c675";s:17:"ext_localconf.php";s:4:"79f0";s:14:"ext_tables.php";s:4:"6b33";s:14:"ext_tables.sql";s:4:"bde7";s:39:"Classes/Controller/FeuserController.php";s:4:"d3d8";s:45:"Classes/Controller/FeuserCreateController.php";s:4:"81c1";s:43:"Classes/Controller/FeuserEditController.php";s:4:"2085";s:47:"Classes/Controller/FeuserPasswordController.php";s:4:"7ff1";s:37:"Classes/Domain/Model/FrontendUser.php";s:4:"3d22";s:52:"Classes/Domain/Repository/FrontendUserRepository.php";s:4:"93f4";s:46:"Classes/Domain/Validator/PasswordValidator.php";s:4:"bc15";s:42:"Classes/Domain/Validator/UserValidator.php";s:4:"90ec";s:40:"Classes/Validation/ValidatorResolver.php";s:4:"a4d7";s:32:"Configuration/FlexForms/form.xml";s:4:"33dc";s:34:"Configuration/TypoScript/setup.txt";s:4:"e698";s:40:"Resources/Private/Language/locallang.xml";s:4:"34c3";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"f5e2";s:43:"Resources/Private/Partials/actionlinks.html";s:4:"1969";s:42:"Resources/Private/Partials/formErrors.html";s:4:"cc71";s:53:"Resources/Private/Templates/FeuserCreate/Confirm.html";s:4:"9f38";s:50:"Resources/Private/Templates/FeuserCreate/Form.html";s:4:"951c";s:53:"Resources/Private/Templates/FeuserCreate/Preview.html";s:4:"0f5e";s:50:"Resources/Private/Templates/FeuserCreate/Save.html";s:4:"ce5a";s:48:"Resources/Private/Templates/FeuserEdit/Form.html";s:4:"a6a7";s:51:"Resources/Private/Templates/FeuserEdit/Preview.html";s:4:"447c";s:48:"Resources/Private/Templates/FeuserEdit/Save.html";s:4:"c9f3";s:52:"Resources/Private/Templates/FeuserPassword/Form.html";s:4:"c6ca";s:52:"Resources/Private/Templates/FeuserPassword/Save.html";s:4:"cfb8";}',
);

?>