<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Celebrate;
class CelebrateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celebrates=Celebrate::latest()->get();
        return view('backend.celebration.index',compact('celebrates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.celebration.create');
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
            'banner'=>'required|mimes:jpeg,jpg,png,gif',
            'img1'=>'required|mimes:jpeg,jpg,png,gif',
            'img2'=>'required|mimes:jpeg,jpg,png,gif',
            'img3'=>'required|mimes:jpeg,jpg,png,gif',
            'img4'=>'required|mimes:jpeg,jpg,png,gif',
            'name'=>'required',
            'date'=>'required',
            'time'=>'required',
            'location'=>'required',
            'description'=>'required'
        ]);

        $banner=rand(0,999999)."_".$request->file('banner')->getClientOriginalName();
        $pathbanner= Storage::putFileAs('public/celeimages',$request->file('banner'),$banner);

        $img1=rand(0,999999)."_".$request->file('img1')->getClientOriginalName();
        $pathimg1= Storage::putFileAs('public/celeimages',$request->file('img1'),$img1);

        $img2=rand(0,999999)."_".$request->file('img2')->getClientOriginalName();
        $pathimg2= Storage::putFileAs('public/celeimages',$request->file('img2'),$img2);

        $img3=rand(0,999999)."_".$request->file('img3')->getClientOriginalName();
        $pathimg3= Storage::putFileAs('public/celeimages',$request->file('img3'),$img3);

        $img4=rand(0,999999)."_".$request->file('img4')->getClientOriginalName();
        $pathimg4= Storage::putFileAs('public/celeimages',$request->file('img4'),$img4);
     
        Celebrate::create([
            'banner'=>$banner,
            'image1'=>$img1,
            'image2'=>$img2,
            'image3'=>$img3,
            'image4'=>$img4,
            'name'=>$request->name,
            'date'=>$request->date,
            'time'=>$request->time,
            'location'=>$request->location,
            'description'=>$request->description,

        ]);

        return back()->with('success','Successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'pro'=>'mimes:jpeg,jpg,png,gif',
            'pay'=>'mimes:jpeg,jpg,png,gif',
            'nrcf'=>'mimes:jpeg,jpg,png,gif',
            'nrcb'=>'mimes:jpeg,jpg,png,gif',

        ]); 
            $celebrates=Celebrate::find($id);
            
            $celebrates->name=$request->name;
            $celebrates->date=$request->date;
            $celebrates->time=$request->name;
            $celebrates->location=$request->location;
            $celebrates->description=$request->description;

            if($request->hasfile('banner'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/celeimages/'.$celebrates->banner));

                $banner=rand(0,999999)."_".$request->file('banner')->getClientOriginalName();
                $pathbanner= Storage::putFileAs('public/celeimages',$request->file('banner'),$banner);

                $celebrates->banner=$banner;
            }

            if($request->hasfile('img1'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/celeimages/'.$celebrates->image1));

                $img1=rand(0,999999)."_".$request->file('img1')->getClientOriginalName();
                $pathimg1= Storage::putFileAs('public/celeimages',$request->file('img1'),$img1);

                $celebrates->image1=$img1;
            }

            
            if($request->hasfile('img2'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/celeimages/'.$celebrates->image2));

                $img2=rand(0,999999)."_".$request->file('img2')->getClientOriginalName();
                $pathimg2= Storage::putFileAs('public/celeimages',$request->file('img2'),$img2);

                $celebrates->image2=$img2;
            }

            
            
            if($request->hasfile('img3'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/celeimages/'.$celebrates->image3));

                $img3=rand(0,999999)."_".$request->file('img3')->getClientOriginalName();
                $pathimg3= Storage::putFileAs('public/celeimages',$request->file('img3'),$img3);

                $celebrates->image3=$img3;
            }

            if($request->hasfile('img4'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/celeimages/'.$celebrates->image4));

                $img4=rand(0,999999)."_".$request->file('img4')->getClientOriginalName();
                $pathimg4= Storage::putFileAs('public/celeimages',$request->file('img4'),$img4);

                $celebrates->image4=$img4;
            }

            $celebrates->update();

            return back()->with('success','successfully updated...');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $celebrates=Celebrate::find($id);
        $celebrates->delete();
        return redirect()->route('celebration.index')->with('success','Deleted successfully....');
    }
}
