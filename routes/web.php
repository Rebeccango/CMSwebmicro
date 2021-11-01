<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@get_home',
]);

Route::group(['middleware' => ['web'], 'prefix' => 'app'], function () {
    Route::post('post', [
        'as' => 'app_post',
        'uses' => 'AppController@post',
    ]);
    Route::get('activity', [
        'as' => 'app_activity',
        'uses' => 'AppController@activity',
    ]);

    Route::get('missing', [
        'as' => 'app_activity_missing',
        'uses' => 'AppController@parseMissingData',
    ]);

    Route::post('4GclQ5z3n0sSiON', [
        'as' => 'app_is_entitled',
        'uses' => 'AppController@is_entitled',
    ]);
    Route::post('usage', [
        'as' => 'app_usage',
        'uses' => 'AppController@usage',
    ]);
});

Route::get('free-trial', [
    'as' => 'trial',
    'uses' => 'PagesController@get_trial',
]);

Route::get('solidworks-2017-launch-event', [
    'as' => '2017-launch-event',
    'uses' => 'PagesController@get_2017_launch_event',
]);

Route::get('sitemap-generator', [
    'as' => 'sitemap-generator',
    'uses' => 'PagesController@get_generateSiteMap',
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('clear-cache', [
        'as' => 'clear_cache',
        'uses' => 'PagesController@clear_artisan_cache',
    ]);

    Route::get('page-generator', [
        'as' => 'page-generator',
        'uses' => 'PagesController@get_generateSiteMap',
    ]);

    Route::post("saveNewCategory", [
        'as' => 'saveNewCategory',
        'uses' => 'ProductController@post_saveNewCategory',
    ]);

    //if(Voyager::can('edit_orders')){
    Route::post('refundCancelOrder/{order}', [
        'as' => 'refundCancelOrder',
        'uses' => 'BillingController@refundCancelOrder',
    ]);
    //  }
});

Route::get('solidworks-q2-promo-thank-you', [
    'as' => 'solidworks-q2-promo-thank-you',
    'uses' => 'PagesController@get_solidworks_q2_promo_thank_you',
]);

Route::get('instructor-led-online-custom-training', [
    'as' => 'instructor-led-online-custom-training',
    'uses' => 'PagesController@get_instructor_led_online_custom_training',
]);

Route::get('instructor-led-online-custom-training-thanks', [
    'as' => 'instructor-led-online-custom-training-thanks',
    'uses' => 'PagesController@get_instructor_led_online_custom_training_thanks',
]);

Route::get('cadmicro-tv', [
    'as' => 'cadmicro-tv',
    'uses' => 'PagesController@get_cadmicroTV',
]);

Route::get('technical-support-survey', [
    'as' => 'technical-support-survey',
    'uses' => 'PagesController@get_technical_support_survey',
]);

Route::get('electrical-hands-on-event-survey', [
    'as' => 'electrical-hands-on-event-survey',
    'uses' => 'PagesController@get_electrical_hands_on_event_survey',
]);

Route::get('training-satisfaction-survey', [
    'as' => 'training-satisfaction-survey',
    'uses' => 'PagesController@get_training_satisfaction_survey',
]);

Route::get('training-satisfaction-survey-success', [
    'as' => 'training-satisfaction-survey-success',
    'uses' => 'PagesController@get_training_satisfaction_survey_success',
]);

Route::get('admoffer', [
    'as' => 'admoffer',
    'uses' => 'PagesController@get_admoffer',
]);

Route::get('survey', [
    'as' => 'survey',
    'uses' => 'PagesController@survey',
]);

Route::get('landing/{slug}', [
    'as' => 'landing',
    'uses' => 'PagesController@get_landing',
]);

