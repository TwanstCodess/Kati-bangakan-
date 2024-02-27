<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
class importpdf extends Controller
{
    public function index(){
        $filename=public_path('upload/Yoursupport.ai.pdf');
        $parser=new Parser();
        $pdf=$parser->parseFile($filename);
        $text=$pdf->getText();
        echo $text;
    }
    
}
