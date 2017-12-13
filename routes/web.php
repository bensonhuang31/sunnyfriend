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
Route::view('/AboutSF/index.php', 'AboutSF.index');
Route::view('/AboutSF/index2.php', 'AboutSF.index2');
Route::view('/AboutSF/index3.php', 'AboutSF.index3');
Route::view('/AboutSF/index4.php', 'AboutSF.index4');
Route::view('/AboutSF/index5.php', 'AboutSF.index5');
Route::view('/AboutSF/index6.php', 'AboutSF.index6');
Route::view('/AboutSF/index7.php', 'AboutSF.index7');

//最新消息
Route::view('/News/index.php', 'News.index');
Route::view('/News/index2.php', 'News.index2');
Route::view('/News/index3.php', 'News.index3');
Route::view('/News/index4.php', 'News.index4');
Route::get('/News/index4.php','NewsController@index');
Route::get('/News/Detail/{id}','NewsController@detail');
//公司治理
Route::view('/CorporateGovernance/index.php', 'CorporateGovernance.index');
Route::view('/CorporateGovernance/index2.php', 'CorporateGovernance.index2');
Route::view('/CorporateGovernance/index3.php', 'CorporateGovernance.index3');
Route::view('/CorporateGovernance/index4.php', 'CorporateGovernance.index4');
Route::view('/CorporateGovernance/index5.php', 'CorporateGovernance.index5');
//投資人專區
Route::get('/Investor/index.php','InvestorController@index');
Route::get('/Investor/index2.php','InvestorController@revenue');
Route::get('/Investor/index3.php','InvestorController@finance');
Route::view('/Investor/index4.php', 'Investor.index4');
Route::view('/Investor/index5.php', 'Investor.index5');
Route::view('/Investor/index6.php', 'Investor.index6');
//企業社會責任
Route::view('/CorporateSocialResponsibility/index.php', 'CorporateSocialResponsibility.index');
Route::view('/CorporateSocialResponsibility/index2.php', 'CorporateSocialResponsibility.index2');
Route::view('/CorporateSocialResponsibility/index3.php', 'CorporateSocialResponsibility.index3');
Route::get('/CorporateSocialResponsibility/index4.php','CorporateSocialResponsibilityController@csr');
Route::get('/CorporateSocialResponsibility/index5.php','CorporateSocialResponsibilityController@index');
//利害關係人
Route::view('/Stakeholder/index.php', 'Stakeholder.index');
Route::view('/Stakeholder/index2.php', 'Stakeholder.index2');
Route::view('/Stakeholder/index3.php', 'Stakeholder.index3');
Route::view('/Stakeholder/index4.php', 'Stakeholder.index4');
Route::view('/Stakeholder/index5.php', 'Stakeholder.index5');
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
