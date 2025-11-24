<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class TestController extends Controller
{

    protected function getItems(int $count = 1000)
    {
        return collect(range(1, $count))->map(function ($number) {
            return "Item {$number}";
        });
    }
    public function withBladeIncluding() : View
    {
        return view('with-blade-includes', [
            'items' => $this->getItems()
        ]);
    }

    public function withoutBladeIncluding() : View
    {
        return view('without-blade-includes', [
            'items' => $this->getItems()
        ]);
    }

}
