<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function storeWeapon(Request $request)
    {
        $newWeapon = new Weapon;
        $newWeapon->name = $request->name;
        $newWeapon->description = $request->description;
        $newWeapon->price = $request->price;
        $newWeapon->save();

        return response()->json([
            'message' => 'Weapon Created',
            'status' => 'success',
            'new_weapon' => $newWeapon
        ]);
    }

    public function getWeapons()
    {
        $weapon = Weapon::get();
        return response()->json([
            'message'   =>  'Weapon List',
            'status'    =>  'success',
            'weapons'   =>  $weapon
        ]);
    }
}