Route::group(['middleware' => ['web'], 'prefix' => 'trumpf', 'as' => 'trumpf.'], function () {
    Route::get('truprint', [
        'as' => 'truprint',
        'uses' => 'PagesController@get_trumpf_truprint',
    ]);

    Route::get('trumark', [
        'as' => 'trumark',
        'uses' => 'PagesController@get_trumpf_trumark',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'hp'], function () {
    Route::get('/', [
        'as' => 'hp',
        'uses' => 'PagesController@get_hp',
    ]);

    Route::get('jet-fusion-4200', [
        'as' => 'jet-fusion-4200',
        'uses' => 'PagesController@get_hp_jet_fusion_4200',
    ]);

    Route::get('jet-fusion-5200', [
        'as' => 'jet-fusion-5200-series',
        'uses' => 'PagesController@get_hp_jet_fusion_5200',
    ]);

    Route::get('materialise', [
        'as' => 'materialise',
        'uses' => 'PagesController@get_materialise',
    ]);

    Route::get('hp-metal-jet', [
        'as' => 'hp-metal-jet',
        'uses' => 'PagesController@get_hp_metal_jet',
    ]);

    Route::get('jet-fusion-500-300-series', [
        'as' => 'jet-fusion-500-300-series',
        'uses' => 'PagesController@get_jet_fusion_500_300_series',
    ]);

    Route::get('download/jet-fusion-300-500-flyer', [
        'as' => 'download-hp-jet-fusion-300-500-flyer',
        'uses' => 'PagesController@download_jet_fusion_300_500_flyer',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'xr', 'as' => 'xr.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'PagesController@get_xr',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'iot'], function () {
    Route::get('/', [
        'as' => 'iot',
        'uses' => 'PagesController@get_iot',
    ]);
});

Route::get('customer-experience-centre', [
    'as' => 'customer-experience-center',
    'uses' => 'PagesController@get_customer_experience_center',
]);

Route::group(['middleware' => ['web'], 'prefix' => 'nano-dimension'], function () {
    Route::get('/', [
        'as' => 'nano-dimension',
        'uses' => 'PagesController@get_nanodimensions',
    ]);

    Route::get('dragon-fly-pro', [
        'as' => 'dragon-fly-pro',
        'uses' => 'PagesController@get_dragonfly_ldm',
    ]);

    Route::redirect('dragon-fly', 'dragon-fly-pro');

    Route::get('dragonfly-ldm', [
        'as' => 'dragonfly-ldm',
        'uses' => 'PagesController@get_dragonfly_ldm',
    ]);

    Route::redirect('dragon-fly-pro', 'dragonfly-ldm');
});

Route::group(['middleware' => ['web'], 'prefix' => 'bigrep'], function () {
    Route::get('/', [
        'as' => 'bigrep',
        'uses' => 'PagesController@get_bigrep',
    ]);

    Route::get('one', [
        'as' => 'bigrep-one',
        'uses' => 'PagesController@get_bigrep_one',
    ]);

    Route::get('studio', [
        'as' => 'bigrep-studio',
        'uses' => 'PagesController@get_bigrep_studio',
    ]);

    Route::get('studio-g2', [
        'as' => 'bigrep-studio-g2',
        'uses' => 'PagesController@get_bigrep_studio',
    ]);

    Route::redirect('studio', 'studio-g2');

    Route::get('pro', [
        'as' => 'bigrep-pro',
        'uses' => 'PagesController@get_bigrep_pro',
    ]);

    Route::get('edge', [
        'as' => 'bigrep-edge',
        'uses' => 'PagesController@get_bigrep_edge',
    ]);

    Route::redirect('edge', 'pro');

    Route::get('pro/demo', [
        'as' => 'bigrep-pro-demo',
        'uses' => 'PagesController@get_bigrep_pro_demo',
    ]);
});

Route::get('whitepapers/{pdf}', [
    'as' => 'whitepapers',
    'uses' => 'PagesController@get_whitepapers',
]);

Route::get('fill-it-forward', [
    'as' => 'fill-it-forward',
    'uses' => 'PagesController@get_fill_it_forward',
]);

Route::group(['middleware' => ['web'], 'prefix' => 'ultimaker'], function () {
    Route::get('/', [
        'as' => 'ultimaker',
        'uses' => 'PagesController@get_ultimaker',
    ]);

    Route::get('ultimaker-original', [
        'as' => 'ultimaker-original',
        'uses' => 'PagesController@get_ultimaker_original',
    ]);

    Route::get('ultimaker-essentials', [
        'as' => 'ultimaker-essentials',
        'uses' => 'PagesController@get_ultimaker_essentials',
    ]);

    Route::get('ultimaker-s3', [
        'as' => 'ultimaker-s3',
        'uses' => 'PagesController@get_ultimaker_s3',
    ]);

    Route::get('ultimaker-s5', [
        'as' => 'ultimaker-s5',
        'uses' => 'PagesController@get_ultimaker_s5',
    ]);

    Route::get('ultimaker-2-plus-connect', [
        'as' => 'ultimaker-2-plus-connect',
        'uses' => 'PagesController@get_ultimaker_2plus_connect',
    ]);

    Route::get('ultimaker-cura', [
        'as' => 'ultimaker-cura',
        'uses' => 'PagesController@get_ultimaker_cura',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'education', 'as' => 'education.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'PagesController@get_education',
    ]);
    Route::get('cadcam-software', [
        'as' => 'cadcam-software',
        'uses' => 'PagesController@get_education_cadcam_software',
    ]);

    Route::get('3d-printers', [
        'as' => '3d-printers',
        'uses' => 'PagesController@get_education_3d_printers',
    ]);

    Route::get('3d-scanning', [
        'as' => '3d-scanning',
        'uses' => 'PagesController@get_education_3d_scanning',
    ]);

    Route::get('guides', [
        'as' => 'guides',
        'uses' => 'PagesController@get_education_guides',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'dyemansion', 'as' => 'dyemansion.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'PagesController@get_dyemansion',
    ]);

    Route::get('powershot-c', [
        'as' => 'powershot-c',
        'uses' => 'PagesController@get_powershot_c',
    ]);

    Route::get('powershot-s', [
        'as' => 'powershot-s',
        'uses' => 'PagesController@get_powershot_s',
    ]);

    Route::get('powerfuse-s', [
        'as' => 'powerfuse-s',
        'uses' => 'PagesController@get_powerfuse_s',
    ]);

    Route::get('dyemansion-dm60', [
        'as' => 'dyemansion-dm60',
        'uses' => 'PagesController@get_dyemansion_dm60',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'nexa3d', 'as' => 'nexa3d.'], function () {

    Route::redirect('/', 'nexa3d/nxe400');

    Route::get('nxe400', [
        'as' => 'nxe400',
        'uses' => 'PagesController@get_nexa3d_nxe_400',
    ]);

    Route::get('nxd200', [
        'as' => 'nxd200',
        'uses' => 'PagesController@get_nexa3d_nxd_200',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'formlabs'], function () {
    Route::get('/', [
        'as' => 'formlabs',
        'uses' => 'PagesController@get_formlabs',
    ]);

    Route::get('formlabs-form-3', [
        'as' => 'formlabs-form3',
        'uses' => 'PagesController@get_formlabs_form3',
    ]);

    Route::get('formlabs-form-3L', [
        'as' => 'formlabs-form3L',
        'uses' => 'PagesController@get_formlabs_form3L',
    ]);

    // Route::get('formlabs-form2', [
    //     'as' => 'formlabs-form2',
    //     'uses' => 'PagesController@get_formlabs_form2',
    // ]);
    Route::redirect('formlabs-form2', '/formlabs');

    Route::get('formlabs-fuse1', [
        'as' => 'formlabs-fuse1',
        'uses' => 'PagesController@get_formlabs_fuse1',
    ]);
});

Route::group(['as' => 'additive-solutions.', 'middleware' => ['web'], 'prefix' => 'additive-solutions'], function () {
    Route::get('/', [
        'as' => 'all',
        'uses' => 'PagesController@get_additive_solutions_all',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'markforged'], function () {
    Route::get('/', [
        'as' => 'markforged',
        'uses' => 'PagesController@get_markforged',
    ]);

    Route::get('metal-series', [
        'as' => 'metal-series',
        'uses' => 'PagesController@get_metal_series',
    ]);

    Route::get('industrial-series', [
        'as' => 'industrial-series',
        'uses' => 'PagesController@get_industrial_series',
    ]);

    Route::get('desktop-series', [
        'as' => 'desktop-series',
        'uses' => 'PagesController@get_desktop_series',
    ]);

    Route::get('whitepapers/{pdf}', [
        'as' => 'markforged-whitepapers',
        'uses' => 'PagesController@get_markforged_whitepapers',
    ]);

    Route::redirect('onyx-one', 'desktop-series');
    Route::redirect('onyx-pro', 'desktop-series');
    Route::redirect('mark-two', 'desktop-series');
    Route::redirect('x3', 'industrial-series');
    Route::redirect('x5', 'industrial-series');
    Route::redirect('x7', 'industrial-series');
    Route::redirect('metal-x', 'metal-series');
    Route::redirect('sinter-1', 'metal-series');
    Route::redirect('sinter-2', 'metal-series');
    Route::redirect('wash-1', 'metal-series');

    Route::get('markforged-demo', [
        'as' => 'markforged-demo',
        'uses' => 'PagesController@get_markforged_demo',
    ]);

    Route::get('request-sample', [
        'as' => 'markforged-request-sample',
        'uses' => 'PagesController@get_markforged_sample',
    ]);

    Route::get('download/3d-printing-buyers-guide', [
        'as' => 'download-3d-printing-buyers-guide',
        'uses' => 'PagesController@download_3d_printing_buyers_guide',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'matrix'], function () {
    Route::get('solidworks', [
        'as' => 'matrix-solidworks',
        'uses' => 'PagesController@get_matrix_solidworks',
    ]);

    Route::get('solidworks-pdm', [
        'as' => 'matrix-solidworks-pdm',
        'uses' => 'PagesController@get_matrix_solidworks_pdm',
    ]);
});

Route::name('intamsys.')->middleware(['web'])->prefix('intamsys')->group(function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'PagesController@get_intamsys_index',
    ]);
    Route::get('funmat-ht', [
        'as' => 'funmat.ht',
        'uses' => 'PagesController@get_intamsys_funmat_ht',
    ]);
    Route::get('funmat-pro-410', [
        'as' => 'funmat.pro410',
        'uses' => 'PagesController@get_intamsys_funmat_pro410',
    ]);
    Route::get('funmat-pro-610-ht', [
        'as' => 'funmat.pro610ht',
        'uses' => 'PagesController@get_intamsys_funmat_pro610ht',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => '3d-scanning', 'as' => '3d-scanning.'], function () {

    Route::get('/', [
        'as' => 'index',
        'uses' => 'PagesController@get_3d_scanning',
    ]);

    Route::group(['middleware' => ['web'], 'prefix' => 'hardware', 'as' => 'hardware.'], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'PagesController@get_3d_scanning_hardware',
        ]);
        Route::get('gom-portable-solutions', [
            'as' => 'gom-portable',
            'uses' => 'PagesController@get_3d_scanning_gom_portable',
        ]);
        Route::get('gom-robot-solutions', [
            'as' => 'gom-robot',
            'uses' => 'PagesController@get_3d_scanning_gom_robot',
        ]);
        Route::get('zeiss-automated-solutions', [
            'as' => 'zeiss-automated',
            'uses' => 'PagesController@get_3d_scanning_zeiss_automated',
        ]);
        Route::get('atos-q', [
            'as' => 'atos-q',
            'uses' => 'PagesController@get_gom_atos_q',
        ]);
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'software', 'as' => 'software.'], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'PagesController@get_3d_scanning_software',
        ]);
        Route::get('gom-inspect-free', [
            'as' => 'gom-inspect-free',
            'uses' => 'PagesController@get_3d_scanning_gom_inspect_free',
        ]);
        Route::get('gom-inspect-pro', [
            'as' => 'gom-inspect-pro',
            'uses' => 'PagesController@get_3d_scanning_gom_inspect_pro',
        ]);
        Route::get('geomagic-for-solidworks', [
            'as' => 'geomagic-for-solidworks',
            'uses' => 'PagesController@get_3d_scanning_geomagic_sw',
        ]);
        Route::get('geomagic-design-x', [
            'as' => 'geomagic-design-x',
            'uses' => 'PagesController@get_3d_scanning_geomagic_design_x',
        ]);
        Route::get('geomagic-control-x', [
            'as' => 'geomagic-control-x',
            'uses' => 'PagesController@get_3d_scanning_geomagic_control_x',
        ]);
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'services'], function () {
        Route::get('/', [
            'as' => 'services',
            'uses' => 'PagesController@get_3d_scanning_services',
        ]);
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'training'], function () {
        Route::get('/', [
            'as' => 'training',
            'uses' => 'PagesController@get_3d_scanning_training',
        ]);
    });
});

Route::group(['middleware' => ['web'], 'prefix' => 'solidworks', 'as' => 'solidworks.'], function () {
    Route::group(['prefix' => '3dexperience', 'as' => '3dexperience.'], function () {

        Route::get('startups', [
            'as' => 'startups',
            'uses' => 'PagesController@get_solidworks_3dexperience_startup',
        ]);
        Route::get('platform', [
            'as' => 'platform',
            'uses' => 'PagesController@get_solidworks_3dexperience_platform',
        ]);

        Route::permanentRedirect('/', '/solidworks/3dexperience/platform');

        Route::group(['prefix' => 'design', 'as' => 'design.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'PagesController@get_solidworks_3dexperience_design',
            ]);
            Route::get('3d-sculptor', [
                'as' => '3d-sculptor',
                'uses' => 'PagesController@get_solidworks_3dexperience_design_3dsculptor',
            ]);
            Route::get('3d-creator', [
                'as' => '3d-creator',
                'uses' => 'PagesController@get_solidworks_3dexperience_design_3dcreator',
            ]);
            Route::get('drafter', [
                'as' => 'drafter',
                'uses' => 'PagesController@get_solidworks_3dexperience_design_drafter',
            ]);
        });

        Route::group(['prefix' => 'simulate', 'as' => 'simulate.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'PagesController@get_solidworks_3dexperience_simulate',
            ]);
            // Route::get('simulia-simulation-foundation', [
            //     'as' => 'simulia-simulation-foundation',
            //     'uses' => 'PagesController@get_solidworks_3dexperience_simulate_simulia_sim_foundation',
            // ]);
            Route::get('structural-professional-engineer', [
                'as' => 'structural-professional-engineer',
                'uses' => 'PagesController@get_solidworks_3dexperience_simulate_structural_pro_eng',
            ]);

            Route::get('simuliaworks', [
                'as' => 'simuliaworks',
                'uses' => 'PagesController@get_solidworks_3dexperience_simuliaworks',
            ]);
        });

        Route::get('manage', [
            'as' => 'manage',
            'uses' => 'PagesController@get_solidworks_3dexperience_manage',
        ]);
    });

    Route::get('ems', [
        'as' => 'ems',
        'uses' => 'PagesController@get_solidworks_ems',
    ]);

    Route::get('hfworks', [
        'as' => 'hfworks',
        'uses' => 'PagesController@get_solidworks_hfworks',
    ]);

});

Route::get('demo-equipment-sale', [
    'as' => 'demo-equipment-sale',
    'uses' => 'PagesController@get_demo_equipment_sale',
]);

Route::get('benchmark-request', [
    'as' => 'benchmark-request.index',
    'uses' => 'BenchmarkController@benchmark_request_index',
]);

Route::post('benchmark-request', [
    'as' => 'benchmark-request.create',
    'uses' => 'BenchmarkController@benchmark_request_create',
]);

Route::group(['middleware' => ['web'], 'prefix' => 'solidworks'], function () {
    Route::group(['middleware' => ['web'], 'prefix' => 'technical'], function () {
        Route::get('composer', [
            'as' => 'solidworks-technical-composer',
            'uses' => 'PagesController@get_technical_composer',
        ]);
        Route::get('model-based-definition', [
            'as' => 'solidworks-technical-modelBasedDefinition',
            'uses' => 'PagesController@get_technical_modelBasedDefinition',
        ]);
        Route::get('inspection', [
            'as' => 'solidworks-technical-inspection',
            'uses' => 'PagesController@get_technical_inspection',
        ]);
        Route::redirect('/', 'solidworks-technical-composer');
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'machining'], function () {
        Route::get('cam', [
            'as' => 'solidworks-cam',
            'uses' => 'PagesController@get_solidworks_cam',
        ]);
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'other-products'], function () {

        Route::get('rendering', [
            'as' => 'solidworks-otherProducts-visualize',
            'uses' => 'PagesController@get_otherProducts_rendering',
        ]);
        // Route::get('industrial-designer', [
        //     'as' => 'solidworks-otherProducts-industrialDesigner',
        //     'uses' => 'PagesController@get_otherProducts_industrialDesigner',
        // ]);
        // Route::get('conceptual-designer', [
        //     'as' => 'solidworks-otherProducts-conceptualDesigner',
        //     'uses' => 'PagesController@get_otherProducts_conceptualDesigner',
        // ]);
        Route::get('draftsight', [
            'as' => 'solidworks-otherProducts-draftSight',
            'uses' => 'PagesController@get_otherProducts_draftSight',
        ]);

        Route::get('team-eda', [
            'as' => 'team-eda',
            'uses' => 'PagesController@get_team_eda',
        ]);

        Route::get('3dconnexion', [
            'as' => '3dconnexion',
            'uses' => 'PagesController@get_3dconnexion',
        ]);

        Route::redirect('/', 'solidworks-otherProducts-visualize');
    });

    Route::get('/', [
        'as' => 'solidworks',
        'uses' => 'PagesController@get_solidworks',
    ]);

    Route::group(['middleware' => ['web'], 'prefix' => 'design-software'], function () {
        Route::get('/solidsteel', [
            'as' => 'solidworks.design-software.solidsteel',
            'uses' => 'PagesController@get_solidworks_solidsteel',
        ]);
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'ecommerce'], function () {

        // Route::group(['middleware' => ['web'], 'prefix' => 'solidworks-sell'], function () {
        //     Route::get('/', [
        //         'as' => 'solidworks-sell',
        //         'uses' => 'PagesController@get_solidworks_sell',
        //     ]);

        //     Route::get('demo', [
        //         'as' => 'solidworks-sell-demo',
        //         'uses' => 'PagesController@get_solidworks_sell_demo',
        //     ]);
        // });

        Route::get('driveworks', [
            'as' => 'driveWorks',
            'uses' => 'PagesController@get_driveWorks',
        ]);

        Route::get('driveworks/compare', [
            'as' => 'driveWorks.compare',
            'uses' => 'PagesController@get_driveWorks_compare',
        ]);

    });

    Route::group(['middleware' => ['web'], 'prefix' => '3dcad'], function () {

        Route::get('/', [
            'as' => 'solidworks-3dcad',
            'uses' => 'PagesController@get_solidworks_premium',
        ]);

        Route::permanentRedirect('/premium', '/solidworks/3dcad');
        Route::permanentRedirect('/professional', '/solidworks/3dcad');
        Route::permanentRedirect('/standard', '/solidworks/3dcad');
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'simulation'], function () {

        Route::get('/', [
            'as' => 'solidworks-simulation',
            'uses' => 'PagesController@get_simulation_premium',
        ]);

        Route::get('capabilities', [
            'as' => 'solidworks-simulation-capabilities',
            'uses' => 'PagesController@get_simulation_capabilities',
        ]);

        Route::permanentRedirect('/premium', '/solidworks/simulation');
        Route::permanentRedirect('/professional', '/solidworks/simulation');
        Route::permanentRedirect('/standard', '/solidworks/simulation');

        Route::get('flow-simulation', [
            'as' => 'solidworks-simulation-flowSimulation',
            'uses' => 'PagesController@get_simulation_flowSimulation',
        ]);
        Route::get('plastics', [
            'as' => 'solidworks-simulation-plastics',
            'uses' => 'PagesController@get_simulation_plastics',
        ]);
        Route::get('sustainability', [
            'as' => 'solidworks-simulation-sustainability',
            'uses' => 'PagesController@get_simulation_sustainability',
        ]);
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'electrical'], function () {
        Route::get('/', [
            'as' => 'solidworks-Electrical-electrical',
            'uses' => 'PagesController@get_Electrical_electrical',
        ]);
        Route::get('pcb', [
            'as' => 'solidworks-Electrical-pcb',
            'uses' => 'PagesController@get_Electrical_pcb',
        ]);
        Route::get('pcb-connector', [
            'as' => 'solidworks-Electrical-pcbConnector',
            'uses' => 'PagesController@get_Electrical_pcbConnector',
        ]);
    });

    Route::group(['middleware' => ['web'], 'prefix' => 'data-management'], function () {

        Route::get('pdm', [
            'as' => 'solidworks-dataManagement',
            'uses' => 'PagesController@get_dataManagement_professional',
        ]);

        Route::permanentRedirect('/standard', '/solidworks/data-management/pdm');
        Route::permanentRedirect('/', '/solidworks/data-management/pdm');

        Route::get('manage', [
            'as' => 'solidworks-manage',
            'uses' => 'PagesController@get_dataManagement_manage',
        ]);

        Route::get('exalead', [
            'as' => 'solidworks-exalead',
            'uses' => 'PagesController@get_dataManagement_exalead',
        ]);
    });
});

Route::get('thanks/{pageid?}', [
    'as' => 'thanks',
    'uses' => 'PagesController@get_thanks',
]);

Route::get('thank-you/{pageid?}', [
    'as' => 'thanks',
    'uses' => 'PagesController@get_form_thanks',
]);

Route::get('error/{pageid?}', [
    'as' => 'error',
    'uses' => 'PagesController@get_error',
]);

Route::group(['middleware' => ['web'], 'prefix' => 'training'], function () {

    Route::get('/', [
        'as' => 'training',
        'uses' => 'PagesController@get_training',
    ]);

    Route::get('solidworks', [
        'as' => 'training-solidworks',
        'uses' => 'PagesController@get_training_solidworks',
    ]);

    Route::get('swood', [
        'as' => 'training-swood',
        'uses' => 'PagesController@get_training_swood',
    ]);

    Route::get('vr-ar', [
        'as' => 'training-vr-ar',
        'uses' => 'PagesController@get_training_vr_ar',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'partner'], function () {
    Route::get('/', [
        'as' => 'partner-products',
        'uses' => 'PagesController@get_partner',
    ]);

    Route::get('bimdex', [
        'as' => 'bimdex',
        'uses' => 'PagesController@get_bimdex',
    ]);

    Route::get('builtworks', [
        'as' => 'builtWorks',
        'uses' => 'PagesController@get_builtWorks',
    ]);

    Route::get('hdrlightstudio', [
        'as' => 'hdrlightstudio',
        'uses' => 'PagesController@get_hdrlightstudio',
    ]);

    Route::get('camworks', [
        'as' => 'camWorks',
        'uses' => 'PagesController@get_camWorks',
    ]);

    Route::get('datakit', [
        'as' => 'dataKit',
        'uses' => 'PagesController@get_dataKit',
    ]);

    Route::get('smap3d', [
        'as' => 'smap3d',
        'uses' => 'PagesController@get_smap3d',
    ]);

    Route::permanentRedirect('driveWorks', '/ecommerce/driveworks');

    Route::get('exactflat', [
        'as' => 'exactFlat',
        'uses' => 'PagesController@get_exactFlat',
    ]);

    Route::get('logopress', [
        'as' => 'logoPress',
        'uses' => 'PagesController@get_logoPress',
    ]);

    Route::group(['middleware' => ['web'], 'prefix' => 'swood', 'as' => 'swood.'], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'PagesController@get_swood',
        ]);

        Route::get('design', [
            'as' => 'design',
            'uses' => 'PagesController@get_swood_design',
        ]);

        Route::get('cam', [
            'as' => 'cam',
            'uses' => 'PagesController@get_swood_cam',
        ]);
    });

    Route::get('visual-components', [
        'as' => 'visualComponents',
        'uses' => 'PagesController@get_visualComponents',
    ]);
    Route::permanentRedirect('visualcomponents', '/partner/visual-components');
});

