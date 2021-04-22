<?php

namespace App\Http\Controllers\Boxoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function index() {
        return view('boxoffice.content.questionnaires.index');
    }

    
}
