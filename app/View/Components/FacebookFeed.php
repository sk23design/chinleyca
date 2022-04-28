<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class FacebookFeed extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $feed = [];

    public function __construct()
    {
        $fbSecretKey = getenv('FB_SECRET_KEY');
        $fbAppId = getenv('FB_APP_ID');
        $fbPageName = getenv('FB_PAGENAME');

        $accessToken = getenv('FB_ACCESS_TOKEN');
        $feed = [];
        if ($feed = Cache::get('fb_feed')) {
            return $feed;
        } else {
            try {
                $response = fb_feed()->setAppId($fbAppId)->setSecretKey($fbSecretKey)->setPage($fbPageName)->feedLimit(12)->fetch();

                foreach ($response['data'] as $row) {
                    if (isset($row['message'])) {
                        $row['message'] = Str::limit($row['message'], 120);
                    } else {
                        $row['message'] = '';
                    }
                    $date = new Carbon($row['created_time']);

                    $row['created_time'] = $date->diffForHumans();

                    $feed[] = $row;
                }
                $this->feed = $feed;
                Cache::put('fb_feed', 36000, $feed);
            } catch (\Throwable $th) {
                return [];
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.facebook-feed');
    }
}
