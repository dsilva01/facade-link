<?php

namespace App\Listeners;

use App\Actions\CreateNewLink;
use App\Data\StoreLinkDTOData;
use Illuminate\Auth\Events\Login;

class GuestLinkRegisteredListener
{
    /**
     * Create the event listener.
     */
    public function __construct(
        protected CreateNewLink $createNewLink
    ) {}

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        if (session()->has('destination_url')) {
            $dto = StoreLinkDTOData::from([
                'user_id' => $event->user->id,
                'destination_url' => session()->pull('destination_url'),
            ]);

            $this->createNewLink->handle($dto);
        }
    }
}
