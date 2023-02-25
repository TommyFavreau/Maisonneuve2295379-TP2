<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::select()
        ->paginate(15);

        return view('file.index', ['files'=>$files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=> 'sometimes|min:2|max:50',
            'name_fr'=> 'sometimes|min:2|max:50',
            'path' => 'max:255',
            'user_id' => 'exists:users',
            'file' => 'required|mimes:doc,docx,zip,pdf'
        ]);

        if ($request->hasFile('file')) {
            $fileUploaded = $request->file('file');
            $filename = $fileUploaded->getClientOriginalName();
            $destinationPath = public_path('uploads');
            $fileUploaded->move($destinationPath, $filename);
        }

        $users_id = (Auth::user()) ? Auth::user()->id : null;
        $name = ($request->name) ? $request->name : "";
        $name_fr = ($request->name_fr) ? $request->name_fr : "";
        $path = ($request->hasFile('file')) ? $destinationPath."\\".$filename : "";
        $file = new File([
            'name' => $name,
            'name_fr' => $name_fr,
            'path' => $path,
            'users_id' => $users_id
        ]);

        $file->save();

        return redirect()->route('file.index')->withSuccess(trans('lang.files_added'));




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return view('file.show', ['file' => $file]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('file.edit', ['file' => $file]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        $request->validate([
            'name'=> 'sometimes|min:2|max:50',
            'name_fr'=> 'sometimes|min:2|max:50',
            'path' => 'max:255',
            'user_id' => 'exists:users',
            'file' => 'required|mimes:doc,zip,pdf'
        ]);

        if ($request->hasFile('file')) {
            $fileUploaded = $request->file('file');
            $filename = $fileUploaded->getClientOriginalName();
            $destinationPath = public_path('uploads');
            $fileUploaded->move($destinationPath, $filename);
        }

        $users_id = (Auth::user()) ? Auth::user()->id : null;
        $name = ($request->name) ? $request->name : "";
        $name_fr = ($request->name_fr) ? $request->name_fr : "";
        $path = ($request->hasFile('file')) ? $destinationPath."\\".$filename : "";
        $file->update([
            'name' => $name,
            'name_fr' => $name_fr,
            'path' => $path,
            'users_id' => $users_id
        ]);

        $file->save();

        return redirect(route('file.show', $file->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $file->delete();

        return redirect(route('file.index'));
    }
}
