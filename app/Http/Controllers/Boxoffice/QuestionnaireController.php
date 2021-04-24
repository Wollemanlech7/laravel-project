<?php

namespace App\Http\Controllers\Boxoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questionnarie;


class QuestionnaireController extends Controller
{
    public function index() {
        $questionnaire = Questionnarie::all(); 

        return view('boxoffice.content.questionnaires.index', ['questionnaires'=>$questionnaire]);
    }

    public function save(Request $request) {
        $questionnaire = $request->input('txt_questionnaire');
        $return = 0;

        $newQuestionnaire = new Questionnarie;
        $newQuestionnaire->name = $questionnaire;
        $newQuestionnaire->topic_id = 1;

        try {
            if ($newQuestionnaire->save()) {
                $return = [
                    'sucess' => 1,
                    'msn' => 'se guardo exitosamente'
                ];
            } else {
                $return = [
                    'sucess' => 0,
                    'msn' => 'error'
                ];
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect()->route('questionnaire.index');
    }
    
}
