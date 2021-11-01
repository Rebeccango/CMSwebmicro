<?php
namespace App\Http\Controllers;

use DB;
use URL;
use File;
use Input;
use Route;
use Artisan;
use Request;
use Redirect;
use Response;
use App\Events;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function get_home()
    {
        $banners = DB::table('banners')
            ->where('visible', '=', '1')
            ->orderBy('order', 'asc')
            ->get();

        return view('pages.index', ['banners' => $banners]);
    }

    public function clear_artisan_cache()
    {
        Artisan::call('cache:clear');
        Artisan::call('route:cache');
        Artisan::call('config:cache');
        Artisan::call('config:clear');
        return "Cache was cleared";
    }

    public function get_careers()
    {
        return view('pages.careers.careers');
    }

    public function get_electrical_hands_on_event_survey()
    {
        return view('pages.surveys.electrical-hands-on-event-survey');
    }

    public function show_packing()
    {
        return view('pages.BoxPacker-master.test');
    }

    public function get_technical_support_survey()
    {
        return view('pages.surveys.technical-support-survey');
    }

    public function get_training_satisfaction_survey()
    {
        return view('pages.training-satisfaction-survey');
    }

    public function get_bigrep_design_contest_upload()
    {
        return view('pages.contests.BigRepContestUpload');
    }

    public function get_training_satisfaction_survey_success()
    {
        return view('pages.training-satisfaction-survey-success');
    }

    public function get_eptech_trade_show()
    {
        return view('pages.promotions.eptech-trade-show');
    }

    public function get_admoffer()
    {
        return view('pages.promotions.admoffer');
    }

    public function test()
    {
        return view('pages.test');
    }

    public function get_thanks()
    {
        return view('responses.thanks');
    }

    public function get_form_thanks()
    {
        return view('responses.form-thanks');
    }

    public function get_error()
    {
        return view('responses.error');
    }

    public function get_2017_launch_event()
    {
        return view('pages.solidworks-2017-launch');
    }

    public function get_fill_it_forward()
    {
        return view('pages.events.fill-it-forward');
    }

    public function get_contactForm()
    {
        return view('pages.contact.contact');
    }

    public function get_solidworks_q2_promo()
    {
        return view('pages.promotions.solidworks-q2');
    }

    public function get_cadmicroTV()
    {
        return view('pages.cadmicroTV');
    }

    public function get_solidworks_q2_promo_thank_you()
    {
        return view('responses.solidworks-q2-promo');
    }

    public function get_solidworks_cam()
    {
        return view('pages.solidworks.solidworks-cam');
    }

    public function get_instructor_led_online_custom_training()
    {
        return view('pages.training.instructor-led-online-custom-training');
    }

    public function get_instructor_led_online_custom_training_thanks()
    {
        return view('responses.instructor-led-online-custom-training-thanks');
    }

    public function get_markforged_open_house()
    {
        return view('pages.markforged.markforged-open-house');
    }

    public function get_markforged_sample()
    {
        return view('pages.markforged.request-sample');
    }

    public function get_promotions_page($product_family_slug)
    {
        $product_family = \App\Company::where('slug', $product_family_slug)->first();

        if (!empty($product_family)) {
            $promotions = \App\Promotion::where('product_family', $product_family->id);

            if (\Auth::check() && \Auth::user()->can('edit', $promotions)) {
                $promotions = $promotions->get();
            } else {
                $promotions = $promotions->active()->get();

            }

            if (count($promotions) > 0) {
                return view('pages.promotions.promotions')->with([
                    'promotions' => $promotions,
                    'product_family' => $product_family,
                ]);
            }
        }
        abort(404);
    }

    public function get_promotion_page($product_family_slug, $promotion_id, $promotion_slug)
    {
        $product_family = \App\Company::where('slug', $product_family_slug)->first();

        if (!empty($product_family)) {
            $promotions = \App\Promotion::where('product_family', $product_family->id);

            if (\Auth::check() && \Auth::user()->can('edit', $promotions)) {
                $promotions = $promotions->get();
            } else {
                $promotions = $promotions->active()->get();

            }

            if (count($promotions) > 0) {
                return view('pages.promotions.promotions')->with([
                    'promotions' => $promotions,
                    'product_family' => $product_family,
                ]);
            }
        }
        abort(404);
    }

    public function get_landing($slug)
    {
        $results = DB::table('landings')->where('slug', '=', $slug)->first();

        if ($results) {
            if ($results->status !== "PUBLISHED") {

                if (Auth::check()) {
                    if (!Auth::user()->hasPermission('edit_landings')) {
                        abort(404);
                    }
                }else{
                    abort(404);
                }
            }
            return view('pages.landing', ['landing' => $results]);
        }
        abort(404);
    }

    public function get_positions()
    {
        $results = DB::table('careers')->where('status', '=', 'PUBLISHED')->orderBy('open', 'desc')->get();

        return view('pages.careers.positions', ['positions' => $results]);
    }

    public function get_position($position)
    {
        if ($position != null && $position != "") {
            $results = DB::table('careers')->where('status', '=', 'PUBLISHED')
                ->where('slug', '=', $position)->first();
            if ($results != null && $results != "") {
                return view('pages.careers.position', ['position' => $results]);
            }
        }

        return redirect()->route('positions');
    }

    public function survey()
    {
        $response_1 = Input::get('response_1');
        $response_2 = Input::get('response_2');
        $response_1 = $response_1 != null ? ($response_1 < 0 ? 0 : ($response_1 > 10 ? 10 : $response_1)) : null;
        $response_2 = $response_2 != null ? ($response_2 < 0 ? 0 : ($response_2 > 10 ? 10 : $response_2)) : null;

        $name = Input::get('survey');
        $ip = Request::ip();
        if ($name != null) {
            if ($response_1 != null || $response_2 != null) {
                $check = DB::table('surveys')
                    ->where('survey_name', '=', $name)
                    ->where('ip', '=', $ip)
                    ->exists();
                if (!$check) {
                    DB::table('surveys')->insert(
                        [
                            "survey_name" => $name,
                            "survey_response" => ($response_1 != null ? $response_1 : $response_2),
                            "ip" => $ip,
                        ]
                    );
                }
            }
        }

        return view('emails.satisfaction_survey');
    }

    public function get_about()
    {
        return view('pages.about');
    }

    public function get_referral_program()
    {
        return view('pages.referral-program');
    }

    public function get_xr()
    {
        return view('pages.xr.index');
    }

    public function get_iot()
    {
        return view('pages.iot.iot');
    }

    public function get_subscription_centre()
    {
        return view('pages.subscription-centre');
    }

    public function get_customer_experience_center()
    {
        return view('pages.customer-experience-center');
    }

    public function get_trumpf_trumark()
    {
        return view('pages.trumpf.trumark');
    }
    public function get_trumpf_truprint()
    {
        return view('pages.trumpf.truprint');
    }

    public function get_hp()
    {
        return view('pages.hp.index');
    }

    public function get_hp_metal_jet()
    {
        return view('pages.hp.hp-metal-jet');
    }

    public function get_materialise()
    {
        return view('pages.hp.materialise-magics');
    }

    public function get_hp_jet_fusion_4200()
    {
        return view('pages.hp.jet-fusion-4200-series');
    }

    public function get_hp_jet_fusion_5200()
    {
        return view('pages.hp.jet-fusion-5200-series');
    }

    public function get_jet_fusion_500_300_series()
    {
        return view('pages.hp.jet-fusion-500-300-series');
    }

    public function get_markforged_whitepapers($filename)
    {
        $path = storage_path('app/public/pdfs/markforged/whitepapers/' . $filename);
        if (!$fileContents = @file_get_contents($path)) {
            return abort(404);
        } else {
            return response($fileContents, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"',
            ])->withCookie(cookie()->forever($filename . '-filled', 'true'));
        }
    }

    public function get_whitepapers($filename)
    {
        $path = storage_path('app/public/pdfs/whitepapers/' . $filename);
        if (!$fileContents = @file_get_contents($path)) {
            return abort(404);
        } else {
            return response($fileContents, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"',
            ])->withCookie(cookie()->forever($filename . '-filled', 'true'));
        }
    }

    public function download_jet_fusion_300_500_flyer()
    {
        $filename = 'MJF 300 & 500 Flyer.PDF';
        $path = storage_path('app/public/pdfs/hp/MJF 300 & 500 Flyer.PDF');

        return response(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ])->withCookie(cookie()->forever('downloadFlyerFormFilled', 'true'));
    }

    public function download_3d_printing_buyers_guide()
    {
        $filename = '3d-printing-buyers-guide.pdf';
        $path = storage_path('app/public/pdfs/markforged/3d-printing-buyers-guide.pdf');

        return response(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ]);
    }

    public function get_nanodimensions()
    {
        return redirect()->route('dragon-fly-pro');
        //  return view('pages.nanodimensions.nanodimensions');
    }

    public function get_dragonfly_ldm()
    {
        return view('pages.nanodimensions.dragonfly-ldm');
    }

    // public function get_dragonfly_pro_pdf()
    // {
    //     $filename = 'DragonFly-2020-pro-Professional-Electronics.pdf';
    //     $path = storage_path('app/public/pdfs/nanodimensions/DragonFly-2020-pro-Professional-Electronics.pdf');

    //     return \Response::make(file_get_contents($path), 200, [
    //         'Content-Type' => 'application/pdf',
    //         'Content-Disposition' => 'inline; filename="' . $filename . '"']);
    // }

    public function get_ultimaker()
    {
        return view('pages.ultimaker.ultimaker');
    }
    public function get_ultimaker_original()
    {
        return view('pages.ultimaker.ultimaker-original');
    }
    public function get_ultimaker_essentials()
    {
        return view('pages.ultimaker.ultimaker-essentials');
    }
    public function get_ultimaker_s5()
    {
        return view('pages.ultimaker.ultimaker-s5');
    }
    public function get_ultimaker_s3()
    {
        return view('pages.ultimaker.ultimaker-s3');
    }
    public function get_ultimaker_2plus_connect()
    {
        return view('pages.ultimaker.ultimaker-2plus-connect');
    }
    public function get_ultimaker_cura()
    {
        return view('pages.ultimaker.ultimaker-cura');
    }
    public function get_intamsys_index()
    {
        return view('pages.intamsys.index');
    }
    public function get_intamsys_funmat_ht()
    {
        return view('pages.intamsys.funmat_ht');
    }
    public function get_intamsys_funmat_pro410()
    {
        return view('pages.intamsys.funmat_pro410');
    }
    public function get_intamsys_funmat_pro610ht()
    {
        return view('pages.intamsys.funmat_pro610ht');
    }
    public function get_gom()
    {
        return view('pages.3dscanning.gom');
    }
    public function get_gom_atos_q()
    {
        return view('pages.3dscanning.atos-q');
    }
    public function get_3d_scanning()
    {
        return view('pages.3dscanning.index');
    }
    public function get_3d_scanning_hardware()
    {
        return view('pages.3dscanning.hardware');
    }
    public function get_3d_scanning_software()
    {
        return view('pages.3dscanning.software');
    }
    public function get_3d_scanning_gom_robot()
    {
        return view('pages.3dscanning.gom-robot');
    }
    public function get_3d_scanning_gom_portable()
    {
        return view('pages.3dscanning.gom-portable');
    }
    public function get_3d_scanning_zeiss_automated()
    {
        return view('pages.3dscanning.zeiss-automated');
    }
    public function get_3d_scanning_gom_inspect_free()
    {
        return view('pages.3dscanning.gom-inspect-free');
    }
    public function get_3d_scanning_gom_inspect_pro()
    {
        return view('pages.3dscanning.gom-inspect-professional');
    }

    public function get_3d_scanning_geomagic_sw()
    {
        return view('pages.3dscanning.geomagic-sw');
    }

    public function get_3d_scanning_geomagic_design_x()
    {
        return view('pages.3dscanning.geomagic-design-x');
    }

    public function get_3d_scanning_geomagic_control_x()
    {
        return view('pages.3dscanning.geomagic-control-x');
    }

    public function get_3d_scanning_services()
    {
        return view('pages.3dscanning.services');
    }
    public function get_3d_scanning_training()
    {
        return view('pages.3dscanning.training');
    }
    public function get_education()
    {
        return view('pages.education.education');
    }
    public function get_education_3d_printers()
    {
        return view('pages.education.3d-printers');
    }
    public function get_education_3d_scanning()
    {
        return view('pages.education.3d-scanning');
    }
    public function get_education_cadcam_software()
    {
        return view('pages.education.cadcam-software');
    }
    public function get_education_guides()
    {
        return view('pages.education.guides');
    }
    public function get_formlabs()
    {
        return view('pages.formlabs.formlabs');
    }
    public function get_formlabs_form3()
    {
        return view('pages.formlabs.form3');
    }
    public function get_formlabs_form3L()
    {
        return view('pages.formlabs.form3L');
    }
    public function get_formlabs_form2()
    {
        return view('pages.formlabs.form2');
    }
    public function get_formlabs_fuse1()
    {
        return view('pages.formlabs.fuse1');
    }

    public function get_dyemansion()
    {
        return view('pages.dyemansion.index');
    }

    public function get_nexa3d_nxe_400()
    {
        return view('pages.nexa3d.nxe400');
    }

    public function get_nexa3d_nxd_200()
    {
        return view('pages.nexa3d.nxd200');
    }

    public function get_powershot_c()
    {
        return view('pages.dyemansion.powershot_c');
    }

    public function get_powershot_s()
    {
        return view('pages.dyemansion.powershot_s');
    }

    public function get_powerfuse_s()
    {
        return view('pages.dyemansion.powerfuse_s');
    }

    public function get_dyemansion_dm60()
    {
        return view('pages.dyemansion.dyemansion_dm60');
    }

    public function get_simerics()
    {
        return view('pages.simerics.simerics');
    }

    public function get_bigrep()
    {
        return view('pages.bigrep.bigrep');
    }

    public function get_bigrep_one()
    {
        return view('pages.bigrep.one');
    }

    public function get_bigrep_studio()
    {
        return view('pages.bigrep.studio');
    }

    public function get_bigrep_pro_demo()
    {
        return view('pages.bigrep.pro-landing');
    }

    public function get_bigrep_pro()
    {
        return view('pages.bigrep.pro');
    }

    public function get_bigrep_edge()
    {
        return view('pages.bigrep.edge');
    }

    public function get_markforged()
    {
        return view('pages.markforged.markforged');
    }

    public function get_markforged_demo()
    {
        return view('pages.markforged.markforged-demo');
    }

    public function get_onyxone()
    {
        return view('pages.markforged.onyx-one');
    }

    public function get_onyxpro()
    {
        return view('pages.markforged.onyx-pro');
    }

    public function get_marktwo()
    {
        return view('pages.markforged.mark-two');
    }

    public function get_cmsapps()
    {
        return view('pages.cmsapps');
    }

    public function get_solidworks_3dexperience_startup()
    {
        return view('pages.solidworks.3dexperience.startups');
    }

    public function get_solidworks_3dexperience_platform()
    {
        return view('pages.solidworks.3dexperience.platform');
    }
    public function get_solidworks_3dexperience_design()
    {
        return view('pages.solidworks.3dexperience.design');
    }
    public function get_solidworks_3dexperience_design_drafter()
    {
        return view('pages.solidworks.3dexperience.drafter');
    }
    public function get_solidworks_3dexperience_design_3dsculptor()
    {
        return view('pages.solidworks.3dexperience.3d-sculptor');
    }
    public function get_solidworks_3dexperience_design_3dcreator()
    {
        return view('pages.solidworks.3dexperience.3d-creator');
    }

    public function get_solidworks_3dexperience_simulate()
    {
        return view('pages.solidworks.3dexperience.simulate');
    }

    public function get_solidworks_3dexperience_simulate_structural_pro_eng()
    {
        return view('pages.solidworks.3dexperience.structural-pro-eng');
    }

    public function get_solidworks_3dexperience_simulate_simulia_sim_foundation()
    {
        return view('pages.solidworks.3dexperience.simulia-sim-foundation');
    }

    public function get_solidworks_3dexperience_manage()
    {
        return view('pages.solidworks.3dexperience.manage');
    }

    public function get_solidworks_ems()
    {
        return view('pages.solidworks.ems');
    }

    public function get_solidworks_hfworks()
    {
        return view('pages.solidworks.hfworks');
    }

    public function get_solidworks_3dexperience_simuliaworks()
    {
        return view('pages.solidworks.3dexperience.simuliaworks');
    }

    public function get_repSolidworksElectrical()
    {
        return view('pages.REP.repSolidworksElectrical');
    }

    public function get_repSolidworksElectricalWatchVideo()
    {
        return view('pages.REP.repSolidworksElectricalWatchVideo');
    }

    public function get_repSolidworksElectricalWatchWebinar()
    {
        return view('pages.REP.repSolidworksElectricalWatchWebinar');
    }

    public function get_repSolidworksElectricalGetSymbols()
    {
        return view('pages.REP.repSolidworksElectricalGetSymbols');
    }

    public function get_repSolidworksInspection()
    {
        return view('pages.REP.repSolidworksInspection');
    }

    public function get_repSolidworksInspectionWatchVideo()
    {
        return view('pages.REP.repSolidworksInspectionWatchVideo');
    }

    public function get_repSolidworksLaunch2017PCB()
    {
        return view('pages.REP.repSolidworksLaunch2017PCB');
    }

    public function get_repSolidworksLaunch2017PCBWatchWebinar()
    {
        return view('pages.REP.repSolidworksLaunch2017PCBWatchWebinar');
    }

    public function get_repSolidworksPDM()
    {
        return view('pages.REP.repSolidworksPDM');
    }

    public function get_repSolidworksPDM2017()
    {
        return view('pages.REP.repSolidworksPDM2017');
    }

    public function get_repSolidworksPDM2017WatchVideo()
    {
        return view('pages.REP.repSolidworksPDM2017WatchVideo');
    }

    public function get_contact()
    {
        return view('pages.contact');
    }

    public function get_solidworksSubscription()
    {
        return view('pages.solidworksSubscription');
    }

    public function get_subservices()
    {
        return view('pages.subscription_services');
    }

    public function get_hardware()
    {
        return view('pages.hardware');
    }

    public function get_desktop_series()
    {
        return view('pages.markforged.desktop');
    }

    public function get_industrial_series()
    {
        return view('pages.markforged.industrial');
    }

    public function get_metal_series()
    {
        return view('pages.markforged.metal');
    }

    public function get_solidworks()
    {
        // $this->update_forms();

        return view('pages.solidworks.solidworks');
    }

    public function get_solidworks_solidsteel()
    {
        return view('pages.solidworks.solidsteel');
    }

    public function get_solidworks_sell()
    {
        return view('pages.solidworks.solidworks-sell');
    }

    public function get_solidworks_sell_demo()
    {
        return view('pages.solidworks.solidworks-sell-demo');
    }

    public function get_solidworks_premium()
    {
        return view('pages.solidworks.solidworks-3dcad-premium');
    }

    public function get_solidworks_pro()
    {
        return view('pages.solidworks.solidworks-3dcad-pro');
    }

    public function get_solidworks_standard()
    {
        return view('pages.solidworks.solidworks-3dcad-standard');
    }

    public function get_simulation_premium()
    {
        return view('pages.solidworks.solidworks-simulation-premium');
    }

    public function get_simulation_capabilities()
    {
        return view('pages.solidworks.solidworks-simulation-capabilities');
    }

    public function get_simulation_standard()
    {
        return view('pages.solidworks.solidworks-simulation-standard');
    }

    public function get_simulation_professional()
    {
        return view('pages.solidworks.solidworks-simulation-professional');
    }

    public function get_simulation_flowSimulation()
    {
        return view('pages.solidworks.solidworks-simulation-flowSimulation');
    }

    public function get_simulation_plastics()
    {
        return view('pages.solidworks.solidworks-simulation-plastics');
    }

    public function get_simulation_sustainability()
    {
        return view('pages.solidworks.solidworks-simulation-sustainability');
    }

    public function get_dataManagement_professional()
    {
        return view('pages.solidworks.solidworks-dataManagement-professional');
    }

    public function get_dataManagement_standard()
    {
        return view('pages.solidworks.solidworks-dataManagement-standard');
    }

    public function get_dataManagement_manage()
    {
        return view('pages.solidworks.manage');
    }

    public function get_dataManagement_exalead()
    {
        return view('pages.solidworks.exalead');
    }

    public function get_Electrical_electrical()
    {
        return view('pages.solidworks.solidworks-Electrical-electrical');
    }

    public function get_Electrical_pcb()
    {
        return view('pages.solidworks.solidworks-Electrical-pcb');
    }

    public function get_Electrical_pcbConnector()
    {
        return view('pages.solidworks.solidworks-Electrical-pcbConnector');
    }

    public function get_technical_composer()
    {
        return view('pages.solidworks.solidworks-technical-composer');
    }

    public function get_technical_modelBasedDefinition()
    {
        return view('pages.solidworks.solidworks-technical-modelBasedDefinition');
    }

    public function get_technical_inspection()
    {
        return view('pages.solidworks.solidworks-technical-inspection');
    }

    public function get_otherProducts_rendering()
    {
        return view('pages.solidworks.solidworks-otherProducts-visualize');
    }

    public function get_otherProducts_industrialDesigner()
    {
        return view('pages.solidworks.solidworks-otherProducts-industrialDesigner');
    }

    public function get_otherProducts_conceptualDesigner()
    {
        return view('pages.solidworks.solidworks-otherProducts-conceptualDesigner');
    }

    public function get_otherProducts_draftSight()
    {
        return view('pages.solidworks.solidworks-otherProducts-draftSight');
    }

    public function get_3dconnexion()
    {
        return view('pages.solidworks.3dconnexion');
    }

    public function get_demo_equipment_sale()
    {
        return view('pages.demo-equipment-sale');
    }

    public function get_team_eda()
    {
        return view('pages.other.team-eda');
    }

    public function get_bimdex()
    {
        return view('pages.solidworks.bimdex');
    }

    public function get_builtWorks()
    {
        return view('pages.partner.builtWorks');
    }

    public function get_smap3d()
    {
        return view('pages.partner.smap3d');
    }

    public function get_hdrlightstudio()
    {
        return view('pages.partner.hdr_light_studio');
    }

    public function get_camWorks()
    {
        return view('pages.partner.camWorks');
    }

    public function get_dataKit()
    {
        return view('pages.partner.dataKit');
    }

    public function get_driveWorks()
    {
        return view('pages.partner.driveWorks');
    }

    public function get_driveWorks_compare()
    {
        return view('pages.partner.driveWorks_compare');
    }

    public function get_exactFlat()
    {
        return view('pages.partner.exactFlat');
    }

    public function get_keyShot()
    {
        return view('pages.partner.keyShot');
    }

    public function get_logoPress()
    {
        return view('pages.partner.logoPress');
    }

    public function get_optisWork()
    {
        return view('pages.partner.optisWork');
    }

    public function get_swood()
    {
        return view('pages.partner.swood.index');
    }

    public function get_swood_design()
    {
        return view('pages.partner.swood.design');
    }

    public function get_swood_cam()
    {
        return view('pages.partner.swood.cam');
    }

    public function get_visualComponents()
    {
        return view('pages.partner.visualComponents');
    }

    public function get_Formtest()
    {
        return view('pages.partner.Formtest');
    }

    public function get_training()
    {
        return view('pages.training.training');
    }

    public function get_training_solidworks()
    {
        return view('pages.training.training-solidworks');
    }

    public function get_training_vr_ar()
    {
        return view('pages.training.training-vr-ar');
    }

    public function get_training_swood()
    {
        return view('pages.training.training-swood');
    }

    public function get_partner()
    {
        return view('pages.partner.partner');
    }

    public function get_privacy_policy()
    {
        return view('pages.privacy-policy');

        $filename = 'privacy-policy.pdf';
        $path = asset('storage/pdfs/privacy-policy.pdf');
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ]);
    }

    public function get_matrix_solidworks()
    {
        return view('pages.matrix.solidworks');
    }

    public function get_matrix_solidworks_pdm()
    {
        return view('pages.matrix.solidworks-pdm');
    }

    public function get_support()
    {
        return Redirect::to('https://portal.cadmicro.com');
    }

    public function page_title($url)
    {
        $fp = file_get_contents($url);
        if (!$fp) {
            return null;
        }

        $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
        if (!$res) {
            return null;
        }

        // Clean up title: remove EOL's and excessive whitespace.
        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
        $title = trim($title);
        return $title;
    }

    public function getbody($filename)
    {
        $html = file_get_contents($filename);
        $bodys = preg_match("~<main.*?>(.*?)<\/main>~is", $html, $match);
        if (!$bodys) {
            $body = '';
        } else {
            $body = $match[1];
            $cleanBody = preg_replace('/(<(script|style)\b[^>]*>).*?(<\/\2>)/is', "$1$3", $body);
            $body = !$cleanBody ? '' : $cleanBody;
        }

        return strip_tags($body);
    }

    public function get_generateSiteMap()
    {
        $events = DB::table('events')
            ->where('status', '=', 'ACTIVE')->select('slug', 'id', 'updated_at')->get();
        $blogs = DB::table('posts')
            ->where('status', '=', 'PUBLISHED')->select('slug', 'id', 'updated_at')->get();
        $landings = DB::table('landings')
            ->where('status', '=', 'PUBLISHED')->select('slug', 'id', 'updated_at')->get();

        $pages[] = null;
        $sitemap = "";
        $sitemap .= '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($events as $event) {
            $pages[] = '<url><loc>'
            . route('calendar-event', $event->id) . "/" . $event->slug .
            '</loc>
                   <lastmod>' . Carbon::parse($event->updated_at)->toDateTimeString() . '</lastmod>
                   <changefreq>weekly</changefreq>
                   <priority>0.6</priority>
                   </url>';
        }
        foreach ($blogs as $blog) {
            $pages[] = '<url><loc>' .
            route('blog-post', ['postid' => $blog->id, 'slug' => $blog->slug]) .
            '</loc>
                    <lastmod>' . Carbon::parse($blog->updated_at)->toDateTimeString() . '</lastmod>
                    <changefreq>weekly</changefreq>
                    <priority>0.6</priority>
                    </url>';
        }
        foreach ($landings as $landing) {
            $pages[] = '<url><loc>' .
            route('landing', ['slug' => $landing->slug]) .
            '</loc>
                   <lastmod>' . Carbon::parse($landing->updated_at)->toDateTimeString() . '</lastmod>
                   <changefreq>weekly</changefreq>
                   <priority>0.6</priority>
                   </url>';
        }

        $sitemapfile = File::get(public_path() . '/sitemap/sitemap.txt');
        $sitemap .= $sitemapfile;

        for ($i = 0; $i < count($pages); $i++) {
            $sitemap .= $pages[$i];
        }

        $sitemap .= '</urlset>';

        File::put(public_path() . '/sitemap.xml', $sitemap);

        return view('scripts.sitemap-generator.sitemap-generator',
            ['sitemap' => $sitemap]);
    }

    public function get_solidworks_promo()
    {
        return view('pages.promotions.solidworks');
    }

    public function get_markforged_promo()
    {
        return view('pages.promotions.markforged');
    }

    public function get_quote()
    {
        return view('pages.get-a-quote');
    }

    public function get_demo()
    {
        return view('pages.get-a-demo');
    }

    public function get_trial()
    {
        return view('pages.get-a-trial');
    }

    public function get_clinic()
    {
        return view('pages.walk-in-clinic');
    }

    public function get_testimonials()
    {
        $testimonials = DB::table('testimonials')->where('status', '=', 'ACTIVE')->get();
        return view('pages.testimonials', ['testimonials' => $testimonials]);
    }

    public function update_forms()
    {

        $count = 0;

        $events = Events::where('clickd_form', 'LIKE', '%' . 'pages/dordofmheeipcaanojceow.html' . '%')->get();
        foreach ($events as $event) {
            $event->clickd_form = '<div data-form-block-id="10c26446-72ad-e911-a987-000d3a3702ca"></div><div id="d97M2EO21vai55Nb05MPJsDtTUruzED42AiZMbqLyT-Q"></div>';
            $event->save();
            $count++;
        }

        return $count;
    }

    public function exportCalendar($year, $month)
    {

        $events = DB::table('events')->whereYear('start_time', '=', $year);
        if ($month != 0) {
            $events->whereMonth('start_time', '=', $month);
        }
        $events = $events->get();

        $ical = "";
        if (count($events) > 0) {
            $ical .= "BEGIN:VCALENDAR\n"
                . "VERSION:2.0\n"
                . "PRODID:-//CAD Micro - ECPv4.4.0.1//NONSGML v1.0//EN\n"
                . "CALSCALE:GREGORIAN\n"
                . "METHOD:PUBLISH\n"
                . "X-WR-CALNAME:CAD Micro\n"
                . "X-ORIGINAL-URL:http://www.cadmicro.com\n"
                . "X-WR-CALDESC:Events for CAD Micro\n";
            foreach ($events as $event) {
                $start = date('Ymd\THis a', strtotime($event->start_time));
                $end = date('Ymd\THis a', strtotime($event->end_time));
                $ical .= "BEGIN:VEVENT\n"
                . "UID:" . md5(uniqid(mt_rand(), true)) . "@yourhost.test\n"
                . "DTSTAMP:" . gmdate('Ymd') . 'T' . gmdate('His') . "Z\n"
                . "DTSTART:" . $start . "Z\n"
                . "DTEND:" . $end . "Z\n"
                . "DESCRIPTION:" . $event->excerpt . "\n"
                . "SUMMARY:" . $event->title . "\n";

                if ($event->location_id != "") {
                    $loc = DB::table('locations')->where('id', $event->location_id)->first();
                    $location = $loc->address . ", " . $loc->city . ", " . $loc->province . ", " . $loc->postal_code;
                    $ical .= "LOCATION:" . $location . "\n";
                }

                $ical .= "URL:" . url($event->slug) . "\n"
                    . "CATEGORIES:Courses - On Site\n"
                    . "ORGANIZER;CN=\"Marwan%20Aziz\":MAILTO:maziz@cadmicro.com\n"
                    . "END:VEVENT\n";
            }
            $ical .= "END:VCALENDAR";

            //set correct content-type-header
            header('Content-type: text/calendar; charset=utf-8');
            header('Content-Disposition: attachment; filename=cmscalendar-' . uniqid(mt_rand(), true) . '.ics');
            echo $ical;
        }
        exit;
    }

    public function exportEvent($id)
    {

        $Event = DB::table('events')->where('id', '=', $id);
        $Event = $Event->get();

        $ical = "";
        if (count($Event) > 0) {
            $ical .= "BEGIN:VCALENDAR\n"
                . "VERSION:2.0\n"
                . "PRODID:-//CAD Micro - ECPv4.4.0.1//NONSGML v1.0//EN\n"
                . "CALSCALE:GREGORIAN\n"
                . "METHOD:PUBLISH\n"
                . "X-WR-CALNAME:CAD Micro\n"
                . "X-ORIGINAL-URL:http://www.cadmicro.com\n"
                . "X-WR-CALDESC:Events for CAD Micro\n";
            foreach ($Event as $event) {
                $start = date('Ymd\THis a', strtotime($event->start_time));
                $end = date('Ymd\THis a', strtotime($event->end_time));
                $ical .= "BEGIN:VEVENT\n"
                . "UID:" . md5(uniqid(mt_rand(), true)) . "@yourhost.test\n"
                . "DTSTAMP:" . gmdate('Ymd') . 'T' . gmdate('His') . "Z\n"
                . "DTSTART:" . $start . "Z\n"
                . "DTEND:" . $end . "Z\n"
                . "DESCRIPTION:" . $event->excerpt . "\n"
                . "SUMMARY:" . $event->title . "\n";

                if ($event->location_id != "") {
                    $loc = DB::table('locations')->where('id', $event->location_id)->first();
                    $location = $loc->address . ", " . $loc->city . ", " . $loc->province . ", " . $loc->postal_code;
                    $ical .= "LOCATION:" . $location . "\n";
                }

                $ical .= "URL:" . url($event->slug) . "\n"
                    . "CATEGORIES:Courses - On Site\n"
                    . "ORGANIZER;CN=\"Marwan%20Aziz\":MAILTO:maziz@cadmicro.com\n"
                    . "END:VEVENT\n";
            }
            $ical .= "END:VCALENDAR";

            //set correct content-type-header
            header('Content-type: text/calendar; charset=utf-8');
            header('Content-Disposition: attachment; filename=cmscalendar-' . uniqid(mt_rand(), true) . '.ics');
            echo $ical;
        }
        exit;
    }

    public function get_additive_solutions_all()
    {
        return view('pages.additive-solutions');
    }
}
