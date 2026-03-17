<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/a', function () {
//     return view('welcome');
// });

// Route::get('/','HomeController@index');
Route::get('/','MainController@index');


// Route::get('/advertising','HomeController@advertising');
Route::get('/advertising','IndustryController@advertising');

// Route::get('/healthcare-and-life-science','HomeController@healthCareAndLifeScience');
Route::get('/healthcare-and-life-science','IndustryController@healthCareAndlifeScience');

// Route::get('/ecommerce-and-retail','HomeController@ecommerceAndRetail');
Route::get('/ecommerce-and-retail','IndustryController@ecommerceAndRetail');

// Route::get('/education','HomeController@education');
Route::get('/education','IndustryController@education');

// Route::get('/software-and-high-tech','HomeController@softwareAndHighTech');
Route::get('/software-and-high-tech','IndustryController@softwareAndHighTech');

// Route::get('/automative-and-transport','HomeController@automativeAndtransport');
Route::get('/automative-and-transport','IndustryController@automativeAndtransport');

// Route::get('/gaming-and-leisure','HomeController@gamingAndLeisure');
Route::get('/gaming-and-leisure','IndustryController@gamingAndLeisure');

// Route::get('/financial-software-development','HomeController@financialSoftwareDevelopment');
Route::get('/financial-software-development','IndustryController@financialSoftwareDevelopment');

// Route::get('/media-and-entertainment','HomeController@mediaAndEntertainment');
Route::get('/media-and-entertainment','IndustryController@mediaAndEntertainment');

// Route::get('/travel-and-hospitality','HomeController@travelAndHospitality');
Route::get('/travel-and-hospitality','IndustryController@travelAndHospitality');

// Route::get('/real-estate-and-property','HomeController@realStateAndProperty');
Route::get('/real-estate-and-property','IndustryController@realStateAndProperty');

// Route::get('/sports-teams-and-leagues','HomeController@sportsTeamsAndLeagues');
Route::get('/sports-teams-and-leagues','IndustryController@sportsTeamsAndLeagues');

// Route::get('/booking-app','HomeController@bookingApp');
Route::get('/booking-app','SolutionController@bookingApp');

// Route::get('/fitness-app','HomeController@fitnessApp');
Route::get('/fitness-app','SolutionController@fitnessApp');

// Route::get('/fleet-app','HomeController@fleetApp');
Route::get('/fleet-app','SolutionController@fleetApp');

// Route::get('/loyaltyapp','HomeController@loyaltyApp');
Route::get('/loyaltyapp','SolutionController@loyaltyApp');

// Route::get('/moverapp','HomeController@moverApp');
Route::get('/moverapp','SolutionController@moverApp');

// Route::get('/realestate-app','HomeController@realEstateApp');
Route::get('/realestate-app','SolutionController@realEstateApp');

// Route::get('/restaurant-app','HomeController@restaurantApp');
Route::get('/restaurant-app','SolutionController@restaurantApp');

// Route::get('/shopping-express-app','HomeController@shoppingExpressApp');
Route::get('/shopping-express-app','SolutionController@shoppingExpressApp');

// Route::get('/sport-app','HomeController@sportApp');
Route::get('/sport-app','SolutionController@sportApp');

// Route::get('/mobile-app-development','HomeController@mainmobileapp');
Route::get('/mobile-app-development','MobileServiceController@mainmobileapp');

// Route::get('/web-portal-app-development','HomeController@mainwebapp');
Route::get('/web-portal-app-development','WebServiceController@mainwebapp');

Route::get('/ar-vr-app-development','HomeController@mainarvrapp');
// Route::get('/connected-devices','HomeController@mainconnecteddevices');
Route::get('/connected-devices','ConnectedServiceController@mainconnecteddevices');

// Route::get('/design-and-animation','HomeController@maindesignandanimation');
Route::get('/design-and-animation','DesignAnimationServiceController@maindesignandanimation');

// Route::get('/android-app-development','HomeController@androidApp');
Route::get('/android-app-development','MobileServiceController@androidApp');

// Route::get('/ios-app-development','HomeController@iosApp');
Route::get('/ios-app-development','MobileServiceController@iosApp');

// Route::get('/game-app-development','HomeController@gameApp');
Route::get('/game-app-development','MobileServiceController@gameApp');

// Route::get('/cross-platform-app-development','HomeController@crossApp');
Route::get('/cross-platform-app-development','MobileServiceController@crossApp');

