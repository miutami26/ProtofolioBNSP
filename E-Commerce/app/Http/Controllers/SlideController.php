<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $data['list_slide'] = Slide::all();
        return view('slide.index',$data);
    }

    public function create()
    {
        return view('slide.create');
    }

    public function store(Request $request)
    {
        $request->validate(
        ['banner' =>'required',
        'title' => 'required',
        'isi' => 'required',
        ],
        ['banner.required' => 'Wajib di Isi !!!',
        'title.required' => 'Wajib di Isi !!!',
        'isi.required' => 'Wajib di Isi !!!',
        ]);
        $ban = 'menunggu';
        $slide= new Slide;
        $slide->banner=request('banner');
        if ($request->hasFile('banner')) {
        $image = $request->file('banner');
        $image_path = Storage::disk('public')->put('image', $image);
        $slide->banner = $image_path;
        }
        $slide-> title = request('title');
        $slide-> isi = request('isi');
        $slide-> status = request('status');
        $slide->status= $ban;
        $slide->save();
        return redirect('slide')->with('success','Data berhasil ditambahkan');
    }

    public function show(Slide $slide)
    {
        $data['slide'] = $slide;
        return view('slide.show', $data);
    }

    public function edit(Slide $slide)
    {
        $data['slide'] = $slide;
        return view('slide.edit', $data);
    }

    public function update(Slide $slide, Request $request)
    {
        $slide->banner=request('banner');
        if ($request->hasFile('banner')) {
        $image = $request->file('banner');
        $image_path = Storage::disk('public')->put('image', $image);
        $slide->banner = $image_path;
        }
        $slide-> title = request('title');
        $slide-> isi = request('isi');
        $slide-> status = request('status');
        $slide->save();

        return redirect('slide')->with('warning','Data berhasil diupdate');
    }

    public function destroy(Slide $slide){
        Storage::disk('public')->delete($slide->banner);
        $slide->delete();
        return redirect('slide')->with('danger','Data berhasil dihapus');
    }

    public function aktif(Request $request)
    {
        Slide::where('id', $request->delete)->delete();

        Slide::create([
        'id'=> $request->id,
        'banner' => $request->banner,
        'title' => $request->title,
        'status' => $request->status,
        'isi' => $request->isi,
        ]);
        return redirect('slide')->with('success', 'Slide Aktif');
    }

    public function nonaktif(Request $request)
    {
        Slide::where('id',$request->delete)->delete();

        Slide::create([
        'id'=> $request->id,
        'banner' => $request->banner,
        'title' => $request->title,
        'status' => $request->status,
        'isi' => $request->isi,
        ]);
        return redirect('slide')->with('success', 'Slide Non Aktif');
    }
}
