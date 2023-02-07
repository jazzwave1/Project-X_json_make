<?php
$aData = array();


// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV1_스마트선박_Mission_1"; 
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
";
$aTech["requirement"]           = "Subject - 1 [ IOT 기술에 대한 기초 학습 ] [ 데이터 수집 , 로컬 저장 , 분석 ]
\r\n 1.	아두이노에 대해서 조사하고 레포트 및 발표 자료를 준비합니다.
\r\n 2.	오픈소스 , 오픈하드웨어 라는 개념에 대해서 조사하고 발표 자료를 준비합니다.
\r\n 3.	센서종류와 센서에서 수집되는 데이터에 대해서 조사하고 레포트 및 발표 자료를 준비합니다.
\r\n 4.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 5.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다.
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
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	IOT 에 대한 기본 개념을 학습되었는지 확인 합니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	센싱 데이터들을 명확히 정의 하고 수집과정을 이해 하였는지 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 3.	디지털 데이터와 아날로그 데이터를 구분할 수 있는 지 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 4.	시계열 데이터와 state 데이터를 구분할 수 있는 지 확인 합니다.  ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	아날로그 와 디지털 데이터의 차이점은 무엇인가요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 2.	C 언어로 개발을 진행시 무엇이 가장 어려웠나요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 3.	컴파일 진행시 버그들에 대해서 어떻게 해결 하였나요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 4.	변화되는 데이터 처리와 고정된 데이터 처리는 어떻게 하는게 좋을까요?");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_1_1"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


?>
