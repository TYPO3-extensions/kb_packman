<?php

########################################################################
# Extension Manager/Repository config file for ext "kb_packman".
#
# Auto generated 11-03-2010 10:08
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Packman',
	'description' => 'Unzips or a zips files and folders (also tar.gz/tar.bz2) file in the fileadmin with a single click.',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.2.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'cm1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Bernhard Kraft',
	'author_email' => 'kraftb@kraftb.at',
	'author_company' => 'think-open',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '3.5.0-0.0.0',
			'php' => '3.0.0-0.0.0',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:19:{s:6:"README";s:4:"67e8";s:22:"class.tx_kbpackman.php";s:4:"6e74";s:26:"class.tx_kbpackman_cm1.php";s:4:"645c";s:26:"class.tx_kbpackman_dam.php";s:4:"bf9b";s:21:"ext_conf_template.txt";s:4:"cfbf";s:12:"ext_icon.gif";s:4:"bc6e";s:16:"ext_icon_alt.gif";s:4:"d017";s:17:"ext_localconf.php";s:4:"2595";s:14:"ext_tables.php";s:4:"75ca";s:13:"locallang.php";s:4:"cdb0";s:13:"cm1/clear.gif";s:4:"cc11";s:28:"cm1/cm_icon_compress_dir.gif";s:4:"bd7d";s:29:"cm1/cm_icon_compress_file.gif";s:4:"edb6";s:22:"cm1/cm_icon_unpack.gif";s:4:"8074";s:32:"cm1/cm_icon_unpack_overwrite.gif";s:4:"8074";s:12:"cm1/conf.php";s:4:"b710";s:13:"cm1/index.php";s:4:"63c6";s:17:"cm1/locallang.php";s:4:"6693";s:14:"doc/manual.sxw";s:4:"4159";}',
);

?>