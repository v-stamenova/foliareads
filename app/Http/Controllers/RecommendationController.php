<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use App\Models\RecommendationRequest;
use App\Models\RecommendedBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(RecommendationRequest $request)
    {
        if(Auth::user()->hasRole('client')) {
            abort(403);
        }

        $user = User::find($request->client_id);
        return view('recommend', compact('user', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request_id, Request $request)
    {
        if(Auth::user()->hasRole('client')) {
            abort(403);
        }

        $validated = $request->validate([
            'recommend' => 'required'
        ]);

        $recommendationRequest = RecommendationRequest::find($request_id);

        $recommendation = Recommendation::create([
            'client_id' => $recommendationRequest->client->id,
            'admin_id' => Auth::user()->id,
            'request_id' => $request_id
        ]);

        foreach ($validated as $value) {
            foreach ($value as $book_id) {
                RecommendedBook::create([
                    'book_id' => $book_id,
                    'recommendation_id' => $recommendation->id
                ]);
            }
        }

        return redirect(route('dashboard'))->with('status','Successfully recommended books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recommendation $recommendation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recommendation $recommendation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recommendation $recommendation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recommendation $recommendation)
    {
        //
    }
}
