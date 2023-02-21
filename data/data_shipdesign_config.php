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



//{{{UC_APBL_ShipDesign_1_2}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV1_선박설계_Mission_2"; 
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["projectMap"][]        = array("requiredLevel" => "", "projectTitle" => ""); 
$aDefine["dataFileDescription"] = ""; 


// 프로젝트 역량 정의 파일
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 0,    "level" => "",    "title" => "");


// 프로젝트 기술 파일
$aTech = array();
$aTech["developmentPlatform"]   = "미션 진행 시 필수 옵션
\r\n1.	기본도를 제공함
\r\n A.	중앙횡단면도(MidShip) ) (Tight Bulkhead 제외)
\r\n B.	강재배치도(Con Pro)
\r\n C.	외판전개도(Shell Expansion)
";

$aTech["requirement"]           = "Subject - 1 [ 기본도 해석 ] 
\r\n 1.	제공되는 기본도 중앙횡단면도, 강재배치도, 외판전개도 에 대해서 조사하고 레포트 및 발표 자료를 준비합니다.  
\r\n 2.	제공되는 기본도를 기준으로 Tight Bulkhead의 Scantling 계산을 진행 합니다. 
\r\n  A.	Rule 계산식을 활용하여 주판 및 보강재의 Size를 결정합니다. 
\r\n  B.	계산을 진행 하는 과정과 결과를 레포트 작성 및 발표자료에 추가 합니다.
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n 
\r\n 해당 미션의 목표
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	각 기본도에 대한 설명이 명확한지 확인 합니다.");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	계산을 통해서 나올 수 있는 수치 데이터를 확인 합니다.");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	Tight Bulkhead의 보강재 배치방향 (Horizontal or Vertical)을 결정하는 기준은 무엇인가요?");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_ShipDesign_1_2"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_ShipDesign_2_1}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV2_선박설계_Mission_1"; 
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["projectMap"][]        = array("requiredLevel" => "", "projectTitle" => ""); 
$aDefine["dataFileDescription"] = ""; 


// 프로젝트 역량 정의 파일
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 0,    "level" => "",    "title" => "");


// 프로젝트 기술 파일
$aTech = array();
$aTech["developmentPlatform"]   = "미션 진행 시 필수 옵션
\r\n1.	기본도를 제공함
\r\n A.	선체선도(Lines)
\r\n B.	일반배치도(GA) 
\r\n C.	중앙횡단면도(MidShip)
\r\n D.	강재배치도(Con Pro)
\r\n E.	외판전개도(Shell Expansion)
";

$aTech["requirement"]           = "Subject - 1 [ 구조도 작성 ] 
\r\n 1.	선저구조도, 갑판구조도를 작성합니다. 
\r\n 2.	구조도 작성시 베이스로 사용한 기본도를 추가하고 구조도 작성시 학습한 내용을 기록합니다.
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n
\r\n해당 미션의 목표
\r\n 1.	기본도 해석 ,구조역학에 대한 기본지식을 학습 할 수 있습니다.
\r\n 2.	구조해석을 통한 구조의 타당성을 학습 할 수 있습니다.  

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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	각 구조도에 대한 설명이 명확한지 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	계산을 통해서 나올 수 있는 수치 데이터를 확인 합니다.  ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	각 구획의 접근(Access) 경로를 결정하는 기준은 무엇인가요? 참고한 Regulation이 있나요?");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 2.	주판재의 Seam 배치 시 고려해야 하는 사항은 무엇인가요?");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_ShipDesign_2_1"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_ShipDesign_2_2}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV2_선박설계_Mission_2"; 
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["projectMap"][]        = array("requiredLevel" => "", "projectTitle" => ""); 
$aDefine["dataFileDescription"] = ""; 


// 프로젝트 역량 정의 파일
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 0,    "level" => "",    "title" => "");


// 프로젝트 기술 파일
$aTech = array();
$aTech["developmentPlatform"]   = "미션 진행 시 필수 옵션
\r\n1.	기본도를 제공함
\r\n A.	선체선도(Lines)
\r\n B.	일반배치도(GA) 
\r\n C.	중앙횡단면도(MidShip)
\r\n D.	강재배치도(Con Pro)
\r\n E.	외판전개도(Shell Expansion)
";

$aTech["requirement"]           = "Subject - 1 [ 구조도 작성 ] 
\r\n 1.	선수미구조도 를  작성합니다. 
\r\n 2.	구조도 작성시 베이스로 사용한 기본도를 추가하고 구조도 작성시 학습한 내용을 기록합니다.
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n 
\r\n해당 미션의 목표
\r\n 1.	기본도 해석 ,구조역학에 대한 기본지식을 학습 할 수 있습니다.
\r\n 2.	구조해석을 통한 구조의 타당성을 학습 할 수 있습니다.  
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	각 구조도에 대한 설명이 명확한지 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	계산을 통해서 나올 수 있는 수치 데이터를 확인 합니다.  ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	작성된 선수미구조도에 추가로 반영되어야 할 사항은 무엇인가요?");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_ShipDesign_2_2"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_ShipDesign_3_1}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV3_선박설계_Mission_1"; 
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["projectMap"][]        = array("requiredLevel" => "", "projectTitle" => ""); 
$aDefine["dataFileDescription"] = ""; 


