<?php


use App\Protocol;
use App\ProtocolAccess;
use App\User;

class ProtocolFactory
{
    public static function createForPartner(User $partner, $overrides = []) {

        $protocol = factory(Protocol::class)->create($overrides);
        $access = new ProtocolAccess();
        $access->protocol()->associate($protocol);
        $access->user()->associate($partner);
        $access->save();

        return $protocol;
    }

    public static function createWithNoAccess() {

    }


}