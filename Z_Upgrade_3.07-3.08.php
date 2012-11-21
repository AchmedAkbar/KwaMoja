<?php
/* $Id$*/
//$PageSecurity = 15;
include('includes/session.inc');
$title = _('Upgrade KwaMoja 3.071 - 3.08');
include('includes/header.inc');


prnMsg(_('This script will run perform any modifications to the database since v 3.071 required to allow the additional functionality in version 3.08 scripts'),'info');

echo "<p><form method='post' action='" . htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES,'UTF-8') . '?' . SID . "'>";
echo '<input type="hidden" name="FormID" value="' . $_SESSION['FormID'] . '" />';
echo '<input type="submit" name="DoUpgrade" value="' . _('Perform Upgrade') . '" />';
echo '</form>';

if ($_POST['DoUpgrade'] == _('Perform Upgrade')){

	$SQLScriptFile = file('./sql/mysql/upgrade3.07-3.08.sql');

	$ScriptFileEntries = sizeof($SQLScriptFile);
	$ErrMsg = _('The script to upgrade the database failed because');
	$SQL ='';
	$InAFunction = false;

	for ($i=0; $i<=$ScriptFileEntries; $i++) {

		$SQLScriptFile[$i] = trim($SQLScriptFile[$i]);

		if (mb_substr($SQLScriptFile[$i], 0, 2) != '--'
			and mb_substr($SQLScriptFile[$i], 0, 3) != 'USE'
			and mb_strstr($SQLScriptFile[$i],'/*')==FALSE
			and mb_strlen($SQLScriptFile[$i])>1){

			$SQL .= ' ' . $SQLScriptFile[$i];

			//check if this line kicks off a function definition - pg chokes otherwise
			if (mb_substr($SQLScriptFile[$i],0,15) == 'CREATE FUNCTION'){
				$InAFunction = true;
			}
			//check if this line completes a function definition - pg chokes otherwise
			if (mb_substr($SQLScriptFile[$i],0,8) == 'LANGUAGE'){
				$InAFunction = false;
			}
			if (mb_strpos($SQLScriptFile[$i],';')>0 and ! $InAFunction){
				$SQL = mb_substr($SQL,0,mb_strlen($SQL)-1);
				$result = DB_query($SQL, $db, $ErrMsg);
				$SQL='';
			}

		} //end if its a valid sql line not a comment
	} //end of for loop around the lines of the sql script


} /*Dont do upgrade */

include('includes/footer.inc');
?>
