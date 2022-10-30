<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateCalcomSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('calcom.enabled', false);
        // $this->migrator->add('calcom.url', '');
        // $this->migrator->addEncrypted('calcom.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('calcom.enabled');
        // $this->migrator->delete('calcom.url');
        // $this->migrator->delete('calcom.access_token');
    }
}
