<?php

namespace Thanhnghi1421\Newpackage\Controllers;

// use Illuminate\Http\Request;
use Thanhnghi1421\Newpackage\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();
        return view("inspire::index", compact("quote"));
    }
}