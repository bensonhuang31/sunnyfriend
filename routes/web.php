<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------	---------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//首頁
Route::get('/', function () {
    return view('index');
});

//關於日友
Route::view('/AboutSF/CompanyProfile.php', 'AboutSF.CompanyProfile');
Route::view('/AboutSF/ServiceAndArea.php', 'AboutSF.ServiceAndArea');
Route::view('/AboutSF/Structure.php', 'AboutSF.Structure');
Route::view('/AboutSF/ManagingTeam.php', 'AboutSF.ManagingTeam');
Route::view('/AboutSF/Organization.php', 'AboutSF.Organization');
Route::view('/AboutSF/Shareholding.php', 'AboutSF.Shareholding');
Route::view('/AboutSF/IIC.php', 'AboutSF.IIC');

//最新消息
Route::view('/News/NewsCenter.php', 'News.NewsCenter');
Route::view('/News/ImportantNews.php', 'News.ImportantNews');
Route::view('/News/WebsiteLinks.php', 'News.WebsiteLinks');
Route::view('/News/latestNews.php', 'News.latestNews');
Route::get('/News/latestNews.php','NewsController@index');
Route::get('/News/Detail/{id}','NewsController@detail');
//公司治理
Route::view('/CorporateGovernance/GovernancePreface.php', 'CorporateGovernance.GovernancePreface');
Route::view('/CorporateGovernance/Regulations.php', 'CorporateGovernance.Regulations');
Route::view('/CorporateGovernance/InternalAuditing.php', 'CorporateGovernance.InternalAuditing');
Route::view('/CorporateGovernance/BoardofDirectors.php', 'CorporateGovernance.BoardofDirectors');
Route::view('/CorporateGovernance/Diversification.php', 'CorporateGovernance.Diversification');
//投資人專區
Route::get('/Investor/IFSM.php','InvestorController@index');
Route::get('/Investor/MonthlyRevenue.php','InvestorController@revenue');
Route::get('/Investor/FinancialInformation..php','InvestorController@finance');
Route::view('/Investor/ExchangeLink.php', 'Investor.ExchangeLink');
Route::view('/Investor/DividendPolicy.php', 'Investor.DividendPolicy');
Route::view('/Investor/InvestmentCentre.php', 'Investor.InvestmentCentre');
//企業社會責任
Route::view('/CorporateSocialResponsibility/Preface.php', 'CorporateSocialResponsibility.Preface');
Route::view('/CorporateSocialResponsibility/Policy.php', 'CorporateSocialResponsibility.Policy');
Route::view('/CorporateSocialResponsibility/ResultsAndplans.php', 'CorporateSocialResponsibility.ResultsAndplans');
Route::get('/CorporateSocialResponsibility/CSRReport.php','CorporateSocialResponsibilityController@csr');
Route::get('/CorporateSocialResponsibility/VanellusLiterature.php','CorporateSocialResponsibilityController@index');
//利害關係人
Route::view('/Stakeholder/MaterialIssues.php', 'Stakeholder.MaterialIssues');
Route::view('/Stakeholder/EmployeeBenefits.php', 'Stakeholder.EmployeeBenefits');
Route::view('/Stakeholder/SMP.php', 'Stakeholder.SMP');
Route::view('/Stakeholder/GrievanceMachinery.php', 'Stakeholder.GrievanceMachinery');
Route::view('/Stakeholder/UBGM.php', 'Stakeholder.UBGM');
//環境保護

//語系
Route::get('/lang/set/{lang}', 'LanguageController@set_lang');

//後台
Route::view('/Admin', 'Admin.index');

Route::view('/Admin/CorporateSocialResponsibility/index', 'Admin.CorporateSocialResponsibility.index');
//Route::view('/Admin/CorporateSocialResponsibility/index2.php', 'Admin.CorporateSocialResponsibility.index2');

Route::view('/Admin/Environmentprotect/index', 'Admin.Environmentprotect.index');
Route::view('/Admin/Environmentprotect/index2', 'Admin.Environmentprotect.index2');

Route::view('/Admin/News/index', 'Admin.News.index');

Route::view('/Admin/Investor/index', 'Admin.Investor.index');
Route::view('/Admin/Investor/index2', 'Admin.Investor.index2');
Route::view('/Admin/Investor/index3', 'Admin.Investor.index3');

Route::group(['middlewareGroups' => ['web']], function () {
    Route::get('/Admin/Investor/index', 'InvestorController@AdminShareholdersIndex');
    Route::post('/Admin/Investor/index','InvestorController@AdminShareholdersCreate');
    Route::post('/Admin/Investor/index/edit','InvestorController@AdminShareholdersEdit');
    Route::post('/Admin/Investor/index/delete','InvestorController@AdminShareholdersDelete');
    

    Route::get('/Admin/Investor/index2', 'InvestorController@AdminRevenueIndex');
    Route::post('/Admin/Investor/index2','InvestorController@AdminRevenueCreate');
    Route::post('/Admin/Investor/index2/edit','InvestorController@AdminRevenueEdit');
    Route::post('/Admin/Investor/index2/delete','InvestorController@AdminRevenueDelete');


    Route::get('/Admin/Investor/index3', 'InvestorController@AdminFinanceIndex');
    Route::post('/Admin/Investor/index3','InvestorController@AdminFinanceCreate');
    Route::post('/Admin/Investor/index3/edit','InvestorController@AdminFinanceEdit');
    Route::post('/Admin/Investor/index3/delete','InvestorController@AdminFinanceDelete');


    Route::get('/Admin/CorporateSocialResponsibility/index', 'CorporateSocialResponsibilityController@AdminCsrIndex');
    Route::post('/Admin/CorporateSocialResponsibility/index','CorporateSocialResponsibilityController@AdminCsrUploadFile');
    Route::get('/Admin/CorporateSocialResponsibility/index2', 'CorporateSocialResponsibilityController@AdminPotatoIndex');
    Route::post('/Admin/CorporateSocialResponsibility/index2','CorporateSocialResponsibilityController@AdminPotatoUploadFile');
});