// Route::get('/e-commerce-app-development','HomeController@ecommerceApp');
Route::get('/e-commerce-app-development','WebServiceController@ecommerceApp');

// Route::get('/web-app-development','HomeController@webApp');
Route::get('/web-app-development','WebServiceController@webApp');

// Route::get('/ar-app-development','HomeController@arApp');
Route::get('/ar-app-development','XRServiceController@arApp');

// Route::get('/vr-app-development','HomeController@vrApp');
Route::get('/vr-app-development','XRServiceController@vrApp');

// Route::get('/iot-app-development','HomeController@iotApp');
Route::get('/iot-app-development','ConnectedServiceController@iotApp');

// Route::get('/wearable-app-development','HomeController@wearableApp');
Route::get('/wearable-app-development','ConnectedServiceController@wearableApp');

// Route::get('/portfolio','HomeController@portfolio');
Route::get('/portfolio','PortfolioController@portfolio');

// Route::get('/contact-us','HomeController@contactus');
Route::get('/contact-us','ContactController@contactus');

// Route::get('/about-us','HomeController@aboutus');
Route::get('/about-us','AboutController@aboutus');

// Route::get('/clients','HomeController@clients');
Route::get('/clients','AboutController@clients');

// Route::get('/our-process','HomeController@ourprocess');
Route::get('/our-process','AboutController@ourprocess');


// Route::get('/testimonials','HomeController@testimonials');
Route::get('/testimonials','TestimonialController@testimonials');

// Route::get('/career','HomeController@career');
Route::get('/career','AboutController@career');

// Route::get('/privacy-policy','HomeController@privacypolicy');
Route::get('/privacy-policy','OtherController@privacypolicy');

// Route::post("/leads","HomeController@leads")->name('leads');
Route::post("/leads","OtherController@leads")->name('leads');

// Route::post("/leadsmobile","HomeController@leadsmobile")->name('leadsmobile');
Route::post("/leadsmobile","OtherController@leadsmobile")->name('leadsmobile');

// Route::post("/leadsservices","HomeController@leadsservices")->name('leadsservices');
Route::post("/leadsservices","OtherController@leadsservices")->name('leadsservices');

// Route::post("/applicant","HomeController@applicant")->name('applicant');
Route::post("/applicant","AboutController@applicant")->name('applicant');

// Route::get('/blog-2','HomeController@blog_2');
// Route::get('/blog-3','HomeController@blog_3');

// Route::get('/thank-you','HomeController@thankyou');
Route::get('/thank-you','OtherController@thankyou');

// Route::get('/tech-stack','HomeController@techStack');
Route::get('/tech-stack','AboutController@techStack');

// Route::get('/terms-and-conditions','HomeController@termsandcondition');

// Route::get('/company-policy','HomeController@companypolicy');
Route::get('/company-policy','OtherController@companypolicy');

// Route::get('/exterior-3d','HomeController@exterior3d');
Route::get('/exterior-3d','DesignAnimationServiceController@exterior3d');

// Route::get('/interior-3d','HomeController@interior3d');
Route::get('/interior-3d','DesignAnimationServiceController@interior3d');

// Route::get('/animation-services','HomeController@animationServices');
Route::get('/animation-services','DesignAnimationServiceController@animationServices');

// Route::get('/industrial-automation','HomeController@industrialAutomation');
Route::get('/industrial-automation','ConnectedServiceController@industrialAutomation');

// Route::get('/floor-plan','HomeController@floorPlan');
Route::get('/floor-plan','DesignAnimationServiceController@floorPlan');

// Route::get('/metaverse-development','HomeController@metaverseDevelopment');

// Route::get('/mr-app-development','HomeController@mrAppDevelopment');
Route::get('/mr-app-development','XRServiceController@mrAppDevelopment');

// Route::get('/xr-app-development','HomeController@xrAppDevelopment');
Route::get('/xr-app-development','XRServiceController@xrAppDevelopment');

// Route::get('/digital-marketing','HomeController@digitalMarketing');
Route::get('/digital-marketing','MarketingServiceController@digitalMarketing');

// Route::get('/2d-art','HomeController@art2d');
Route::get('/2d-art','DesignAnimationServiceController@art2d');

// Route::get('/3d-art','HomeController@art3d');
Route::get('/3d-art','DesignAnimationServiceController@art3d');

// Route::get('/case-studies/travel-agency-app','HomeController@travelAgencyApp');
Route::get('/case-studies/travel-agency-app','CaseStudyController@travelAgencyApp');

