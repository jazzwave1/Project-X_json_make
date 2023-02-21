<?php

echo "\n[ #################### Start Json Make ####################### ] \n";

// get File list
$dir =  "./data/shipdesign";
$aFile = _getFilelist($dir);

foreach($aFile as $key=>$val)
{
	include_once ($dir."/".$val); // set aData in php file
	
    // make json file
	foreach($aData as $filename => $data)
	{
		$aResult = _setFile($filename, $data);

		foreach($aResult as $key=>$val)
		{
			foreach($val as $k=>$v)
			{
				$sFileName = $key."_".$k.".json";
				_makeFile($sFileName, json_encode($v, JSON_UNESCAPED_UNICODE));

				echo "\n[[[[[[[[[[[[[ ",$sFileName." ]]]]]]]]]]]]]";
				//echo "\n 최종결과물\n"; 
				//echo "\n".json_encode($v, JSON_UNESCAPED_UNICODE ). "\n";
				//echo "\n##########################################\n";
			}
		}

	}	
}
die;




function _getFilelist($dir)
{
	$files = scandir($dir, SCANDIR_SORT_DESCENDING);

	$aFile = array();

	foreach($files as $key=>$val)
	{
		if(strstr($val,'php') && !strstr($val,'swp'))
		{
			$aFile[] = $val;
		}
	}

	return $aFile;
}
function _setFile($sFileName, $aData)
{
    $aFileList = array();
    $aFileList[$sFileName]["define"]        = $aData["define"];
    $aFileList[$sFileName]["capability"]    = $aData["capability"];
    $aFileList[$sFileName]["tech"]          = $aData["tech"];
    $aFileList[$sFileName]["assessment"]    = $aData["assessment"];

    return $aFileList;
}
function _makeFile($sFileName , $sJson)
{
    $sJsonFile = fopen("./json/".$sFileName, "w");
    fwrite($sJsonFile, $sJson);
    fclose($sJsonFile);
    
    return;
}
?>
