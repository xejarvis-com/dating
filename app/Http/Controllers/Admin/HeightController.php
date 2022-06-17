<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Height;
use Illuminate\Http\Request;

class HeightController extends Controller
{
    // index Method

    public function height()
    {
        $living = Height::all();
        return view('admin.height.index',compact('living'));
    }


    // Profile For Add

    public function heightAdd()
    {
        return view('admin.height.create');
    }

    //storing Data

    public function heightAddProcess(Request $request)
    {
        $request->validate([
            'feet' => 'required',
            'inches' => 'required'
        ]);

        $height = new Height;
        //   5 * 30.48 cm + 7 * 2.54 cm.
        $inches = $request->input('inches');
        $feet = $request->input('feet');

        $feet_in_centimeters = ($feet * 30.48);
        $inches_in_centimeters = ($inches * 2.54);
        $centimeters = $feet_in_centimeters + $inches_in_centimeters;
        // dd($centimeters);

        $height->centimeters = $centimeters;
        $height->height = $feet.'ft '.$inches.'in'; 
            $height->save();
        return redirect('/admin/height')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function heightedit($id)
    {
        $editReligion = Height::findOrFail($id);

        return view('admin.height.edit',compact('editReligion'));



    }


    // Updating Data

    public function heightUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'height' => 'required'
        ]);

        Height::whereId($id)->update($data);

        return redirect('/admin/height')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function heightdelete($id)
    {
        $data = Height::findorFail($id);
        $data->delete();
        return redirect('/admin/height')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
