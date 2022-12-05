<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Livewire\Component;

class CardMaker extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationLabel = 'Custom Navigation Label';

    protected static ?int $navigationSort = 3;

    public function render()
    {
        return view('livewire.card-maker');
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\MarkdownEditor::make('content'),
            // ...
        ];
    }
}
