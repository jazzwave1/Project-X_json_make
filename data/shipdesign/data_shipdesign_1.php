<?php
$aData = array();

//{{{UC_APBL_ShipDesign_1_1}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV1_선박설계_Mission_1"; 
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["projectMap"][]        = array("requiredLevel" => "", "projectTitle" => ""); 
$aDefine["dataFileDescription"] = ""; 


// 프로젝트 역량 정의 파일
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 0,    "level" => "",    "title" => "");


// 프로젝트 기술 파일
$aTech = array();
$aTech["developmentPlatform"]   = "미션 진행 시 필수 옵션
\r\n 1.	기본도를 제공함
\r\n  A.	선체선도(Lines)
\r\n  B.	일반배치도(GA)
\r\n 2.	Rule 계산을 위한 추가 정보를 제공함
\r\n  A.	Design Hull Girder Still Water Bending Moment & Shear Force
\r\n  B.	기타 계산 시 필요한 나머지 데이터는 임의의 값으로 가정함
";

$aTech["requirement"]           = "Subject - 1 [ 기본도 해석 ] 
\r\n 1.	제공되는 기본도 선체선도 , 일반배치도 에 대해서 조사하고 레포트 및 발표 자료를 준비합니다.  
\r\n 2.	제공되는 기본도를 기준으로 Rule 계산용 Program을 사용하여 중앙횡단면도를 작성합니다. 
\r\n  A.	미션 선종의 선체 중앙 횡단면 형상을 결정합니다. 
\r\n  B.	종강도를 검토하여 주요부재의 형상과 Scantling을 도출합니다. 
\r\n  C.	계산을 진행 하는 과정과 결과를 레포트 작성 및 발표자료에 추가 합니다.
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n 
\r\n해당 미션의 목표
\r\n  1.	기본도 해석 ,구조역학에 대한 기본지식을 학습 할 수 있습니다.
\r\n  2.	구조해석을 통한 구조의 타당성을 학습 할 수 있습니다.  
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	각 기본도에 대한 설명이 명확한지 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	계산을 통해서 나올 수 있는 수치 데이터를 확인 합니다. ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	중앙횡단면의 부재 Size를 결정하는 기준은 무엇인가요?");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_ShipDesign_1_1"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


?>
