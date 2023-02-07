<?php
$aData = array();

//{{{UC_APBL_SmartShip_1_1}}}//
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
\r\n 
\r\n 해당 미션의 목표
\r\n 1.	아두이노를 통한 기본적인 전자 장치의 흐름을 이해 한다.
\r\n 2.	각종 센서를 통한 기본적인 센싱 데이터에 대해서 학습 한다. 
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 1.	선박에서는 이상 감지 및 자동 제어를 위해 다양한 종류의 센서를 사용하고 있습니다. 일반적으로 사용되는 센서는 아날로그 값을 계측할 수 있는 트랜스미터와 디지털 상태를 감지할 수 있는 스위치가 있습니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 2.	계측하는 데이터는 레벨, 압력, 온도, 유량 등이 있습니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] *	레벨 트랜스미터(4-20mA) : Tank 내에 청수, 해수, 연료유, 윤활유 등의 높이를 읽을 수 있음");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] *	레벨 스위치(On-Off 접점) : 일정 Level 이상 혹은 이하에서 접점의 상태가 변경되어 Level 상태 감지");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_1_1"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


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


//{{{UC_APBL_SmartShip_1_3}}}//

// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV1_스마트선박_Mission_3"; 
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
\r\n 4.	엑셀 함수 및 차트 지식
";
$aTech["requirement"]           = "Subject - 1[ IOT 기술에 대한 기초 학습 ] [ 데이터 수집 , 로컬 저장 , 분석 ] 
\r\n 1.	수집된 데이터를 엑셀로 옮겨서 시각화를 진행 합니다. 
\r\n 2.	본인이 수집된 데이터를 인포그래프(차트) 로 전환 하고 해당 기록에 대한 자신만의 생각을 정리 합니다. ( 레포트 및 발표 자료 작성 )
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n
\r\n해당 미션의 목표
\r\n 1.	데이터를 시각화 해 보면서 정보의 정의와 사용방법에 대해서 학습 하게 됩니다. 
\r\n 2.	정의한 데이터와 수집한 데이터 사이의 간극을 스스로 학습 하게 되고 , 추가 자료 수집으로 이어질 수 있는 사이클을 만들어 낼 수 있습니다.  
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	수집된 데이터들을 스스로 세운 가설과 부합되는 인포그래픽으로 생성되었는지 확인합니다.  ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	데이터 별로 선택한 차트가 어떤 의미를 가지고 있는지 스스로에 대한 답을 확인 합니다");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.  시각화에 사용한 차트는 어떤 목적을 가지고 선정하였나요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 2.	데이터를 정보로 치환하고 나서 스스로 어떤 결론을 얻었나요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 3.	차트 제작할 때 그래픽 적으로 선과 색 등에 어떤 중요 포인트를 주었나요?");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_1_3"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_SmartShip_1_4}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV1_스마트선박_Mission_4"; 
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
\r\n 3. 전송 모듈
\r\n 4.	C 언어의 기초 지식
";
$aTech["requirement"]           = "Subject - 1 [ IOT 기술에 대한 기초 학습 ] [ 데이터 수집 , 로컬 저장 , 분석 ] 
\r\n 1.	아두이노를 이용하여 자료를 전송하는 방법에 대해서 조사하고 레포트를 작성합니다.
\r\n 2.	아두이노를 시리얼 통신을 사용하여 데이터를 전송해 봅니다. 
\r\n 3.	아두이노를 와이파이 모듈을 이용하여 데이터를 전송해 봅니다. 
\r\n 4.	원격지로 데이터 전송시 실패 할 수 있는 경우에 대해서 조사하고 레포트 , 발표 자료를 작성 합니다. 
\r\n 5.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 6.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n  
\r\n해당 미션의 목표
\r\n 1.	데이터를 로컬이 아닌 원격지로 전송하고 저장하는 방법에 대해서 학습 할 수 있습니다. 
\r\n 2.	데이터 전송에 대한 다양한 방법에 대해서 학습 할 수 있습니다.   
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	로컬에 저장된 데이터와 원격지에 저장된 데이터가 동일한지 확인 합니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	원격지 데이터 전송시 실패 할 수 있는 경우의 수가 어떤것들이 있는지 확인 합니다");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	유선과 무선의 데이터 전송의 차이점이 무엇인가요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 2.	무선 전송시 수신부(서버) 프로그램에서 넘어오는 데이터의 필터링을 하려면 어떻게 해야 될까요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 3.	무선전송의 실패시 실패 데이터를 어떻게 구분할 수 있을까요?");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 1.	선박에서는 다양한 시스템들 간 상호 통신을 합니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 2.	선박에서 가장 범용으로 사용되는 통신 방식 및 Protocol은 아래와 같습니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 3.	통신 방식도 사전 학습하면 현업에서 도움이 되겠습니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] A.	RS422/RS485, Ethernet");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] B.	NMEA0183 (IEC61162)");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] C.	Modbus TCP/IP, Modbus RTU");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_1_4"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_SmartShip_1_5}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV1_스마트선박_Mission_5"; 
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
\r\n 3. 전송 모듈
\r\n 4.	C 언어의 기초 지식
\r\r 5.	Python 이 기초 지식
";
$aTech["requirement"]           = "Subject - 1 [ IOT 기술에 대한 기초 학습 ] [ 데이터 분석 ]
\r\n 1.	저장된 데이터를 파이썬을 이용하여 데이터 분석을 진행 해 봅니다.
\r\n 2.	데이터 분석이 이후 만들어진 그래프는 최초 엑셀을 이용해서 만들어 낸 레포트와 동일한 형태를 가져야 합니다. 
\r\n 3.	데이터 분석을 위해서 사용하는 데이터는 로컬에 저장된 데이터 , 원격지에 저장된 데이터, 각각의 버전으로 2개의 분석 자료가 나와야 합니다. 
\r\n 동일 한 결과를 원천 데이터 부분만 다르고 나머지는 동일해야 합니다.
\r\n 4.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 5.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n
\r\n해당 미션의 목표
\r\n 1.	데이터 분석에 대해서 스스로 학습하고 다양한 분석 기법들이 있는것을 확인 합니다.
\r\n 2.	분석을 위한 데이터를 확보하는 방법에 대해서 스스로 찾아 낼 수 있습니다.  
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.  엑셀 분석을 했던 내용과 동일한 결과가 나왔는지 확인 합니다. ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	분석에 사용한 파이썬 라이브러리는 무엇인가요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 2.	엑셀 분석과 파이썬 분석의 가장 큰 차이점은 무엇이라고 생각하나요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 3.	파이썬 개발을 진행시 가장 어려운 지점이 무었이었나요?");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_1_5"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_SmartShip_2_1}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV2_스마트선박_Mission_1"; 
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
\r\n 3. 전송 모듈
\r\n 4.	C 언어의 기초 지식
\r\n 5.	Python 이 기초 지식
\r\n 6. 배 구조 역학	
\r\n 7. 배 선체 설계 이해 	
";
$aTech["requirement"]           = "Subject - 1 [ IOT 기술 MVP 개발 및 적용 ] 
\r\n 1.	배에 탑재 가능한 센서들을 정의 합니다. 
\r\n 2.	각 센서의 탑재 이유와 해당 데이터의 활용 목적에 대해서 레포트 및 박표 자료를 작성합니다.
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n
\r\n해당 미션의 목표
\r\n 1.	배에서 생산되는 데이터들에 대한 정의를 할 수 있습니다.
\r\n 2.	각 데이터들을 어떻게 활용할지 스스로 정의 할 수 있습니다.
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.  실제 구현 가능한 센서인지 , 데이터 수집이 가능한지 확인 합니다  ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	배에 센서를 설치 할 때 가장 중요한 부분이 무엇일까요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 2.	센서가 파손되지 않게 하려면 어떤 장치가 더 있어야 할까요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 3.	수집하려는 데이터와 선박 센서 부착 위치는 어떻게 결정 하였나요?");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 1.	선박에서는 다양한 센서들이 사용되고 있으므로, 센서의 종류, 특징, 설치 방법 등이 학습되면 현업에서 도움이 될 것 같습니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 2.	센서의 유지 보수를 위해 필요한 장치도 같이 학습되면 좋겠습니다");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] * 압력 센서 : 3-Way Test V/V");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] * 온도 센서 : Thermo Pocket");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] * 레벨 센서 : Test Lever");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_2_1"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_SmartShip_2_2}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV2_스마트선박_Mission_2"; 
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
\r\n 3. 전송 모듈
\r\n 4.	C 언어의 기초 지식
\r\n 5.	Python 이 기초 지식
\r\n 6. 배 구조 역학	
\r\n 7. 배 선체 설계 이해 	
";
$aTech["requirement"]           = "Subject - 1 [ IOT 기술 MVP 개발 및 적용 ] 
\r\n 1.	모형 배에서 생산된 데이터를 원격지에 전송하고 기록 합니다. 
\r\n 2.	원격지로 전송 된 데이터를 가지고 인포그래프를 작성합니다. 
\r\n 3.	해당 차트들이 의미하는 것을 다음의 데이터로 구분해 봅니다. 
\r\n 1.	제작 , 관제, 운행(운영)
\r\n 4.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 5.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다.
\r\n
\r\n해당 미션의 목표
\r\n 1.	배에서 생산되는 데이터들에 대한 정의를 할 수 있습니다. 
\r\n 2.	각 데이터들을 어떻게 활용할지 스스로 정의 할 수 있습니다.  
\r\n 3.	데이터 사이클을 만들어 낼 수 있는 사고력을 키울 수 있습니다. 
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	실제 구현 가능한 센서인지 , 데이터 수집이 가능한지 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	데이터의 재 사용에 대한 정의 부분을 확인 합니다.  ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	데이터들을 수집용, 분석용, 모니터링용으로 구분해 보세요");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 1.	실제 선박에서 수집된 Data는 육상 관제 센터로 전송되어 관제 및 모니터링에 활용되고 있습니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] 2.	선박의 기자재 운용 시간 등을 분석하여 Maintenance 권고 및 운항 정보를 분석하여 운항 리포트도 제공하고 있습니다.");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_2_2"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_SmartShip_3_1}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV3_스마트선박_Mission_1"; 
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
\r\n 3. 전송 모듈
\r\n 4.	C 언어의 기초 지식
\r\n 5.	Python 이 기초 지식
\r\n 6. 배 구조 역학	
\r\n 7. 배 선체 설계 이해 	
\r\n 8. 배 운영 및 관제 모니터링 같은 융복합 지식  	
";
$aTech["requirement"]           = "Subject - 1 [ IOT 기술 BM 기반의 데이터 활용] 
\r\n 1.	배에서 기록된 데이터와 배 운영시 수집된 데이터들을 구분하고 기록, 전송하도록 개발을 진행 합니다. 
\r\n 2.	각각의 데이터들을 실시간으로 추적 확인 할 수 있는 데시보드를 개발합니다.
\r\n 3.	데시보드에는 운행 모니터링 , 위험 관제 의 카테고리를 추가하고 해당 부분에 필요한 데이터를 구분합니다. 
\r\n 4.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 5.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n해당 미션의 목표
\r\n 1.	배에서 생산되는 데이터들에 대한 정의를 할 수 있습니다. 
\r\n 2.	각 데이터들을 어떻게 활용할지 스스로 정의 할 수 있습니다.  
\r\n 3.	데이터 사이클을 만들어 낼 수 있는 사고력을 키울 수 있습니다.
\r\n 4.	융복합적인 사고력을 기반 데이터를 활용 할 수 있습니다.  
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	실제 구현 가능한 센서인지 , 데이터 수집이 가능한지 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	데이터의 재 사용에 대한 정의 부분을 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 3.	실제 BM 을 적용하여 적절하게 설계 되었는지 확인 합니다.");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	모니터링 데이터 중에서 선박의 이상신호로 감지 하려면 데이터 분석쪽에서 어떤로직이 들어 가야 하나요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 2.	이상 감지가 되었다면 어떤 조치를 취하는 로직이 필요할까요?");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[현장전문가 의견] ");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_SmartShip_3_1"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;



?>
