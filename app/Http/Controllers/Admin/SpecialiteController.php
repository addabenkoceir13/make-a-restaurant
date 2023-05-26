<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\specialite;
use Illuminate\Http\Request;
use App\Http\Traits\UploadPhotos;
use Illuminate\Support\Facades\File;

class SpecialiteController extends Controller
{
    use UploadPhotos;

    public function index()
    {
        $specialite = specialite::all();
        return view('admin.specialite.index' ,compact('specialite'));
    }

    public function indexAdd()
    {
        return view('admin.specialite.add');
    }

    public function addSpe(Request $request)
    {
        $Validator = $request->validate([
            'titre'     =>'required|string',
            // 'image'     =>'required',
        ]);

        // $file_name = $this->savePhotos($request->image , 'photos/specialite/');

        $specialite = new specialite();

        $specialite->titre = $request->titre;
        // $specialite->image = $file_name;
        $specialite->save();

        return redirect('admin/specialite')->with('status', 'Ajouter specialite success');
    }

    public function dropSpe($id)
    {
        $specialite = specialite::find($id);

        if ($specialite->photo) {

            $path = 'photos/specialite/'.$specialite->photo;

            if(File::exists($path))
            {
                File::delete($path);
            }
        }

        $specialite->delete();
        return redirect('admin/specialite')->with('status', 'supprimer specialite success');
    }

    public function indexEdit( $id)
    {
        $specialite = specialite::find($id);
        return view('admin.specialite.edit', compact('specialite'));
    }

    public function editSpe(Request $request,  $id)
    {
        $validated = $request->validate([
            'titre'   => 'required|String',
            'image'  => 'required',
        ]);

        $specialite = specialite::find($id);

        if($request -> hasFile('image'))
        {
            $path = 'photos/specialite/'.$specialite->image;

            if(File::exists($path))
            {
                File::delete($path);
            }
            $file_name = $this->savePhotos($request->image , 'photos/specialite/');

        }
            // $image = $request->file('image');
            // $file_name = $image->getClientOriginalName();
            // $path = $image->store('photos/specialite');


            $specialite->titre = $request->titre;
            $specialite->photo = $file_name;
            $specialite->update();

            return redirect('admin/specialite')->with('status', 'modifier specialite success');




    }

}