Route::group(['middleware' => ['web'], 'prefix' => 'events', 'as' => 'events.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'CalendarController@get_events_index',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'calendar'], function () {
    Route::get('/', [
        'as' => 'calendar',
        'uses' => 'CalendarController@get_calendar',
    ]);
    Route::get('event/{id}/{eventid}', [
        'as' => 'calendar-event',
        'uses' => 'CalendarController@get_calendar_event',
    ]);
    Route::post('events', [
        'as' => 'calendar-events',
        'uses' => 'CalendarController@get_events',
    ]);
    Route::get('event/{id}', [
        'as' => 'calendar-event',
        'uses' => 'CalendarController@get_calendar_event_slug',
    ]);
    Route::get('search/{search}', [
        'as' => 'calendar-search',
        'uses' => 'CalendarController@get_calendar_search',
    ]);
});

Route::get('subscription-services', [
    'as' => 'subscription-services',
    'uses' => 'PagesController@get_subservices',
]);

Route::get('subscription-centre', [
    'as' => 'subscription-centre',
    'uses' => 'PagesController@get_subscription_centre',
]);


Route::get('hardware', [
    'as' => 'hardware',
    'uses' => 'PagesController@get_hardware',
]);

Route::get('support', [
    'as' => 'support',
    'uses' => 'PagesController@get_support',
]);

