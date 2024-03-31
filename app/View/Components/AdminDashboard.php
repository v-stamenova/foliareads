<?php

namespace App\View\Components;

use App\Models\RecommendationRequest;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class AdminDashboard extends Component
{

    public $clientCount;
    public $clientsWithQuiz;

    public $waitingRecs;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->clientCount = User::role('client')->count();

        $this->clientsWithQuiz = User::role('client')->whereHas('quiz')->count();

        $this->waitingRecs = RecommendationRequest::doesntHave('recommendation')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-dashboard');
    }
}
