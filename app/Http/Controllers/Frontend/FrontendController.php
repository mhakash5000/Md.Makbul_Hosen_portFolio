<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Logo;
use App\model\Slider;
use App\model\Contact;
use App\model\Mission;
use App\model\Newsevent;
use App\model\Vision;
use App\model\Service;
use App\model\About;
use App\model\ContactUs;
use App\model\DeveloperInfo;
use App\model\Project;
use App\model\LearningSource;
use App\model\JobExperience;
use App\model\Training;
use App\model\Skill;
use Session;
use Mail;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //all header function is here
    public function index()
    {
        $data['logo']=Logo::first();
        $data['dev']=DeveloperInfo::first();
        $data['sliders']=Slider::all();
        $data['sources']=LearningSource::first();
        $data['contacts']=Contact::first();
        return view('frontend.layouts.home',$data);
    }
    public function AboutUs()
    {
        $data['logo']=Logo::first();
        $data['dev']=DeveloperInfo::first();
        $data['sources']=LearningSource::first();
        $data['sliders']=Slider::all();
        $data['contacts']=Contact::first();
        $data['about_us']=About::first();
        return view('frontend.singlePages.aboutUs',$data);
    }
    public function Project()
    {
        $data['logo']=Logo::first();
        $data['dev']=DeveloperInfo::first();
        $data['sliders']=Slider::all();
        $data['sources']=LearningSource::first();
        $data['contacts']=Contact::first();
        $data['about_us']=About::first();
        $data['projects']=Project::all();
        return view('frontend.singlePages.project',$data);
    }
    public function Experience()
    {
        $data['experiences']=JobExperience::all();
        $data['logo']=Logo::first();
        $data['dev']=DeveloperInfo::first();
        $data['sliders']=Slider::all();
        $data['sources']=LearningSource::first();
        $data['contacts']=Contact::first();
        $data['about_us']=About::first();
        $data['projects']=Project::all();
        return view('frontend.singlePages.job_experience',$data);
    }
    public function Training()
    {
        $data['trainings']=Training::all();
        $data['experiences']=JobExperience::all();
        $data['logo']=Logo::first();
        $data['dev']=DeveloperInfo::first();
        $data['sliders']=Slider::all();
        $data['sources']=LearningSource::first();
        $data['contacts']=Contact::first();
        $data['about_us']=About::first();
        $data['projects']=Project::all();
        return view('frontend.singlePages.training',$data);
    }
    public function Skill()
    {
        $data['skills']=Skill::all();
        $data['experiences']=JobExperience::all();
        $data['logo']=Logo::first();
        $data['dev']=DeveloperInfo::first();
        $data['sliders']=Slider::all();
        $data['sources']=LearningSource::first();
        $data['contacts']=Contact::first();
        $data['about_us']=About::first();
        $data['projects']=Project::all();
        return view('frontend.singlePages.skill',$data);
    }
    public function ContactUs(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['sources']=LearningSource::first();
        $data['dev']=DeveloperInfo::first();
        $data['contacts']=Contact::first();
        return view('frontend.singlePages.contactUs',$data);
    }


    public function Store(Request $request)
    {
        $contactUs=new ContactUs();
        $contactUs->name=$request->name;
        $contactUs->phone=$request->phone;
        $contactUs->email=$request->email;
        $contactUs->massage=$request->massage;
        $contactUs->save();
        $mail=array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'massage'=>$request->massage
        );
        Mail::send('frontend.Email.email-contact',$mail, function($MailMassage)use($mail){
            $MailMassage->from($mail['email'],'CodingDuck');
            $MailMassage->to('mhakash5000@gmail.com');
            $MailMassage->subject('Thank you so much for contact with me');
        });
        Session::flash('success','Massage Sent Successfully');
        return redirect()->back();
    }

    public function UserEmailView()
    {
        $mail['userEmail']=ContactUs::orderBy('id','desc')->get();
        return view('frontend.Email.user-email-view',$mail);
    }


    public function destroy($id)
    {
        $contactUs=ContactUs::find($id);
        $contactUs->delete();
        return redirect()->back();

    }
}
