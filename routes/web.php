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
Route::view('/AboutSF/CompanyProfile', 'AboutSF.CompanyProfile');
Route::view('/AboutSF/ServiceAndArea', 'AboutSF.ServiceAndArea');
Route::view('/AboutSF/Structure', 'AboutSF.Structure');
Route::view('/AboutSF/ManagingTeam', 'AboutSF.ManagingTeam');
Route::view('/AboutSF/Organization', 'AboutSF.Organization');
Route::view('/AboutSF/Shareholding', 'AboutSF.Shareholding');
Route::view('/AboutSF/IIC', 'AboutSF.IIC');

//最新消息
Route::view('/News/NewsCenter', 'News.NewsCenter');
Route::view('/News/ImportantNews', 'News.ImportantNews');
Route::view('/News/WebsiteLinks', 'News.WebsiteLinks');
Route::view('/News/latestNews', 'News.latestNews');
Route::get('/News/latestNews','NewsController@index');
Route::get('/News/Detail/{id}','NewsController@detail');
//公司治理
Route::view('/CorporateGovernance/GovernancePreface', 'CorporateGovernance.GovernancePreface');
Route::view('/CorporateGovernance/Regulations', 'CorporateGovernance.Regulations');
Route::view('/CorporateGovernance/InternalAuditing', 'CorporateGovernance.InternalAuditing');
Route::view('/CorporateGovernance/BoardofDirectors', 'CorporateGovernance.BoardofDirectors');
Route::view('/CorporateGovernance/Diversification', 'CorporateGovernance.Diversification');
//投資人專區
Route::get('/Investor/IFSM','InvestorController@index');
Route::get('/Investor/MonthlyRevenue','InvestorController@revenue');
Route::get('/Investor/FinancialInformation','InvestorController@finance');
Route::view('/Investor/ExchangeLink', 'Investor.ExchangeLink');
Route::view('/Investor/DividendPolicy', 'Investor.DividendPolicy');
Route::view('/Investor/InvestmentCentre', 'Investor.InvestmentCentre');
//企業社會責任
Route::view('/CorporateSocialResponsibility/Preface', 'CorporateSocialResponsibility.Preface');
Route::view('/CorporateSocialResponsibility/Policy', 'CorporateSocialResponsibility.Policy');
Route::view('/CorporateSocialResponsibility/ResultsAndplans', 'CorporateSocialResponsibility.ResultsAndplans');
Route::get('/CorporateSocialResponsibility/CSRReport','CorporateSocialResponsibilityController@csr');
Route::get('/CorporateSocialResponsibility/VanellusLiterature','CorporateSocialResponsibilityController@index');
//利害關係人
Route::view('/Stakeholder/MaterialIssues', 'Stakeholder.MaterialIssues');
Route::view('/Stakeholder/EmployeeBenefits', 'Stakeholder.EmployeeBenefits');
Route::view('/Stakeholder/SMP', 'Stakeholder.SMP');
Route::view('/Stakeholder/GrievanceMachinery', 'Stakeholder.GrievanceMachinery');
Route::view('/Stakeholder/UBGM', 'Stakeholder.UBGM');
//環境保護

//語系
Route::get('/lang/set/{lang}', 'LanguageController@set_lang');

//後台
Route::view('/Admin', 'Admin.index');

Route::get('/Admin/Login','LoginController@index');
Route::post('/Admin/Login','LoginController@login');
Route::get('/Admin/Logout','LoginController@logout');
Route::any('/Admin/crypt','LoginController@crypt');

Route::view('/Admin/Environmentprotect/index', 'Admin.Environmentprotect.index');
Route::view('/Admin/Environmentprotect/index2', 'Admin.Environmentprotect.index2');

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
    Route::post('/Admin/CorporateSocialResponsibility/index','CorporateSocialResponsibilityController@AdminCsrCreate');
    Route::post('/Admin/CorporateSocialResponsibility/index/delete','CorporateSocialResponsibilityController@AdminCsrDelete');

    Route::get('/Admin/CorporateSocialResponsibility/index2', 'CorporateSocialResponsibilityController@AdminPotatoIndex');
    Route::post('/Admin/CorporateSocialResponsibility/index2','CorporateSocialResponsibilityController@AdminPotatoCreate');
    Route::post('/Admin/CorporateSocialResponsibility/index2/delete','CorporateSocialResponsibilityController@AdminPotatoDelete');

    Route::get('/Admin/News/index', 'NewsController@AdminNewsIndex');
    Route::post('/Admin/News/index','NewsController@AdminNewsCreate');
    Route::post('/Admin/News/index/edit','NewsController@AdminNewsEdit');
    Route::post('/Admin/News/index/delete','NewsController@AdminNewsDelete');
});


Route::group(['middleware' => ['web','admin.login']],function(){
    
});