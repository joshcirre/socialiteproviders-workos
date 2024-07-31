<?php

namespace SocialiteProviders\WorkOS;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WorkOSExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('workos', Provider::class);
    }
}
