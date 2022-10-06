<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/about-us', function () {
    return  view('about') . view('footer2');
});

Route::get('/industry', function () {
    return  view('industry') . view('footer2');
});

Route::get('/loanmoksha', function () {
    return view('head') . view('loanmoksha') . view('footer2');
});


Route::get('/mobile-application-development-services', function () {
    return  view('services.mobile_app_development') . view('footer2');
});
Route::get('/flutter-app-development-company', function () {
    return view('tech.flutter-developer') . view('footer2');
});
Route::get('/mean-stack-development-services', function () {
    return  view('tech.meanstack-developer') . view('footer2');
});
Route::get('/microsoft-dot-net-developer', function () {
    return view('tech.net-developer') . view('footer2');
});
Route::get('/codeigniter-developer', function () {
    return view('tech.codeigniter-developer') . view('footer2');
});
Route::get('/sitefinity-development', function () {
    return  view('tech.sitefinity-developer') . view('footer2');
});
Route::get('/ios-app-development', function () {
    return  view('tech.ios-developer') . view('footer2');
});

Route::get('/iot-software-development-services', function () {
    return view('services.iot') . view('footer2');
});

Route::get('/business-intelligence-consulting', function () {
    return view('services.business_intelligence_consulting') . view('footer2');
});

Route::get('/asset-management', function () {
    return view('services.asset-management') . view('footer2');
});

Route::get('/data-analytics-services', function () {
    return view('services.data-analytics') . view('footer2');
});
Route::get('/data-visualization', function () {
    return view('services.data-visualizations') . view('footer2');
});
Route::get('/bi-portfolio-management', function () {
    return view('services.portfolio-service') . view('footer2');
});
Route::get('/case-study-service', function () {
    return view('services.case-study') . view('footer2');
});

Route::group(['prefix'=>'social-media','as'=>'social-media.'], function(){
    Route::get('/white-label-social-platform-web-development', function () {
        return view('category.white-label') . view('footer2');
    });
    Route::get('/custom-social-platform-app-development', function () {
        return view('category.custom-social-media-app') . view('footer2');
    });
    Route::get('/social-network-development', function () {
        return  view('category.Social-Media') . view('footer2');
    });
});

Route::group(['prefix'=>'article','as'=>'article.'], function(){
    Route::get('/healthcar-advantage', function () {
        return view('head') . view('sitebar_blog.sitebar-blog') . view('footer2');
    });
});
// end
// Route::get('/sitemap', function () {
//     return view('category.sitemap') . view('footer2');
    
// });
Route::get('/Fintech -Software', function () {
    return view('Fintech -Software') . view('footer2');
});
Route::get('/artificial-intelligence', function () {
    return view('artificial-intelligence') . view('footer2');
});

Route::get('/blognew', function () {
    return view('head') . view('blognew') . view('footer2');
});

Route::get('/blogdetail', function () {
    return view('head') . view('blogdetail') . view('footer2');
});

Route::get('/sitemap', function () {
    return view('sitemap') . view('footer2');
});

Route::get('/blockchain-software-development-services', function () {
    return view('blockchain1') . view('footer2');
});

