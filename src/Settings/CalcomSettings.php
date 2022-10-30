<?php

namespace Astrogoat\Calcom\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;
use Astrogoat\Calcom\Actions\CalcomAction;

class CalcomSettings extends AppSettings
{
    public string $origin;
    public string $brand_color;
    public bool $floating_button_enabled;
    public string $floating_button_cal_link;
    public string $floating_button_text;
    public string $floating_button_background_color;
    public string $floating_button_text_color;

    public function rules(): array
    {
        return [
            'origin' => Rule::requiredIf(fn () => $this->enabled === true),
            'brand_color' => Rule::requiredIf(fn () => $this->enabled === true),
            'floating_button_enabled' => Rule::requiredIf($this->enabled === true),
            'floating_button_cal_link' => Rule::requiredIf(fn () => $this->enabled === true && $this->floating_button_enabled === true),
            'floating_button_text' => Rule::requiredIf(fn () => $this->enabled === true && $this->floating_button_enabled === true),
            'floating_button_background_color' => Rule::requiredIf(fn () => $this->enabled === true && $this->floating_button_enabled === true),
            'floating_button_text_color' => Rule::requiredIf(fn () => $this->enabled === true && $this->floating_button_enabled === true),
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
        return 'Interact with Cal.com.';
    }

    public static function group(): string
    {
        return 'calcom';
    }
}