// Route::get('/case-studies/travel-agency-web','HomeController@travelAgencyWeb');
Route::get('/case-studies/travel-agency-web','CaseStudyController@travelAgencyWeb');

// Route::get('/case-studies/real-estate-app','HomeController@realEstateAppPortfolio');
Route::get('/case-studies/real-estate-app','CaseStudyController@realEstateAppPortfolio');

// Route::get('/case-studies/real-estate-web','HomeController@realEstateWeb');
Route::get('/case-studies/real-estate-web','CaseStudyController@realEstateWeb');

// Route::get('/case-studies/loyalty-app','HomeController@loyaltyApps');
Route::get('/case-studies/loyalty-app','CaseStudyController@loyaltyApps');

// Route::get('/case-studies/loyalty-web','HomeController@loyaltyWeb');
Route::get('/case-studies/loyalty-web','CaseStudyController@loyaltyWeb');

// Route::get('/case-studies/gym-app','HomeController@gymApp');
Route::get('/case-studies/gym-app','CaseStudyController@gymApp');

// Route::get('/case-studies/gym-web','HomeController@gymWeb');
Route::get('/case-studies/gym-web','CaseStudyController@gymWeb');

// Route::get('/case-studies/mover-app','HomeController@moverApps');
Route::get('/case-studies/mover-app','CaseStudyController@moverApps');

// Route::get('/case-studies/mover-web','HomeController@moverWeb');
Route::get('/case-studies/mover-web','CaseStudyController@moverWeb');



// Route::get('/solutions','HomeController@solutions');
Route::get('/solutions','SolutionController@solutions');

// Route::get('/industries','HomeController@industries');
Route::get('/industries','IndustryController@industries');

Route::get('/services','HomeController@services');
// Route::get('/app-development-new-york','HomeController@new_york');
Route::get('/app-development-new-york','Location\UsaLocationController@new_york');

// Route::get('/app-development-los-angeles','HomeController@los_angeles');
Route::get('/app-development-los-angeles','Location\UsaLocationController@los_angeles');

// Route::get('/app-development-houston','HomeController@houston');
Route::get('/app-development-houston','Location\UsaLocationController@houston');

// Route::get('/app-development-austin','HomeController@austin');
Route::get('/app-development-austin','Location\UsaLocationController@austin');

// Route::get('/app-development-dallas','HomeController@dallas');
Route::get('/app-development-dallas','Location\UsaLocationController@dallas');

// Route::get('/app-development-birmingham','HomeController@birmingham');
Route::get('/app-development-birmingham','Location\UkLocationController@birmingham');

// Route::get('/app-development-dubai','HomeController@dubai');
Route::get('/app-development-dubai','Location\GccLocationController@dubai');

// Route::get('/app-development-johannesburg','HomeController@johannesburg');
Route::get('/app-development-johannesburg','Location\AfricaLocationController@johannesburg');

// Route::get('/app-development-karachi','HomeController@karachi');
Route::get('/app-development-karachi','Location\PakistanLocationController@karachi');

// Route::get('/app-development-leeds','HomeController@leeds');
Route::get('/app-development-leeds','Location\UkLocationController@leeds');

// Route::get('/app-development-london','HomeController@london');
Route::get('/app-development-london','Location\UkLocationController@london');

// Route::get('/app-development-melbourne','HomeController@melbourne');
Route::get('/app-development-melbourne','Location\AustraliaLocationController@melbourne');

// Route::get('/app-development-miami','HomeController@miami');
Route::get('/app-development-miami','Location\UsaLocationController@miami');

// Route::get('/app-development-qatar','HomeController@qatar');
Route::get('/app-development-qatar','Location\GccLocationController@qatar');

// Route::get('/app-development-riyadh','HomeController@riyadh');
Route::get('/app-development-riyadh','Location\GccLocationController@riyadh');

// Route::get('/app-development-rome','HomeController@rome');
Route::get('/app-development-rome','Location\EuropeLocationController@rome');


// Route::get('/app-development-san-francisco','HomeController@san_francisco');
Route::get('/app-development-san-francisco','Location\UsaLocationController@san_francisco');

// Route::get('/app-development-washington','HomeController@washington');
Route::get('/app-development-washington','Location\UsaLocationController@washington');

// Route::get('/app-development-bahrain','HomeController@bahrain');
Route::get('/app-development-bahrain','Location\GccLocationController@bahrain');

// Route::get('/app-development-oman','HomeController@oman');
Route::get('/app-development-oman','Location\GccLocationController@oman');