Route::group(['https://www.digiprima.com/' => 'data-analytics'], function() {
    Route::get('/data-analytics', function() {       
        return Redirect::to('data-analytics-services', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => 'blog-list'], function() {
    Route::get('/blog-list', function() {       
        return Redirect::to('blog_detailes', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => 'data-analytics'], function() {
    Route::get('/data-analytics', function() {       
        return Redirect::to('data-analytics-services', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => 'fintech-application-development-services'], function() {
    Route::get('/fintech-application-development-services', function() {       
        return Redirect::to('fintech-development-Services', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => 'blog-list?category=Healthcare'], function() {
    Route::get('/blog-list?category=Healthcare', function() {       
        return Redirect::to('/blogs?category=10', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => 'php-developer-india'], function() {
    Route::get('/php-developer-india', function() {       
        return Redirect::to('php-development-company', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => 'web-designer'], function() {
    Route::get('/web-designer', function() {       
        return Redirect::to('web-development-services', 301);       
    });
});Route::group(['https://www.digiprima.com/' => 'blog/tag/case-study'], function() {
    Route::get('/blog/tag/case-study', function() {       
        return Redirect::to('case-study', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => 'blog/allbirds-weaves-branding-and-seo'], function() {
    Route::get('/blog/allbirds-weaves-branding-and-seo', function() {       
        return Redirect::to('blog_detailes', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => '/blog/intercom-content-strategy-leader'], function() {
    Route::get('/blog/intercom-content-strategy-leader', function() {       
        return Redirect::to('blog_detailes', 301);       
    });
});
Route::group(['https://www.digiprima.com/' => '/blog/mailchimps-conversion-content-strategy'], function() {
    Route::get('/blog/mailchimps-conversion-content-strategy', function() {       
        return Redirect::to('blog_detailes', 301);       
    });
});
Route::get('/drupal-development-services', function () {
    return  view('tech.drupal-developer') . view('footer2');
});
Route::get('/magento-development-services', function () {
    return  view('tech.magento-developer') . view('footer2');
});
Route::get('/java-development', function () {
    return  view('tech.java-developer') . view('footer2');
});
Route::get('/angular-js-developers', function () {
    return  view('tech.angularjs-developer') . view('footer2');
});
Route::get('/wordpress-development-services', function () {
    return  view('tech.wordpress-developer') . view('footer2');
});
Route::get('/android-app-development', function () {
    return  view('tech.android-developer') . view('footer2');
});

Route::get('/healthcare-software-development-services', function () {
    return  view('services.healthcare') . view('footer2');
});

Route::get('/education-software-development-services', function () {
    return view('services.education') . view('footer2');
});
Route::get('/manufacturing-software-development-services', function () {
    return view('services.manufacturing') . view('footer2');
});

Route::get('/ecommerce-software-development-services', function () {
    return  view('services.ecommerce') . view('footer2');
});
Route::get('/case-study', function () {
    return  view('case-study') . view('footer2');
});
Route::get('/portfoliofinal', function () {
    return view('head') . view('portfoliofinal') . view('footer2');
});

Route::get('/loanmoksha-case-study', function () {
    return view('casestudy.loanmoksha-case-study') . view('footer2');
});
Route::get('/mdout-case-study', function () {
    return  view('casestudy.mdout1') . view('footer2');
});
Route::get('/primaplus-case-study', function(){
    return  view('casestudy.primaplus-case-study') . view('footer2');
});
Route::get('/syndify-case-study', function () {
    return  view('casestudy.syndify') . view('footer2');
});
Route::get('/sigvaris-case-study', function () {
    return  view('casestudy.sigvaris') . view('footer2');
});
Route::get('/sa-case-study', function () {
    return  view('casestudy.SA-case-study') . view('footer2');
});
Route::get('/bethite-case-study', function () {
    return  view('casestudy.bethite_case_study') . view('footer2');
});
Route::get('/my-thana-app-case-study', function () {
    return  view('casestudy.my-thana-app') . view('footer2');
});
Route::get('/finexchange-case-study', function () {
    return  view('casestudy.finexchange') . view('footer2');
});
Route::get('/scholly-me-case-study', function () {
    return  view('casestudy.SchollyMe_case_study') . view('footer2');
});
Route::get('/LLSTNT-Case-study', function () {
    return  view('casestudy.LLSTNT-Case-study') . view('footer2');
});
Route::get('/react-native-app', function () {
    return  view('casestudy.safar-walk') . view('footer2');
});
Route::get('/dating-app', function () {
    return  view('casestudy.laytest') . view('footer2');
});
Route::get('/id-care-case-study', function () {
    return  view('casestudy.id-care-case-study') . view('footer2');
});
Route::get('/carsbeat-case-study', function () {
    return  view('casestudy.carsbeat') . view('footer2');
});
Route::get('/genjobs-case-study', function () {
    return  view('casestudy.genjobs-case-study') . view('footer2');
});
Route::get('/truckerhangout-case-study', function () {
    return  view('casestudy.truckerhangout') . view('footer2');
});
Route::get('/replenishmd-case-study', function () {
    return  view('casestudy.replenishmd') . view('footer2');
});
// portfolio -route 
Route::get('/portfolio', function () {
    return  view('portfolio.portfoliolist') . view('footer2');
});
Route::get('/healthcare-social-platform', function () {
    return  view('portfolio.replenishmd') . view('footer2');
});

Route::get('/scholly-me-portfolio', function () {
    return  view('portfolio.SchollyMe_case_study') . view('footer2');
});
Route::get('/llstnt-portfolio', function () {
    return  view('portfolio.LLSTNT-Case-study') . view('footer2');
});

Route::get('/mdout-portfolio', function () {
    return  view('portfolio.MDout_case_study') . view('footer2');
});

Route::get('/loanmoksha-portfolio', function () {
    return  view('portfolio.loanmoksha-case-study') . view('footer2');
});

Route::get('/sa-portfolio', function () {
    return  view('portfolio.SA-case-study') . view('footer2');
});
Route::get('/bethite-portfolio', function () {
    return  view('portfolio.bethite_case_study') . view('footer2');
});
Route::get('/my-thana-app-portfolio', function () {
    return view('portfolio.my-thana-app') . view('footer2');
});
Route::get('/finexchange-portfolio', function () {
    return view('portfolio.finexchange') . view('footer2');
});

Route::get('/case-study-detail', function () {
    return view('head') . view('casestudy.case_study_detail_01') . view('footer2');
});
Route::get('/php-development-company', function () {
    return  view('tech.php-developer') . view('footer2');
});
Route::get('/laravel-development-company', function () {
    return  view('tech.laravel-developer') . view('footer2');
});




Route::get('/specialties', function () {
    return  view('services.service') . view('footer2');
});
// python old page
Route::get('/python-developer', function () {
    return view('tech.python-developer') . view('footer2');
});

// python new page
Route::get('/python-developer-new', function () {
    return view('tech.python-developer-new') . view('footer2');
});
Route::get('/terms-condition', function () {
    return view('services.termandcondition') . view('footer2');
});

Route::get('/python-development', function(){
    return view('tech.lp.python-development');
});


// Thankyou page

Route::get('/feedback', function () {
    return  view('tech.thankyou-page') . view('footer2');
});

// end

// New case study 

Route::get('/Telaqua-case-study', function(){
    return  view('casestudy.Telaqua-case-study') . view('footer2');
});

Route::get('/owl-case-study', function(){
    return view('casestudy.owl-case-study') . view('footer2');
});

Route::get('/neuralmarker-case-study', function(){
    return  view('casestudy.NeuralMarker-case-study') . view('footer2');
});

//end

Route::get('/node-js-development ', function () {
    return view('tech.nodejs-developer') . view('footer2');
});


Route::get('/outsourcing-software-development-projects', function () {
    return  view('tech.outsourcing-developer') . view('footer2');
});
Route::get('/events', function () {
    return view('head') . view('event') . view('footer2');
});
Route::get('/casestudy', function () {
    return  view('casestudy.casestudy') . view('footer2');
});



Route::get('/enterprise-software-solution', function () {
    return view('head') . view('enterpricesolution') . view('footer2');
});
Route::get('/portfolio2', function () {
    return view('head') . view('portfoliofinal2') . view('footer2');
});




Route::post('/contact', 'HomeController@contact');


Route::get('/contact', function () {

    return  view('contact1') . view('footer2');
});


Route::get('/testimonial', function () {
    return  view('testimonial') . view('footer2');
});

Route::get('/manufacturing-software-development', function () {
    return  view('services.manufacturing') . view('footer2');
});

Route::get('/angularjs', function () {
    return  view('tech.angularjs-developer') . view('footer2');
});

Route::get('/it-technology', function () {
    return  view('tech.technology-developer') . view('footer2');
});

Route::get('/enterprise-software-solution', function () {
    return view('head') . view('enterpricesolution') . view('footer');
});


Route::get('/bethite', function () {
    return view('head') . view('casestudy.bethite_case_study') . view('footer2');
});


Route::get('/finexchange', function () {
    return  view('casestudy.finexchange') . view('footer2');
});

Route::get('/loanmoksha-case-study', function () {
    return  view('casestudy.loanmoksha-case-study') . view('footer2');
});

Route::get('/MyThanaApp', function () {
    return view('head') . view('casestudy.MyThanaApp') . view('footer2');
});
Route::get('/SchollyMe', function () {
    return  view('casestudy.SchollyMe_case_study') . view('footer2');
});
Route::get('/screen-builder-case-study', function () {
    return  view('casestudy.ScreenBuilder-case-study') . view('footer2');
});
Route::get('/llstnt-case-study', function () {
    return  view('casestudy.LLSTNT-Case-study') . view('footer2');
});
Route::get('/bethite', function () {
    return view('casestudy.bethite_case_study') . view('footer2');
});

Route::get('/syndicationdesk', function () {
    return  view('casestudy.online_syndication_desk') . view('footer2');
});


Route::get('/financexchange', function () {
    return view('casestudy.finexchange') . view('footer2');
});
Route::get('/online-exam-software', function () {
    return view('casestudy.online-exam-software') . view('footer2');
});
Route::get('/Carfoodie-case-study', function () {
    return view('casestudy.Carfoodie-case-study') . view('footer2');
});
Route::get('/truckerhangout', function () {
    return view('casestudy.truckerhangout') . view('footer2');
});

Route::get('/testimonial', function () {
    return  view('testimonial') . view('footer2');
});
Route::get('/logistics-software-development-services', function () {
    return view('services.logistics') . view('footer2');
});
Route::get('/front-end-development', function () {
    return  view('tech.front-end-developer') . view('footer2');
});
Route::get('/drupal-development-services', function () {
    return  view('tech.drupal-developer') . view('footer2');
});
Route::get('/fantasy-sports-app-development', function () {
    return view('tech.fantasy-sports-developer') . view('footer2');
});
Route::get('/sports-betting-software-development', function () {
    return  view('tech.sports-betting-developer') . view('footer2');
});
Route::get('/woocomerce-developer', function () {
    return  view('tech.woocomerce-developer') . view('footer2');
});
Route::get('/react-js-developer', function () {
    return  view('tech.react-js-developer') . view('footer2');
});
Route::get('/enterprise-software-development', function () {
    return  view('tech.enterprise-software-development') . view('footer2');
});


Route::get('/laravel-app-development', function () {
    return view('head') . view('tech.laravel-developer') . view('footer');
});
Route::get('/bootstrap-app-development', function () {
    return view('tech.bootstrap-developer') . view('footer2');
});

Route::get('/development-process', function () {
    return  view('tech.development-process') . view('footer2');
});
Route::get('/joomla-development-company', function () {
    return view('tech.joomla-developer') . view('footer2');
});
Route::get('/ux-ui-developer', function () {
    return  view('tech.ux-ui-developer') . view('footer');
});
Route::get('/hire-dedicated-developer', function () {
    return view('tech.hire-dedicated-developer') . view('footer');
});
Route::get('/web-development-services', function () {
    return view('tech.web-designer') . view('footer2');
});
Route::get('/enterprise-analytics', function () {
    return  view('tech.enterprise-analytics') . view('footer');
});

Route::get('/home001', function () {
    return view('head') . view('home001') . view('footer2');
});
Route::get('/customer-experience-transformation', function () {
    return  view('tech.customer-experience-transformation') . view('footer2');
});
Route::get('/software-cunsulting-services', function () {
    return view('tech.software-cunsulting-services') . view('footer2');
});
Route::get('/food-delivery-app-development', function () {
    return  view('tech.food-delivery-app-development') . view('footer2');
});
Route::get('/customer-service-strategy-transformation', function () {
    return view('tech.customer-service-strategy-transformation') . view('footer2');
});
Route::get('/testing-and-qa-management', function () {
    return view('tech.testing-and-qa-management') . view('footer2');
});

Route::get('/software-engineering-service', function () {
    return view('tech.software-engineering-service') . view('footer2');
});

Route::get('career', function () {
    return  view('tech.career') . view('footer2');
});
Route::post('/apply-now', 'HomeController@apply_now');

Route::get('/apply-now', function () {
    return  view('tech.apply') . view('footer2');
});

Route::post('/request-meeting', 'HomeController@meetings');
Route::post('/home', 'HomeController@requestMeetings');

Route::get('loanmoksha', function () {
    return view('head') . view('casestudy.loanmoksha-case-study') . view('footer');
});

Route::get('telaqua', function () {
    return view('head') . view('tech.telaqua') . view('footer');
});
Route::get('iot-portfolio-detail02', function () {
    return view('head') . view('home') . view('footer');
});

Route::get('P2P-Lending-Platforms', function () {
    return view('head') . view('home') . view('footer');
});

Route::get('logistic-portfolio', function () {
    return view('head') . view('portfoliofinal2') . view('footer2');
});

Route::get('manufacture-portfolio-detail01', function () {
    return view('head') . view('home') . view('footer');
});

Route::get('website-design-and-development-company-in-newyork', function () {
    return view('head') . view('home') . view('footer');
});

Route::get('healthcare-portfolio-detail03', function () {
    return view('head') . view('portfoliofinal2') . view('footer2');
});

Route::get('iot-portfolio-detail02', function () {
    return view('head') . view('portfoliofinal2') . view('footer2');
});

Route::get('industries', function () {
    return  view('services.service') . view('footer2');
});

Route::get('contact-us', function () {
    return  view('contact1') . view('footer2');
});

Route::get('fintech-development-Services', function () {
    return  view('services.fintech_development') . view('footer2');
});

Route::get('schollyme', function () {
    return view('head') . view('home') . view('footer2');
});

Route::get('cloud-service', function () {
    return view('services.cloudservice') . view('footer2');
});
Route::get('custom-software-development', function () {
    return view('services.custom-software-development') . view('footer2');
});
Route::get('/demo', function () {
    return  view('tech.demo') . view('footer2');
});

/**
 * Blog Route
 */
Route::group(['prefix' => 'blogs'], function () {
    Route::get('/', 'BlogsController@index');
});

Route::get('blog_detailes', 'BlogsController@fetchAllBlog');


Route::group(['prefix' => 'blogs'], function () {
    Route::get('/{slug}', 'BlogsController@findBySlug');
});




// / ================== Homepage + Admin Routes ================== /

require __DIR__ . '/admin_routes.php';
