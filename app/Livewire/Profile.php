<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Profile extends Component
{
    #[Rule('required')]
    public $username = '';
    public $email = '';
    public $bio = '';
    public $country = '';
    public $receive_email = '';

    public function submit(): void
    {
        $this->validate();

    }

    public function render(): View
    {
        return view('livewire.profile');
    }
}
