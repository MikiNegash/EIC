<?php

namespace App\Http\Controllers\Actor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class adminController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function dashboard2(){
        return view('admin.dashboard2');
    }
    public function dashboard1(){
        return view('admin.dashboard2');
    }


    public function investors(){
        return view('admin.investors');
    }

    public function dashboard3(){
        return view('admin.dashboard3');
    }
    public function dashboard4(){
        return view('admin.dashboard4');
    }
    public function dashboard5(){
        return view('admin.dashboard5');
    }
    public function dashboard6(){
        return view('admin.dashboard6');
    }
    public function dashboard7(){
        return view('admin.dashboard7');
    }
    public function dashboard8(){
        return view('admin.dashboard8');
    }

    public function dashboard9(){
        return view('admin.dashboard9');
    }
        public function dashboard10(){
        return view('admin.dashboard10');
    }
    public function dashboard11(){
        return view('admin.dashboard11');
    }

    public function notofication(){
        return view('admin.notofication');
    }

    public function terms_conditions(){
        return view('admin.terms_conditions');
    }
    public function checkout(){
        return view('admin.checkout');
    }
    public function login1(){
        return view('admin.login1');
    }
    public function signup(){
        return view('admin.sign-up');
    }

    public function contacts(){
        return view('admin.contacts');
    }

    public function invoice_create(){
        return view('admin.invoice-create');
    }

    public function invoice_details(){
        return view('admin.invoice-details');
    }

    public function invoice_list(){
        return view('admin.invoice-list');
    }
    public function pricing(){
        return view('admin.pricing');
    }
    public function reviews(){
        return view('admin.reviews');
    }
    public function team(){
        return view('admin.team');
    }
    public function timeline (){
        return view('admin.timeline');
    }
    public function to_do_list (){
        return view('admin.to-do-list');
    }
    public function error1(){
        return view('admin.error1');
    }
    public function alerts(){
        return view('admin.alerts');
    }
   public function badge(){
        return view('admin.badge');
    }
    public function breadcrumb(){
        return view('admin.breadcrumb');
    }    public function buttons(){
        return view('admin.buttons');
    }    public function buttongroup(){
        return view('admin.buttongroup');
    }
    public function cards(){
        return view('admin.cards');
    }
    public function dropdowns(){
        return view('admin.dropdowns');
    }
    public function images_figures(){
        return view('admin.images_figures');
    }
    public function listgroup(){
        return view('admin.listgroup');
    }
    public function navs_tabs(){
        return view('admin.navs_tabs');
    }
    public function object_fit(){
        return view('admin.object_fit');
    }
    public function pagination(){
        return view('admin.pagination');
    }
    public function popovers(){
        return view('admin.popovers');
    }
    public function progress(){
        return view('admin.progress');
    }
    public function spinners(){
        return view('admin.spinners');
    }
    public function toasts(){
        return view('admin.toasts');
    }
    public function tooltips(){
        return view('admin.tooltips');
    }
    public function typography(){
        return view('admin.typography');
    }


    public function form_inputs(){
        return view('admin.form_inputs');
    }
    public function form_check_radios(){
        return view('admin.form_check_radios');
    }
    public function form_input_group(){
        return view('admin.form_input_group');
    }
    public function form_select(){
        return view('admin.form_select');
    }
    public function form_range(){
        return view('admin.form_range');
    }
    public function form_input_masks(){
        return view('admin.form_input_masks');
    }
    public function form_file_uploads(){
        return view('admin.form_file_uploads');
    }
    public function form_dateTime_pickers(){
        return view('admin.form_dateTime_pickers');
    }
    public function form_color_pickers(){
        return view('admin.form_color_pickers');
    }


    public function floating_labels(){
        return view('admin.floating_labels');
    }
    public function form_layout(){
        return view('admin.form_layout');
    }
    public function quill_editor(){
        return view('admin.quill_editor');
    }

    public function form_validation(){
        return view('admin.form_validation');
    }
    public function form_select2(){
        return view('admin.form_select2');
    }


    public function accordions_collpase(){
        return view('admin.accordions_collpase');
    }

    public function modals_closes(){
        return view('admin.modals_closes');
    }
    public function tables(){
        return view('admin.tables');
    }

    public function grid_tables(){
        return view('admin.grid_tables');
    }


    public function data_tables(){
        return view('admin.data_tables');
    }

    public function ratings(){
        return view('admin.ratings');
    }

    public function scrollspy(){
        return view('admin.scrollspy');
    }
    public function swiperjs(){
        return view('admin.swiperjs');
    }
    public function full_calendar(){
        return view('admin.full_calendar');
    }

    public function draggable_cards(){
        return view('admin.draggable_cards');
    }

    public function sweet_alerts(){
        return view('admin.sweet_alerts');
    }


    public function avatars(){
        return view('admin.avatars');
    }

    public function colors(){
        return view('admin.colors');
    }

    public function helpers(){
        return view('admin.helpers');
    }

    public function coming_soon(){
        return view('admin.coming_soon');
    }









     public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }








}



