<?php

namespace App\Http\Controllers;

use Livewire\Component;
use Illuminate\Support\Facades\Date; // Add this line
use Illuminate\Support\Facades\DB; // Add this line

class Home extends Component
{
    public $katakan;
    public $sall;

    public function __construct()
    {
        $this->katakan = Date::now()->format('m-d'); // Change Date("Y-m-d") to Date::now()->format('Y-m-d')
        // $this->sall = Date::now()->format('Y'); // Change Date("Y-m-d") to Date::now()->format('Y-m-d')
    }
    

    public $Koyas;
    public $Akres;
    public $Amedis;
    public $Arbats;
    public $Bazyans;
    public $Chamchamals;
    public $Chwartas;
    public $Darbandixans;
    public $Duhoks;
    public $Dukans;
    public $HajiAwas;
    public $Halabjas;
    public $HalabjaNs;
    public $Hawlers;
    public $Kalars;
    public $Kfris;
    public $Kirkuks;
    public $Penjuins;
    public $Piramagruns;
    public $Qaladzes;
    public $Ranyas;
    public $SaidSadiqs;
    public $Slemanys;
    public $Sorans;
    public $Takyas;
    public $TaqTaqs;
    public $Taslujas;
    
    // 
    public $Xalakans;
    public $Xanaqins;
    public $mosuls;
    public $tuzxurmatus;
    public $zaxos;

    public function mount()
    {
        $this->Koyas = DB::table('Koya')
            ->select('Koya.*')
            ->get();
       
            $this->mosuls = DB::table('mosul')
            ->select('mosul.*')
            ->get();

            $this->zaxos = DB::table('zaxo')
            ->select('zaxo.*')
            ->get();
       
            $this->tuzxurmatus = DB::table('tuzxurmatu')
            ->select('tuzxurmatu.*')
            ->get();

            
        $this->Xanaqins = DB::table('Xanaqin')
            ->select('Xanaqin.*')
            ->get();


        $this->Xalakans = DB::table('Xalakan')
            ->select('Xalakan.*')
            ->get();

        $this->Taslujas = DB::table('Tasluja')
            ->select('Tasluja.*')
            ->get();
        
            $this->TaqTaqs = DB::table('TaqTaq')
            ->select('TaqTaq.*')
            ->get();
        
            $this->Takyas = DB::table('Takya')
            ->select('Takya.*')
            ->get();
        
            $this->Slemanys = DB::table('Slemany')
            ->select('Slemany.*')
            ->get();
        
            $this->Sorans = DB::table('Soran')
            ->select('Soran.*')
            ->get();
        $this->Ranyas = DB::table('Ranya')
            ->select('Ranya.*')
            ->get();
        $this->SaidSadiqs = DB::table('SaidSadiq')
            ->select('SaidSadiq.*')
            ->get();
        $this->Piramagruns = DB::table('Piramagrun')
            ->select('Piramagrun.*')
            ->get();
        $this->Qaladzes = DB::table('Qaladze')
            ->select('Qaladze.*')
            ->get();
        $this->Kirkuks = DB::table('Kirkuk')
            ->select('Kirkuk.*')
            ->get();
        $this->Penjuins = DB::table('Penjuin')
            ->select('Penjuin.*')
            ->get();
        $this->Kfris = DB::table('Kfri')
            ->select('Kfri.*')
            ->get();
        $this->Akres = DB::table('Akre')
            ->select('Akre.*')
            ->get();
        $this->Amedis = DB::table('Amedi')
            ->select('Amedi.*')
            ->get();
        $this->Arbats = DB::table('Arbat')
            ->select('Arbat.*')
            ->get();
        $this->Bazyans = DB::table('Bazyan')
            ->select('Bazyan.*')
            ->get();
        $this->Chamchamals = DB::table('Chamchamal')
            ->select('Chamchamal.*')
            ->get();
        $this->Chwartas = DB::table('Chwarta')
            ->select('Chwarta.*')
            ->get();
        $this->Darbandixans = DB::table('Darbandixan')
            ->select('Darbandixan.*')
            ->get();
        $this->Duhoks = DB::table('Duhok')
            ->select('Duhok.*')
            ->get();
        $this->Dukans = DB::table('Dukan')
            ->select('Dukan.*')
            ->get();
        $this->HajiAwas = DB::table('HajiAwa')
            ->select('HajiAwa.*')
            ->get();
        $this->Halabjas = DB::table('Halabja')
            ->select('Halabja.*')
            ->get();
        $this->HalabjaNs = DB::table('HalabjaN')
            ->select('HalabjaN.*')
            ->get();
        $this->Hawlers = DB::table('Hawler')
            ->select('Hawler.*')
            ->get();
        $this->Kalars = DB::table('Kalar')
            ->select('Kalar.*')
            ->get();
    }


    public function render()
    {
        return view('home');
    }
}
