<?php

echo "\n[ #################### Start Json Make ####################### ] \n";

$aData = array();


// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["dataFileDescription"] = "* 데이터 내용 : 연락처\r\n* 데이터 설명\r\n  - id : 아이디\r\n  - name :  이름\r\n  - username :  성\r\n  - email :  이메일 주소\r\n  - address : 주소\r\n    - street :  거리\r\n    - suite :  세부 주소\r\n    - city :  도시\r\n    - zipcode :  우편번호\r\n    - geo : 위경도\r\n    -   lat :  위도\r\n    -   lng :  경도\r\n  - phone :  전화번호\r\n  - website :  홈페이지\r\n  - company : 회사 정보\r\n    - name :  회사명\r\n    - catchPhrase :  회사 구호\r\n    - bs :  회사 종류 태그"; 
$aDefine["projectMap"][]        = array("requiredLevel" => "중급", "encourageTitle" => "Python의 json 라이브러리 다루기"); 
$aDefine["title"]               = "json 데이터 파싱하기"; 


// 프로젝트 역량 정의 파일
//echo "\n 프로젝트 역량 정의파일 \n";
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 642,    "level" => "",    "title" => "도전의식");
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 240,    "level" => "",    "title" => "Form");
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 246,    "level" => "",    "title" => "Parse");

$aData["PBL_LV_1_1"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel) ;



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
    $aFileList[$sFileName]["define"]     = $aData["define"];
    $aFileList[$sFileName]["capability"] = $aData["capability"];

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
