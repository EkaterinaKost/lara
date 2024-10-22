<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Facades\Log;

class NewObserver
{
    /**
     * Handle the News "created" event.
     */
    public function updating(News $news): void
    {
        //
        Log::info('updating news' . $news);
    }

}
