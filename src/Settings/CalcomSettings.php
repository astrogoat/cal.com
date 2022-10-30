<?php

namespace Astrogoat\Calcom\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;
use Astrogoat\Calcom\Actions\CalcomAction;

class CalcomSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
            // 'url' => Rule::requiredIf($this->enabled === true),
        ];
    }

    // protected static array $actions = [
    //     CalcomAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with Calcom.';
    }

    public static function group(): string
    {
        return 'calcom';
    }
}
