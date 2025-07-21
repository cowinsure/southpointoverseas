<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Document;
use App\Footer;
use App\HomeContet;
use App\Infrastructure;
use App\InfrastructureImage;
use App\Message;
use App\Profile;
use App\Recruitment;
use App\Service;
use App\Slider;
use App\Trade;
use App\Training;
use App\Client;
use Illuminate\Http\Request;

class MainController extends Controller
{
   

//    ---------------------------------------- trades page functions -------------------------------------------------

    public function trades()
    { 
        // dd('controller works');
        $trades = Trade::all();
        $trainings = Training::all();
        $footers = Footer::limit(2)->get();
        // dd($trades, $trainings, $footers);
        return view('main.trades', compact('trades', 'trainings', 'footers'));
    }

    //    end - trades page functions --------------------------------------------------------------------------------


    //    ---------------------------------------- home page functions -------------------------------------------------

    public function home()
    {
        // dd('controller works');
        $sliders = Slider::all();
        $abouts = About::all();
        $messages = Message::all();
        $trades = Trade::all();
        $footers = Footer::all();
        $contents = HomeContet::all();
        // dd($sliders, $abouts, $messages, $trades, $footers, $contents);
        return view('main.home',compact("sliders",'abouts','messages','trades','footers','contents'));
    }

    //    ------------------------------------------------------------------------------------ end - home page functions

    //    ---------------------------------------- about page functions -------------------------------------------------

    public function about()
    {
        $abouts = About::all();
        $messages = Message::all();
        $profiles = Profile::all();
        $clients = Client::all();
        $footers = Footer::limit(2)->get();
        return view('main.about', compact('abouts', 'messages', 'profiles', 'footers', 'clients'));
    }
    //    ------------------------------------------------------------------------------------- end - about page functions

    //    ---------------------------------------- infrastructure page functions -------------------------------------------------

    public function infrastructure()
    {
        $infrastructures = Infrastructure::all();
        $infrastructure_images = InfrastructureImage::all();
        $footers = Footer::limit(2)->get();
        return view('main.infrastructure',compact('infrastructures','infrastructure_images','footers'));
    }
    //    ------------------------------------------------------------------------------------- end - infrastructure page functions

    //    ---------------------------------------- contact page functions ----------------------------------------------------

    public function contact(){
        $contact_info = Contact::all();
        $footers = Footer::limit(2)->get();
        return view("main.contact",compact('contact_info','footers'));
    }

    //    --------------------------------------------------------------------------------------- end - contact page functions

    // --------------------------------------------- recruitment page --------------------------------------------------------

    public function recruitment(){
        $recruitments = Recruitment::all();
        $documents = Document::all();
        $services = Service::all();
        $footers = Footer::limit(2)->get();
        return view("main.recruitment",compact('documents','recruitments','services','footers'));
    }

    // -----------------------------------------------------------------------------------------------  end - recruitment page

    // ------------------------------------------------- profile -------------------------------------------------------------

    public function profile($id){
        $footers = Footer::limit(2)->get();
        $client = Client::find($id);
        return view('main.profile',compact('footers','client'));
    }

    // --------------------------------------------------------------------------------------------------------- end - profile


}
