<?php

/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// use Dwij\Laraadmin\Models\Module;
// use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeController

 * @package App\Http\Controllers
 */
use DB;
use Mail;
use Session;
use Redirect;
use Module;
USE App\Models\Contactform1;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return  view('home') . view('footer2');
    }

    public function reCaptcha($recaptcha){
    
        $secret = "6Lf4ID4gAAAAAEJRZw3YWn2lhBJ4nRh71CYANSiM";
        $ip = $_SERVER['REMOTE_ADDR'];
        $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $data = curl_exec($ch);
        curl_close($ch);
      
        return json_decode($data, true);
      }

    public function contact(Request $request)
    {
        $data=true;
        if($data){
        $res = 'success' ;
        //  $this->reCaptcha($recaptcha);
            if($res){
                $validated = $this->validate($request, [
                    'name' => 'required|max:255',
                    'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
                    'subject' => '',
                    '_token' =>   'required',
                    'number' => 'required',
                    'message' => '',
        
                ]);
                
                if ($validated) {
                    return redirect('/contact')
                    ->withErrors($validated)
                    ->withInput();
                }
                $publicIP = file_get_contents("http://ipecho.net/plain");
                $json     = file_get_contents("http://ipinfo.io/$publicIP/geo");
                $json     = json_decode($json, true);
                // $country  = $json['country'];
                // $region   = $json['region'];
                $city     = $json['city'];
                    $data = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'subject' =>'digiprima',
                        'number' => $request->number,
                        'message' => $request->message,
                        'ip_address' => $publicIP,
                        // 'country' => $country,
                        // 'region' => $region,
                        // 'city' => $city 
                    ];
           
            $insert_id= Contactform1::insert($data);
            
            $userEmail = 'info@digiprima.com';
                    
            $contact_id = DB::getPDO()->lastInsertId($insert_id);
            $contact_detail['contactform1s'] = DB::table('contactform1s')->select('contactform1s.*')
            ->where('contactform1s.email', $request->email)->get();
                // print_r($row);die;
            if (env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null ) {
                // Send mail to User his new otp
                Mail::send('emails.send_contact_detail', [
                    'first_name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->number,
                    // 'subject' => $request->subject,
                    'massage' => $request->massage,
                    'last_name' => "",
                     'city' => $city 
                    
                ], function ($m) use ($userEmail) {
                    $m->from('info@digiprima.com', 'digiprima.com');
                    $m->to($userEmail, 'Admin')->subject('Inquiry from Contact us page');
                });
            
            }
           
            return  redirect('/feedback');
            
                
    }else{
        Session()->flash('captcha', 'invallid Captcha.');
        return Redirect::back();
        }
    }
 }

    public function apply_now(Request $request)
    {

        //$data = $this->common();
        $validated = $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'apply_for' => '',
            'city'=>'',
        ]);
        
        if ($validated) {
            return redirect('/contact')
                        ->withErrors($validated)
                        ->withInput();
        }
        
        $data2 = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'apply_for' => $request->apply_for,
            'city' => $request->city,
        );
        $formdata = DB::table('applynows')->insert($data2);
    
        $userEmail = 'info@digiprima.com';
        $customerEmail =$request->email;
        if (env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null ) {
            // Send mail to User his new otp
            if($request->first_name != null && $request->email !=null){
            Mail::send('emails.send_contact_detail', [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'apply_for' => $request->apply_for,
                'qualification' => null,
                'city' => $request->city
            ], function ($m) use ($userEmail) {
                $m->from('info@digiprima.com', 'digiprima.com');
                $m->to($userEmail, 'apply job')->subject('Mail from Career page ');
            });
        }
    }
       
// user send mail in apply now page
if (env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null ) {
    // Send mail to User his new otp
    Mail::send('emails.send_meeting_request_users_apply', [
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'apply_for' => $request->apply_for,
        'qualification' => null,
        'city' => $request->city
    ], function ($m) use ($customerEmail) {
        $m->from('info@digiprima.com', 'digiprima.com');
        $m->to($customerEmail, 'apply job')->subject('Mail from Career page ');
    });
}
Session()
    ->flash('message', 'Thanks We will revert back soon.');

return redirect('/home');
}



//     public function meetings(Request $request)
//     {
//         //print_r($request->all());die;

//         //$data = $this->common();

//         $data3 = array(
//             'name' => $request->name,
//             'email' => $request->email,
//             'message'=>'Welcome to digiprima technology'
//         );
//         $meeting = DB::table('meetinghomes')->insert($data3);
//         $userEmail = 'info@digiprima.com';
//         $customerEmail =$request->email;
//         if (env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null ) {
//             // Send mail to User his new otp
//             Mail::send('emails.send_meeting_request', [
//                 'name' => $request->name,
//                 'email' => $request->email,
//                 'newMessage'=> 'Welcome to digiprima technology'
//             ], function ($m) use ($userEmail) {
//                 $m->from('info@digiprima.com', 'digiprima.com');
//                 $m->to($userEmail, 'request meeting')->subject('Meeting Requested ');
//             });
            
//         }


// // user send mail

// if (env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null ) {
//     // Send mail to User his new otp
//     Mail::send('emails.send_meeting_request_users', [
//         'name' => $request->name,
//         'email' => $request->email,
//         'newMessage'=> 'Welcome to digiprima technology'
//     ], function ($m) use ($customerEmail) {
//         $m->from('info@digiprima.com', 'digiprima.com');
//         $m->to($customerEmail, 'request meeting')->subject('Meeting Request ');
//     });
    
// }

//         Session()
//             ->flash('message', 'Meeting requested successfully!!');

//         return redirect('/home');
//     }

    // public function requestMeetings(Request $request)
    // {
      
    //     $recaptcha = $_POST['g-recaptcha-response'];
        
    //     $res =   $this->reCaptcha($recaptcha);
            
    //         if($res['success']){
    //     //$data = $this->common();
    //     $data4 = array(
    //         'name' => $request->name,
    //         'email' => $request->email
    //         // 'message' => $request->message,
    //     );
    //     $messages ="welcome to digiprima";
    //     $requestMmeeting = DB::table('meetings')->insert($data4);
    //     $customerEmail = $request->email;
    //     $userEmail = 'info@digiprima.com';
    //     if (env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null ) {
    //         // Send mail to User his new otp
    //         Mail::send('emails.send_meeting_request', [
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             // 'newMessage' => $request->message
    //             'newMessage' =>$messages
    //         ], function ($m) use ($userEmail,$customerEmail) {
    //             $m->from('info@digiprima.com', 'digiprima.com');
    //             $m->to([$userEmail], 'request meeting')->subject('Meeting Requested ');
    //         });
    //     }

    //     return  redirect('/feedback');
    // }else{
    //     Session()->flash('captcha', 'invallid Captcha.');
    //     return Redirect::back();
    //     }
        
    // }
   
}
