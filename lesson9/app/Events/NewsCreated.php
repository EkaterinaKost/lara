<?php

namespace App\Events;

use App\Models\News;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewsCreated
{
    use Dispatchable,  SerializesModels;

    /**
     * Create a new event instance.
     */

     public News $news;
    public function __construct(News $news)
    {
        //
        $this->news = $news;
        Log::info('news created event fired');
    }

    
}
