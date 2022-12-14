<?php

namespace Astrogoat\Calcom\Actions;

use Helix\Lego\Apps\Actions\Action;

class CalcomAction extends Action
{
    public static function actionName(): string
    {
        return 'Calcom action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
