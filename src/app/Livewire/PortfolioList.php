<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;

class PortfolioList extends Component
{
    public function render()
    {
        return view('livewire.portfolio-list', [
            'portfolios' => Portfolio::where('is_active', true)
                ->orderBy('sort', 'asc')
                ->get()
        ]);
    }
}