<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Signup extends Component
{

  // part 0
  public $state=0;
   public $username;
   public $phone;
   public $email;
  //  public $subdomain;


   //part 2
   public $property_name;
   public $property_size;


  //  part 3
  public $sub_domain;
  public $domain_found;
  public $domain_found_true = 'true';


  // part 4
  public $password;
  public $repeat_password;
  public $terms;

   protected $rules = ['phone'=>'required|min:8|unique:managers,phone',
                'email' => 'required|unique:managers,email'
    ];

    public function render()
    {
        return view('livewire.signup');
    }

    public function submit()
    {


    $this->validate();
    $this->state =1;

    }

    public function step1()
    {
      $this->rules =[
        'property_name'=>'required|min:4',
        'property_size' => 'required|min:0'
    ];


    $this->validate();

    $this->state = 3;
    }

    public function searchDomain()
    {
      $this->rules =[
        'sub_domain'=>'required|min:4',

    ];

    $this->validate();
      if(DB::table('managers')->where('subdomain','=',$this->sub_domain)->first()){
        $this->domain_found_true = 'true';
        $this->domain_found = 1;
      }else{
        $this->domain_found = 2;

      }
    }
    public function Reenter()
    {
      $this->domain_found_true = 'false';

      $this->domain_found = 1;
    }


    public function step2()
    {
      $this->state =4;
    }

    public function save()
    {
      $this->rules =[
        'password' => 'required|min:6',
        'repeat_password' => 'required_with:repeat_password|min:6|same:password',
        'terms' => 'required'
      ];

      $this->validate();

    }
}
