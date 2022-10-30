<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateCalcomSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('calcom.enabled', false);
        $this->migrator->add('calcom.origin', 'https://app.cal.com');
        $this->migrator->add('calcom.brand_color', '');
        $this->migrator->add('calcom.floating_button_enabled', false);
        $this->migrator->add('calcom.floating_button_cal_link', 'handle/type');
        $this->migrator->add('calcom.floating_button_text', '');
        $this->migrator->add('calcom.floating_button_background_color', '');
        $this->migrator->add('calcom.floating_button_text_color', '');
    }

    public function down()
    {
        $this->migrator->delete('calcom.enabled');
        $this->migrator->delete('calcom.origin');
        $this->migrator->delete('calcom.brand_color');
        $this->migrator->delete('calcom.floating_button_enabled');
        $this->migrator->delete('calcom.floating_button_cal_link');
        $this->migrator->delete('calcom.floating_button_text');
        $this->migrator->delete('calcom.floating_button_background_color');
        $this->migrator->delete('calcom.floating_button_text_color');
    }
}
