<?php

namespace App\Admin\Widgets;

use App\Models\News;
use Arrilot\Widgets\AbstractWidget;

class NewsWidget extends AbstractWidget
{
    protected $config = [];

    public function run ()
    {
        $count = News::count();

        return view('voyager::dimmer', array_merge($this->config,[
            'icon' =>'voyager-news',
            'title' =>'счетчик новостей',
            'text' => 'количество новостей: {$count}',
            'button' => [
                'text' => 'перейти к списку',
                //'link' => route('voyager.news.index'),
            ],
            'img' => 'news-bg.png'
            ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}