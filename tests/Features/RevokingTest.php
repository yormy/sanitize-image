<?php

namespace Yormy\SanitizeImage\Tests\Features;

use Illuminate\Support\Facades\Auth;
use Yormy\SanitizeImage\Models\ReferralAction;
use Yormy\SanitizeImage\Models\ReferralAward;
use Yormy\SanitizeImage\Observers\Events\AwardReferrerEvent;

use Yormy\SanitizeImage\Observers\Events\AwardRevokeEvent;
use Yormy\SanitizeImage\Tests\TestCase;

class RevokingTest extends TestCase
{
    /** @test */
    public function award_silver_recorded()
    {
        Auth::login($this->userBob);
        $this->get('details?via='. $this->referrerFelix->id);
        event(new AwardReferrerEvent(ReferralAction::UPGRADE_SILVER));

        $referralAwardsCount = ReferralAward::where('referrer_id', $this->referrerFelix->id)->count();
        $this->assertEquals($referralAwardsCount, 1);

        event(new AwardRevokeEvent(ReferralAction::UPGRADE_SILVER));
        $referralAwardsCount = ReferralAward::where('referrer_id', $this->referrerFelix->id)->count();
        $this->assertEquals($referralAwardsCount, 0);
    }
}
