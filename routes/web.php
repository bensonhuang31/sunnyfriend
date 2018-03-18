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
Route::get('/Investor/IFSM','InvestorController@shareholders');
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
Route::view('/Environmentalprotection/Energysaving', 'Environmentalprotection.Energysaving');
Route::get('/Environmentalprotection/EnvironmentMonitoring','EnvironmentalprotectionController@Monitoring');
Route::get('/Environmentalprotection/EnvironmentalUnit','EnvironmentalprotectionController@alUnit');

//語系
Route::get('/lang/set/{lang}', 'LanguageController@set_lang');

//後台

Route::get('/Admin/Login','LoginController@index');
Route::post('/Admin/Login','LoginController@login');
Route::any('/Admin/crypt','LoginController@crypt');

Route::group(['middlewareGroups' => ['web']], function () {
});


Route::group(['middleware' => ['web','admin.login']],function(){
    Route::get('/Admin/Logout','LoginController@logout');
    Route::get('/Admin', 'LoginController@Admin');

    Route::get('/Admin/Investor/AdminIFSM', 'InvestorController@AdminShareholdersIndex');
    Route::post('/Admin/Investor/AdminIFSM','InvestorController@AdminShareholdersCreate');
    Route::post('/Admin/Investor/AdminIFSM/edit','InvestorController@AdminShareholdersEdit');
    Route::post('/Admin/Investor/AdminIFSM/delete','InvestorController@AdminShareholdersDelete');
    

    Route::get('/Admin/Investor/AdminMonthlyRevenue', 'InvestorController@AdminRevenueIndex');
    Route::post('/Admin/Investor/AdminMonthlyRevenue','InvestorController@AdminRevenueCreate');
    Route::post('/Admin/Investor/AdminMonthlyRevenue/edit','InvestorController@AdminRevenueEdit');
    Route::post('/Admin/Investor/AdminMonthlyRevenue/delete','InvestorController@AdminRevenueDelete');


    Route::get('/Admin/Investor/AdminFinancialInformation', 'InvestorController@AdminFinanceIndex');
    Route::post('/Admin/Investor/AdminFinancialInformation','InvestorController@AdminFinanceCreate');
    Route::post('/Admin/Investor/AdminFinancialInformation/edit','InvestorController@AdminFinanceEdit');
    Route::post('/Admin/Investor/AdminFinancialInformation/delete','InvestorController@AdminFinanceDelete');


    Route::get('/Admin/CorporateSocialResponsibility/AdminCSRReport', 'CorporateSocialResponsibilityController@AdminCsrIndex');
    Route::post('/Admin/CorporateSocialResponsibility/AdminCSRReport','CorporateSocialResponsibilityController@AdminCsrCreate');
    Route::post('/Admin/CorporateSocialResponsibility/AdminCSRReport/delete','CorporateSocialResponsibilityController@AdminCsrDelete');

    Route::get('/Admin/CorporateSocialResponsibility/AdminVanellusLiterature', 'CorporateSocialResponsibilityController@AdminPotatoIndex');
    Route::post('/Admin/CorporateSocialResponsibility/AdminVanellusLiterature','CorporateSocialResponsibilityController@AdminPotatoCreate');
    Route::post('/Admin/CorporateSocialResponsibility/AdminVanellusLiterature/delete','CorporateSocialResponsibilityController@AdminPotatoDelete');

    Route::get('/Admin/News/AdminNews', 'NewsController@AdminNewsIndex');
    Route::post('/Admin/News/AdminNews','NewsController@AdminNewsCreate');
    Route::post('/Admin/News/AdminNews/edit','NewsController@AdminNewsEdit');
    Route::post('/Admin/News/AdminNews/delete','NewsController@AdminNewsDelete');

    Route::get('/Admin/Environmentalprotection/AdminEnvUnit', 'EnvironmentalprotectionController@AdminAlUnitIndex');
    Route::post('/Admin/Environmentalprotection/AdminEnvUnit', 'EnvironmentalprotectionController@AdminAlUnitCreate');
    Route::post('/Admin/Environmentalprotection/AdminEnvUnit/edit','EnvironmentalprotectionController@AdminAlUnitEdit');
    Route::post('/Admin/Environmentalprotection/AdminEnvUnit/delete','EnvironmentalprotectionController@AdminAlUnitDelete');

    Route::get('/Admin/Environmentalprotection/AdminEnvMonitoring', 'EnvironmentalprotectionController@AdminMonitoringIndex');
    Route::post('/Admin/Environmentalprotection/AdminEnvMonitoring', 'EnvironmentalprotectionController@AdminMonitoringCreate');
    Route::post('/Admin/Environmentalprotection/AdminEnvMonitoring/edit','EnvironmentalprotectionController@AdminMonitoringEdit');
    Route::post('/Admin/Environmentalprotection/AdminEnvMonitoring/delete','EnvironmentalprotectionController@AdminMonitoringDelete');

    
});