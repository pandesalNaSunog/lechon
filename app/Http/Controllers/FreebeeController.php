<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freebee;
class FreebeeController extends Controller
{
    public function create(){
        return view('admin.add-freebee',[
            'active' => 'add-freebee'
        ]);
    }

    public function store(Request $request){
        $fields = $request->validate([
            'name' => 'required',
            'quantity' => 'required'
        ]);

        Freebee::create($fields);

        return redirect('/admin/inventory')->with('message', 'Freebee created successfully');
    }
    public function destroy(Freebee $freebie){
        $freebie->delete();

        return back()->with('message', 'Freebie deleted successfully');
    }
}
