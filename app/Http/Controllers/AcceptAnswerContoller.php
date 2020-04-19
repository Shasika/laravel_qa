<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AcceptAnswerContoller extends Controller
{
    public function __invoke(Answer $answer)
    {
        $this->authorize('acept', $answer);
        $answer->question->acceptBestAnswer($answer);
        return back();
    }
}