// 프로젝트 역량 정의 파일
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 0,    "level" => "",    "title" => "");


// 프로젝트 기술 파일
$aTech = array();
$aTech["developmentPlatform"]   = "미션 진행 시 필수 옵션
\r\n 1.	AM Tool (Aveva Marine)
";

$aTech["requirement"]           = "Subject - 1 [ 제작 ] 
\r\n 1.	AM(Aveva Marine) Tool 을 설치하고 기본 동작 기능을 학습합니다. 
\r\n 2.	앞 미션에서 작업했던 구조도중 하나를 선택하여 AM을 이용하여 3D 모델링을 진행 합니다. 
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 

\r\n해당 미션의 목표
\r\n 1.	3D Modeling Tool 의 기본 기능에 대해서 학습 할 수 있습니다.
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	기본적인 모델링을 구현 하였는지 확인 합니다.  ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	Topology Point를 활용할 때의 장점이 무엇인가요? ");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_ShipDesign_3_1"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_ShipDesign_3_2}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV3_선박설계_Mission_2"; 
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["projectMap"][]        = array("requiredLevel" => "", "projectTitle" => ""); 
$aDefine["dataFileDescription"] = ""; 


// 프로젝트 역량 정의 파일
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 0,    "level" => "",    "title" => "");


// 프로젝트 기술 파일
$aTech = array();
$aTech["developmentPlatform"]   = "미션 진행 시 필수 옵션
\r\n 1.	1/50 모델
\r\n 2.	2 blocks 제작 진행
";

$aTech["requirement"]           = "Subject - 1 [ 제작 ] 
\r\n 1.	중앙부구조 를 제작 합니다. 
\r\n 2.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 3.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n 
\r\n해당 미션의 목표
\r\n 1.	도면의 해석 능력을 극대화 할 수 있습니다. 
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	제작한 모델이 설계도와 동일하게 제작이 되었는지 확인 합니다.");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	해당 구조의 Mould(두께 방향) 개념이 어떻게 되나요? ");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_ShipDesign_3_2"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;


//{{{UC_APBL_ShipDesign_3_3}}}//
// 프로젝트 정의 파일 
//echo "\n 프로젝트 정의파일 \n";
$aDefine = array();
$aDefine["title"]               = "LV3_선박설계_Mission_3"; 
$aDefine["encourageMap"][]      = array("requiredLevel" => "", "encourageTitle" => ""); 
$aDefine["projectMap"][]        = array("requiredLevel" => "", "projectTitle" => ""); 
$aDefine["dataFileDescription"] = ""; 


// 프로젝트 역량 정의 파일
$aCapabilityLevel = array();
$aCapabilityLevel["capabilityLevel"][] = array("code"  => 0,    "level" => "",    "title" => "");


// 프로젝트 기술 파일
$aTech = array();
$aTech["developmentPlatform"]   = "미션 진행 시 필수 옵션
\r\n 1.	FE Gate Tool
";

$aTech["requirement"]           = "Subject - 1 [ 제작 ] 
\r\n 1.	FE-Gate Tool 을 설치하고 기본 동작 기능을 학습합니다. 
\r\n 2.	앞 미션에서 작업했던 구조도중 하나를 선택하여 AM을 이용하여 3D 모델링을 진행 합니다. 
\r\n 3.	자신이 학습 진행 시 참고 했던 사이트에 대한 기록을 학습기록지에 작성합니다.
\r\n 4.	자신이 학습 진행 시 실제 누구와 얼마의 시간을 투자 했는지에 대해서 학습 기록지에 작성합니다. 
\r\n 

\r\n해당 미션의 목표
\r\n 1.	FE Gate Tool 의 기본 기능에 대해서 학습 할 수 있습니다.
\r\n 2.	기본적인 구조역학에 대해서 학습 할 수 있습니다.
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

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 1.	FE Gate Tool 을 이용해서 나온 데이터에 대한 명확한 기준을 확인 합니다. ");
$aAssessment["evaluationQuestion"][]                        = array("question"=>"[미션평가] 2.	산출물의 보강재는 형상에 대한 레포트에 대해서 확인 합니다. ");

$aAssessment["evaluationQuestion"][]                        = array("question"=>"[기본질문] 1.	보강재의 형상에 따른 Boundary Condition 적용 기준이 무엇인가요?");

$aAssessment["evaluationType03"]                            = array("evaluationFulfillTime"=>"", "evaluationSelectType"=>"","evaluationNumber"=>"");
$aAssessment["evaluationType02"]                            = array("evaluatorTargetScope"=>"","evaluationFulfillTime"=>"","evaluationSelectType"=>"","evaluationNumber"=>"");


// make file setting 
$aData["UC_APBL_ShipDesign_3_3"] = array("define" => $aDefine ,"capability" => $aCapabilityLevel , "tech"=>$aTech , "assessment"=>$aAssessment) ;




?>
