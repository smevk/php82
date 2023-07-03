<?php
// enums can extend classes but no enums,interfafce,traits
enum MyClass
{
    const Test = self::Hearts; //you can defince constant
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

// every method in enum is accessable for all cases
echo MyClass::Hearts->color();
echo MyClass::Clubs->shape();
echo MyClass::Clubs->color();

// listing all cases
var_dump(MyClass::cases());

$serilizedClas = serialize(MyClass::class);
var_dump(unserialize($serilizedClas));