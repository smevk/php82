<?php
namespace App;

enum MyClass
{
    const Test = self::Hearts;
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;

    // Fulfills the interface contract.
    public function color(): string
    {
        return match ($this) {
                $this::Hearts, $this::Diamonds => 'Red',
                $this::Clubs, $this::Spades => 'Black',
        };
    }

    // Not part of an interface; that's fine.
    public function shape(): string
    {
        return match ($this) {
                $this::Hearts => $this->heart(),
                $this::Clubs => 'Making clubs type shap',
                $this::Spades => 'Making spaded type shap',
                $this::Diamonds => 'Making diamonds type shap',
        };
    }

    public function heart()
    {
        return 'hearting';
    }
}