Route::group(['middleware' => ['web'], 'prefix' => 'contact'], function () {
    Route::get('/', [
        'as' => 'contact',
        'uses' => 'ContactController@create',
    ]);
    Route::post('/', [
        'as' => 'contact_store',
        'uses' => 'ContactController@store',
    ]);
});

Route::permanentRedirect('contactForm', '/contact');
Route::permanentRedirect('generalContactForm', '/contact');

Route::get('get-a-trial', [
    'as' => 'get-a-trial',
    'uses' => 'PagesController@get_trial',
]);

Route::get('get-a-demo', [
    'as' => 'get-a-demo',
    'uses' => 'PagesController@get_demo',
]);

Route::get('get-a-quote', [
    'as' => 'get-a-quote',
    'uses' => 'PagesController@get_quote',
]);

// Route::get('walk-in-clinic', [
//     'as' => 'walk-in-clinic',
//     'uses' => 'PagesController@get_clinic',
// ]);

Route::get('testimonials', [
    'as' => 'testimonials',
    'uses' => 'PagesController@get_testimonials',
]);

Route::group(['middleware' => ['web'], 'prefix' => 'resources', 'as' => 'resources.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'ResourceController@index',
    ]);

    Route::get('/{id}/{slug}', [
        'as' => 'resource',
        'uses' => 'ResourceController@resource',
    ]);

    Route::get('/{id}/{slug}/file', [
        'as' => 'file',
        'uses' => 'ResourceController@file',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'promotions'], function () {
    Route::get('/{product_family_slug}', [
        'as' => 'promotions',
        'uses' => 'PagesController@get_promotions_page',
    ]);
    Route::get('/{product_family_slug}/{promotion_id}/{promotion_slug}', [
        'as' => 'promotion',
        'uses' => 'PagesController@get_promotion_page',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'blog'], function () {
    Route::get('/', [
        'as' => 'blog',
        'uses' => 'BlogController@index',
    ]);

    Route::get('/on/{date}', [
        'as' => 'blog-post',
        'uses' => 'BlogController@date_on',
    ])->where("query", "null");

    Route::get('/range/{date}', [
        'as' => 'blog-post',
        'uses' => 'BlogController@date_from',
    ]);

    Route::get('/range/{date}/{date2}', [
        'as' => 'blog-post-range',
        'uses' => 'BlogController@date_from_to',
    ]);

    Route::get('/search/{query?}', [
        'as' => 'blog-search',
        'uses' => 'BlogController@search',
    ]);

    Route::get('/search/{query}/on/{date?}', [
        'as' => 'blog-search-on',
        'uses' => 'BlogController@date_search_on',
    ]);

    Route::get('/search/{query}/range/{date}', [
        'as' => 'blog-search-range-from',
        'uses' => 'BlogController@date_search_from',
    ]);

    Route::get('/search/{query}/range/{date}/{date2}', [
        'as' => 'blog-search-range-from-to',
        'uses' => 'BlogController@date_search_from_to',
    ]);

    Route::post('/search', [
        'as' => 'blog-searcher',
        'uses' => 'BlogController@searcher',
    ]);

    Route::get('/category/{query}', [
        'as' => 'blog-category',
        'uses' => 'BlogController@category',
    ]);

    Route::get('/{postid}/{slug?}', [
        'as' => 'blog-post',
        'uses' => 'BlogController@post',
    ]);
});

//PROMOTION ROUTES
Route::group(['middleware' => ['web'], 'prefix' => 'promotions'], function () {

    Route::get('solidworks', [
        'as' => 'solidworks-promotions',
        'uses' => 'PagesController@get_solidworks_promo',
    ]);

    Route::get('markforged', [
        'as' => 'markforged-promotions',
        'uses' => 'PagesController@get_markforged_promo',
    ]);
});

//Comments
// Route::post('newComment', array('uses' => 'CommentController@newComment'));

// Route::get('getComments', array('uses' => 'CommentController@getComments'));

//Comment Like functions
// Route::post('commentLikes', array('uses' => 'CommentController@commentLikes'));

//Check captcha responses
// Route::post('checkCaptcha', array('uses' => 'PagesController@checkCaptcha'));

//EXPORT CALENDAR EVENTS
Route::get('exportCalendar/{year}/{month}', array('uses' => 'PagesController@exportCalendar'));

//EXPORT SINGLE EVENT
Route::get('exportEvent/{id}', array('uses' => 'PagesController@exportEvent'));

//ADMIN ROUTES
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::group(['prefix' => 'orders'], function () {
        Route::get('order/label/{orderid}', array('as' => 'order-label', 'uses' => 'ShippingController@eShipperPrintableLabels'));
    });

    Route::post('upload-image', 'AdminController@upload')->name('uploadImage');
});

