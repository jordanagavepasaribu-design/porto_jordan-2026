<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\Skills;
use App\Models\Project;
use App\Models\Portfolio;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page', [
            'profile' => Profile::first(),

            'skills' => Skills::where('is_active', true)
                ->orderBy('sort')
                ->get(),

            'projects' => Project::where('is_active', true)
                ->orderBy('sort')
                ->get(),

            'portfolios' => Portfolio::where('is_active', true)
                ->orderBy('sort')
                ->get(),
        ])->layout('layouts.app');
    }
}