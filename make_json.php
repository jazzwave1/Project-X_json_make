<?php

echo "\n[ #################### Start Json Make ####################### ] \n";


require "./data/data_config.php";

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