Route::group(['middleware' => ['web'], 'prefix' => 'simerics'], function () {
    Route::get('/', [
        'as' => 'simerics',
        'uses' => 'PagesController@get_simerics',
    ]);
});

Route::group(['middleware' => ['web'], 'prefix' => 'careers'], function () {

    Route::get('/', [
        'as' => 'careers',
        'uses' => 'PagesController@get_careers',
    ]);

    Route::get('positions', [
        'as' => 'positions',
        'uses' => 'PagesController@get_positions',
    ]);

    Route::get('positions/{position}', [
        'as' => 'positions-position',
        'uses' => 'PagesController@get_position',
    ]);
});

Route::get('solidworks-subscription', [
    'as' => 'solidworksSubscription',
    'uses' => 'PagesController@get_solidworksSubscription',
]);

Route::get('about', [
    'as' => 'about',
    'uses' => 'PagesController@get_about',
]);

Route::get('referral-program', [
    'as' => 'referral-program',
    'uses' => 'PagesController@get_referral_program',
]);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::post('gallery/multiple', ['as' => 'gallery.upload', 'uses' => 'GalleryController@multiple_upload']);
    Route::post('gallery/uniquename', ['as' => 'gallery.uniquename', 'uses' => 'GalleryController@uniquename']);
    Route::post('gallery/delete', ['as' => 'gallery.delete', 'uses' => 'GalleryController@delete']);
    Route::post('gallery/external-image', ['as' => 'gallery.external_image', 'uses' => 'GalleryController@external_image']);
});

Route::get('privacy-policy', [
    'as' => 'privacy-policy',
    'uses' => 'PagesController@get_privacy_policy',
]);

Route::redirect('markforged-free-demo', 'markforged-demo');
Route::redirect('tv', 'cadmicroTV');
Route::redirect('cadmicroTV', 'cadmicro-tv');

Route::redirect('/partner/driveworks', '../solidworks/ecommerce/driveworks')->name("driveworksOld");

//Form Submission Email Capture
Route::group(['middleware' => ['web'], 'prefix' => 'crm', 'as' => 'crm.'], function () {

    Route::get('show', [
        'as' => 'show',
        'uses' => 'CRMController@show',
    ]);

    Route::post('post', [
        'as' => 'post',
        'uses' => 'CRMController@post',
    ]);
});