<?php


namespace App\Http\View\Composers;


use App\Models\Info;
use Illuminate\View\View;

class FooterComposer
{
    /**
     * @var Info
     */
    protected $info;

    public function __construct(Info $info)
    {
        $this->info = $info;
    }

    public function compose(View $view)
    {
        $siteInfo = $this->info->first()->toArray();
        $view->with('siteInfo', $siteInfo);
    }

}