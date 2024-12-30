<?php

namespace App\Jobs;

use App\Actions\RecordVisit;
use App\Data\StoreLinkVisitDTOData;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class RecordVisitJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected StoreLinkVisitDTOData $dto,
    ) {}

    /**
     * Execute the job.
     */
    public function handle(RecordVisit $recordVisit): void
    {
        $recordVisit->handle($this->dto);
    }
}