// Route::get('/app-development-sydney','HomeController@sydney');
Route::get('/app-development-sydney','Location\AustraliaLocationController@sydney');

// Route::get('/app-development-toronto','HomeController@toronto');
Route::get('/app-development-toronto','Location\CanadaLocationController@toronto');

// Route::get('/app-development-montana','HomeController@montana');
Route::get('/app-development-montana','Location\UsaLocationController@montana');

// Route::get('/app-development-kuwait','HomeController@kuwait');
Route::get('/app-development-kuwait','Location\GccLocationController@kuwait');

// Route::get('/app-development-usa','HomeController@usa');
Route::get('/app-development-usa','Location\UsaLocationController@usa');

// Route::get('/app-development-gcc','HomeController@gcc');
Route::get('/app-development-gcc','Location\GccLocationController@gcc');

// Route::get('/app-development-uk','HomeController@uk');
Route::get('/app-development-uk','Location\UkLocationController@uk');

// Route::get('/app-development-africa','HomeController@africa');
Route::get('/app-development-africa','Location\AfricaLocationController@africa');

// Route::get('/app-development-europe','HomeController@europe');
Route::get('/app-development-europe','Location\EuropeLocationController@europe');

// Route::get('/app-development-australia','HomeController@australia');
Route::get('/app-development-australia','Location\AustraliaLocationController@australia');

// Route::get('/app-development-canada','HomeController@canada');
Route::get('/app-development-canada','Location\CanadaLocationController@canada');

// Route::get('/app-development-pakistan','HomeController@pakistan');
Route::get('/app-development-pakistan','Location\PakistanLocationController@pakistan');

// Route::get('/app-development-morocco','HomeController@morocco');
Route::get('/app-development-morocco','Location\AfricaLocationController@morocco');

// Route::get('/app-development-germany','HomeController@germany');
Route::get('/app-development-germany','Location\EuropeLocationController@germany');

// Route::get('/app-development-saudi-arabia','HomeController@saudi_arabia');
Route::get('/app-development-saudi-arabia','Location\GccLocationController@saudi_arabia');

// Route::get('/app-development-uae','HomeController@uae');
Route::get('/app-development-uae','Location\GccLocationController@uae');

// Route::get('/app-development-italy','HomeController@italy');
Route::get('/app-development-italy','Location\EuropeLocationController@italy');

// Route::get('/locations','HomeController@locations');
Route::get('/locations','OtherController@locations');

// Route::get('/cost-calculator', 'HomeController@cost_calculator')->name('cost-calculator');
Route::get('/cost-calculator', 'OtherController@cost_calculator')->name('cost-calculator');

// Route::get('/review-data2','ScraperController@scrapeTestimonials2');
// Route::get('/review-data','ScraperController@scrapeTestimonials');
// Route::get('/upcity-review-data','ScraperController@upCityTestimonials');
Route::post('/submit-cost-calculator', [App\Http\Controllers\CostCalculatorController::class, 'submit'])->name('cost-calculator.submit');

// new case study
// Route::get('/case-studies/royal-ride-app','HomeController@royalRideApp');
Route::get('/case-studies/royal-ride-app','CaseStudyController@royalRideApp');

// Route::get('/case-studies/boujee-beachin-app','HomeController@boujeeBeachinApp');
Route::get('/case-studies/boujee-beachin-app','CaseStudyController@boujeeBeachinApp');

Route::get('/case-studies/royal-ride-app','HomeController@royalRideApp');
Route::get('/case-studies/boujee-beachin-app','HomeController@boujeeBeachinApp');
Route::get('/case-studies/wood-land-app','HomeController@woodLandApp');
Route::get('/case-studies/neuro-knights-app','HomeController@neuroKnightsApp');
Route::get('/case-studies/mike-mathis-app','CaseStudyController@mikeMathisApp');
Route::get('/case-studies/grave-love-app','CaseStudyController@graveLove');
Route::get('/case-studies/bomb-defuse-app','CaseStudyController@bombDefuse');
Route::get('/case-studies/couple-app','CaseStudyController@coupleApp');
Route::get('/case-studies/car-mechanic-app','CaseStudyController@carMechanic');
Route::get('/case-studies/toy-sort-puzzle','CaseStudyController@toySortPuzzle');
Route::get('/case-studies/royal-relax-spa','CaseStudyController@royalrelaxspa');
Route::get('/case-studies/load-board','CaseStudyController@Loadboard');
Route::get('/case-studies/all-traders-app','CaseStudyController@alltraders');