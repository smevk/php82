<?php
enum UserStatus: string
{
    case Pending = '0';
    case Active = '1';
    case Suspended = '2';
    case CanceledByUser = '3'; //these act like value in option

    public function label(): string
    {
        return match ($this) {
            static::Pending => 'Pending', //these act like lable in option select
            static::Active => 'Active',
            static::Suspended => 'Suspended',
            static::CanceledByUser => 'Canceled by user',
        };
    }
}

// cases() is built in function with enums;
foreach (UserStatus::cases() as $case) {
    printf('<option value="%s">%s</option>\n', $case->value, $case->label());
}
?>