<?php
$aData = array();


//{{{UC_APBL_SmartShip_1_2}}}//

// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV1_스마트선박_Mission_2"; 
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["projectMap"][]        = array("requiredLevel" => "", "projectTitle" => ""); 
$aDefine["dataFileDescription"] = ""; 


// 프로젝트 역량 정의 파일
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 0,    "level" => "",    "title" => "");


// 프로젝트 기술 파일
$aTech = array();
$aTech["developmentPlatform"]   = "미션 진행 시 필수 옵션
\r\n 1.	아두이노
\r\n 2.	각종 센싱 모듈
\r\n 3.	C 언어의 기초 지식
";
$aTech["requirement"]           = "Subject - 1 [ IOT 기술에 대한 기초 학습 ] [ 데이터 수집 , 로컬 저장 , 분석 ] 
\r\n 1.	아두이노에서 센서를 통해서 수집되는 자료를 로컬 디스크에 저장을 해 봅니다.
\r\n 2.	로컬 디스크에 저장시 저장할 데이터에 대한 프로토콜(데이터저장형식)을 스스로 정의 합니다. 
\r\n 해당 프로토콜 정의 부분은 왜 ? 그렇게 데이터를 저장해야 되는지 이유에 대해서 스스로 정의 하고 레포트를 작성합니다.
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n 
\r\n 해당 미션의 목표
\r\n 1.	센싱으로 수집된 데이터를 로컬 하드디스크에 저장을 할 수 있습니다. 
\r\n 2.	데이터 저장 시 활용을 생각한 프로토콜을 정의 할 수 있습니다.  
\r\n 3.	수집된 데이터를 스스로 확인 하고 기술적인 정의를 내릴 수 있습니다. 
";
$aTech["constraints"]           = "";
$aTech["testCase"]              = "";
$aTech["externalLecture"][]     = array("externalLectureLink"=>"","externalLectureTitle"=>"","externalLectureContent"=>"");

// 프로젝트 평가 가이드 파일
$aAssessment["evaluationType"][]                            = array("type"=>"00002","type"=>"00003");
$aAssessment["evaluationType01"]["reEvaluationLimitDay"]    = "";
$aAssessment["evaluationType01"]["evaluationWeight"]        = array("specialistEvaluation"=>"","workEvaluation"=>"");
$aAssessment["evaluationType01"]["similarityCheck"]         = "";
$aAssessment["evaluationType01"]["instcImgId"]              = "";
$aAssessment["evaluationType01"]["language"]                = "";
$aAssessment["evaluationType01"]["evaluationPoint"]         = "";
$aAssessment["evaluationType01"]["compileEnvironment"]      = "";
$aAssessment["evaluationType01"]["compileVersion"]          = "";
$aAssessment["evaluationType01"]["instcRsrcTypeCd"]         = "";
$aAssessment["evaluationType01"]["uriInfo"]                 = "";
$aAssessment["evaluationType01"]["xp"]                      = "";
$aAssessment["evaluationType01"]["codeCoverage"]            = "";
$aAssessment["evaluationType01"]["evaluationBonusPoint"]    = "";

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본평가] 1.	학습자의 문제 해결방식에 대한 내용을 확인 합니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본평가] 2.	왜 ? 라는 질문에 대한 내용을 확인합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본평가] 3.	각 실행 액션 시퀀스 별로 ”왜?” 라는 질문에 대한 스스로의 답을 확인 합니다. ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	센싱된 데이터들이 로컬 저장소에 정상적으로 저장되었는지 확인 합니다");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	기록된 데이터들을 시간과 장소 스스로 선택한 데이터 저장 방식이 어떤것인지 확인 합니다. (파싱하고, 기본정리가 된 부분이 있어야 합니다. ) ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	시각화에 사용한 차트는 어떤 목적을 가지고 선정하였나요");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 2.	데이터를 정보로 치환하고 나서 스스로 어떤 결론을 얻었나요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 3.	차트 제작할 때 그래픽 적으로 선과 색 등에 어떤 중요 포인트를 주었나요?");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 1.	선박에서도 센서로부터 수집된 정보는 자동제어시스템에 30일 이상의 Data가 저장됩니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 2.	센서의 Data가 항목별, 시간별로 저장되어 Trend 형태로 분석이 가능하며, 수집된 Data는 선박 이상 감지, 유지 보수, 분석용으로 활용됩니다.");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_1_2"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


?>
