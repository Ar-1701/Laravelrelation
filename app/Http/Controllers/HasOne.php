<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;

class HasOne extends Controller
{
    public function hasOne()
    {
        return $owner = Mechanic::find(1)->car;
        // return $owner = Mechanic::find(3)->owner;
        return $owner = Car::find(1)->owner;
        return view('hasOne');
    }
    public function add_mechanic()
    {
        $m = new Mechanic();
        $m->name = "Tom";
        $m->save();
    }
    public function add_car()
    {
        $m = Mechanic::find(2);
        $c = new Car();
        $c->model = "Ford";
        $m->car()->save($c);
    }
    public function add_Owner()
    {
        $c = Car::find(2);
        $u = new Owner();
        $u->name = "Maya";
        $c->owner()->save($u);
    }
}
