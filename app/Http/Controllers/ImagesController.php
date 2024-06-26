<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as InterventionImage;
use Validator;

class ImagesController extends Controller
{
    use SoftDeletes;
    // use Flashy;
    private $photos_path;

    public function __construct()
    {
        $this->photos_path = public_path('/storage/images');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photos = Upload::all();
        return view('uploaded-images', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . Str::random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $name . Str::random(2) . '.' . $photo->getClientOriginalExtension();

           $resized_image =  InterventionImage::make($photo)
                ->encode('jpg', 75)
                ->resize(1000, 750)
                ->crop(1000, 750);
               // ->save($this->photos_path . '/' . $resize_name);

            Storage::disk('s3')->put($resize_name,file_get_contents($photo), 'public');
            //$photo->move($this->photos_path, $save_name);

            $upload = new Image();
            $upload->file = $save_name;
            $upload->resizedfilename = $resize_name;
            $upload->originalfilename = basename($photo->getClientOriginalName());
            $upload->property_id = $request->input('propertyadd_id');
            $upload->save();
        }

        return Response()->json([
            'message' => 'Image Enrégistrer avec sucès'
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'file-multiple-input' => 'required',
            'file-multiple-input.*' => 'mimes:jpg,png,jpeg'

        ]);
        if ($validator->passes()) {


            $photos = $request->file('file-multiple-input');
            if (!is_array($photos)) {
                $photos = [$photos];
            }

            if (!is_dir($this->photos_path)) {
                mkdir($this->photos_path, 0777);
            }
            $deleteImages = Image::where('property_id', $request->input('property_id'))
                ->delete();

            for ($i = 0; $i < count($photos); $i++) {
                $photo = $photos[$i];
                $name = sha1(date('YmdHis') . Str::random(30));
                $save_name = $name . '.' . $photo->getClientOriginalExtension();
                $resize_name = $name . Str::random(2) . '.' . $photo->getClientOriginalExtension();

                InterventionImage::make($photo)
                    ->encode('jpg', 75)
                    ->resize(1000, 750)
                    ->crop(1000, 750)
                    ->save($this->photos_path . '/' . $resize_name);

                $photo->move($this->photos_path, $save_name);
                $upload = new Image();
                $upload->file = $save_name;
                $upload->resizedfilename = $resize_name;
                $upload->originalfilename = basename($photo->getClientOriginalName());
                $upload->property_id = $request->input('property_id');
                $upload->save();
            }
        }

        return redirect()->route('property_details', ['id' => $request->input('property_id')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $filename = $request->id;
        $uploaded_image = Image::where('original_name', basename($filename))->first();

        if (empty($uploaded_image)) {
            return Response()->json(['message' => 'Fichier Inexistant'], 400);
        }

        $file_path = $this->photos_path . '/' . $uploaded_image->filename;
        $resized_file = $this->photos_path . '/' . $uploaded_image->resized_name;

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        if (file_exists($resized_file)) {
            unlink($resized_file);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        return Response()->json(['message' => 'Fichier Supprimé'], 200);

    }
}
