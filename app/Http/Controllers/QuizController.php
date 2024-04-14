<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->hasRole('client') && is_null(Auth::user()->quiz)) {
            return view('quiz');
        }

        abort(403);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::user()->hasRole('admin')) {
            abort(403);
        }

        $validated = $request->validate([
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
        ]);
        $quiz_id = Quiz::create(['client_id' => Auth::user()->id])->id;

        foreach ($validated as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $ans)
                    $this->createNewAnswer($key, $quiz_id, $ans);
            } else {
                $this->createNewAnswer($key, $quiz_id, $value);
            }
        }

        return redirect(route('dashboard'))->with('status', 'You successfully filled in the questionnaire');
    }

    private function createNewAnswer($question_id, $quiz_id, $answer)
    {
        Answer::create([
            'question_id' => $question_id[1],
            'quiz_id' => $quiz_id,
            'answer' => $answer
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
