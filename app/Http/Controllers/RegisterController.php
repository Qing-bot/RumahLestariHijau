<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Destination;
use App\Models\Homestay;
use App\Models\NearbyPlace;
use App\Models\Photo;
use App\Models\Promo;
use App\Models\Souvenir;

use DateTime;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;



class RegisterController extends Controller {

    //helper function for taking first x characters without space for file name purpose
    public function getName ($string, $length) {
        return substr(str_replace(' ', '', $string), 0, $length);
    }

    public function addHomestay(Request $request){
        // $thumb
        $file = $request->file('thumbnail');
        $file1 = $request->file('upload');
        $file2 = $request->file('upload2');
        $file3 = $request->file('upload3');
        $file4 = $request->file('upload4');
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'location' => 'required',
            'address' => 'required',
            'host' => 'required',
            'rating' => 'required',
            'guest' => 'required',
            'like'=>'required',
            'bedroom' => 'required',
            'bed' => 'required',
            'bath' => 'required',
            'thumbnail' => 'required',
        ]);

        if($request->place1!=null || $request->distance1!=null){
            $request->validate([
                'place1' => 'required',
                'distance1' => 'required',
            ]);
        }
        if($request->place2!=null || $request->distance2!=null){
            $request->validate([
                'place2' => 'required',
                'distance2' => 'required',
            ]);
        }
        if($request->place3!=null || $request->distance3!=null){
            $request->validate([
                'place3' => 'required',
                'distance3' => 'required',
            ]);
        }
        if($request->place4!=null || $request->distance4!=null){
            $request->validate([
                'place4' => 'required',
                'distance4' => 'required',
            ]);
        }

        if($file!=null){
            $request->validate([
                'thumbnail' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $thumb_path = 'thumb_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file, $thumb_path);
            $thumb_path = 'homestay_img/'.$temp.'/'.$thumb_path;
        }


        $hs = new Homestay();
        $hs->name = $request->name;
        $hs->thumbnail = $thumb_path;
        $hs->location = $request->location;
        $hs->host = $request->host;
        $hs->maps = $request->address;
        $hs->rating = $request->rating;
        $hs->price = $request->price;
        $hs->guest = $request->guest;
        $hs->like = $request->like;
        $hs->bedroom = $request->bedroom;
        $hs->bed = $request->bed;
        $hs->bath = $request->bath;

        if($request->wifi == 1){
            $hs->wifi = 1;
        }else{
            $hs->wifi = 0;
        }
        if($request->parking == 1){
            $hs->parking = 1;
        }else{
            $hs->parking = 0;
        }
        if($request->restaurant == 1){
            $hs->restaurant = 1;
        }else{
            $hs->restaurant = 0;
        }
        if($request->ac == 1){
            $hs->ac = 1;
        }else{
            $hs->ac = 0;
        }
        // dd($hs);
        $hs->save();


        if($file1!=null){
            $request->validate([
                'upload' => 'image'
            ]);

            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $img1_path = 'img1_'.$dt.'.'.$file1->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file1, $img1_path);
            $img1_path = 'homestay_img/'.$temp.'/'.$img1_path;

            $pho1 = new Photo();
            $pho1->table_id = $hs->id;
            $pho1->category_id = 2;
            $pho1->path = $img1_path;
            $pho1->save();
        }
        if($file2!=null){
            $request->validate([
                'upload2' => 'image'
            ]);

            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $img2_path = 'img2_'.$dt.'.'.$file2->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file2, $img2_path);
            $img2_path = 'homestay_img/'.$temp.'/'.$img2_path;

            $pho2 = new Photo();
            $pho2->table_id = $hs->id;
            $pho2->category_id = 2;
            $pho2->path = $img2_path;
            $pho2->save();
        }
        if($file3!=null){
            $request->validate([
                'upload3' => 'image'
            ]);

            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $img3_path = 'img3_'.$dt.'.'.$file1->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file3, $img3_path);
            $img3_path = 'homestay_img/'.$temp.'/'.$img3_path;

            $pho3 = new Photo();
            $pho3->table_id = $hs->id;
            $pho3->category_id = 2;
            $pho3->path = $img3_path;
            $pho3->save();
        }
        if($file4!=null){
            $request->validate([
                'upload4' => 'image'
            ]);

            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $img4_path = 'img4_'.$dt.'.'.$file4->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file4, $img4_path);
            $img4_path = 'homestay_img/'.$temp.'/'.$img4_path;

            $pho4 = new Photo();
            $pho4->table_id = $hs->id;
            $pho4->category_id = 2;
            $pho4->path = $img4_path;
            $pho4->save();
        }

        if($request->place1!=null){
            $np1 = new NearbyPlace();
            $np1->homestay_id = $hs->id;
            $np1->name = $request->place1;
            $np1->distance = $request->distance1;
            $np1->save();
        }
        if($request->place2!=null){
            $np2 = new NearbyPlace();
            $np2->homestay_id = $hs->id;
            $np2->name = $request->place2;
            $np2->distance = $request->distance2;
            $np2->save();
        }
        if($request->place3!=null){
            $np3 = new NearbyPlace();
            $np3->homestay_id = $hs->id;
            $np3->name = $request->place3;
            $np3->distance = $request->distance3;
            $np3->save();
        }
        if($request->place4!=null){
            $np4 = new NearbyPlace();
            $np4->homestay_id = $hs->id;
            $np4->name = $request->place4;
            $np4->distance = $request->distance4;
            $np4->save();
        }

        return redirect('/tableHomestay');
    }
    public function editHomestay(Request $request, $id){
        $hs = Homestay::find($id);
        // dd($request);
        $file = $request->file('thumbnail');
        $file1 = $request->file('upload');
        $file2 = $request->file('upload2');
        $file3 = $request->file('upload3');
        $file4 = $request->file('upload4');
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'location' => 'required',
            'address' => 'required',
            'host' => 'required',
            'rating' => 'required',
            'like'=>'required',
            'guest' => 'required',
            'bedroom' => 'required',
            'bed' => 'required',
            'bath' => 'required',
        ]);

        if($request->place1!=null || $request->distance1!=null){
            $request->validate([
                'place1' => 'required',
                'distance1' => 'required',
            ]);
        }
        if($request->place2!=null || $request->distance2!=null){
            $request->validate([
                'place2' => 'required',
                'distance2' => 'required',
            ]);
        }
        if($request->place3!=null || $request->distance3!=null){
            $request->validate([
                'place3' => 'required',
                'distance3' => 'required',
            ]);
        }
        if($request->place4!=null || $request->distance4!=null){
            $request->validate([
                'place4' => 'required',
                'distance4' => 'required',
            ]);
        }
        if($file!=null){
            $request->validate([
                'thumbnail' => 'image'
            ]);

            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $thumb_path = 'thumb_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::delete($hs->thumbnail);
            Storage::putFileAs('homestay_img/'.$temp.'/', $file, $thumb_path);
            $thumb_path = 'homestay_img/'.$temp.'/'.$thumb_path;
            $hs->thumbnail = $thumb_path;
        }

        $hs->name = $request->name;
        $hs->location = $request->location;
        $hs->host = $request->host;
        $hs->maps = $request->address;
        $hs->rating = $request->rating;
        $hs->price = $request->price;
        $hs->like = $request->like;
        $hs->guest = $request->guest;
        $hs->bedroom = $request->bedroom;
        $hs->bed = $request->bed;
        $hs->bath = $request->bath;

        if($request->wifi == 1){
            $hs->wifi = 1;
        }else{
            $hs->wifi = 0;
        }
        if($request->parking == 1){
            $hs->parking = 1;
        }else{
            $hs->parking = 0;
        }
        if($request->restaurant == 1){
            $hs->restaurant = 1;
        }else{
            $hs->restaurant = 0;
        }
        if($request->ac == 1){
            $hs->ac = 1;
        }else{
            $hs->ac = 0;
        }
        $hs->save();

        $count = count($hs->photo);

        if($file1!=null){
            $request->validate([
                'upload2' => 'image'
            ]);

            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $img1_path = 'img1_'.$dt.'.'.$file1->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file1, $img1_path);
            $img1_path = 'homestay_img/'.$temp.'/'.$img1_path;

            if($count>=2){
                Storage::delete($hs->photo[0]->path);
                $hs->photo[0]->table_id = $hs->id;
                $hs->photo[0]->category_id = 2;
                $hs->photo[0]->path = $img1_path;
                $hs->photo[0]->save();
            }
            else{
                $pho1 = new Photo();
                $pho1->table_id = $hs->id;
                $pho1->category_id = 2;
                $pho1->path = $img1_path;
                $pho1->save();
            }


        }
        if($file2!=null){
            $request->validate([
                'upload2' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $img2_path = 'img2_'.$dt.'.'.$file2->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file2, $img2_path);
            $img2_path = 'homestay_img/'.$temp.'/'.$img2_path;
            if($count>=2){
                Storage::delete($hs->photo[1]->path);
                $hs->photo[1]->table_id = $hs->id;
                $hs->photo[1]->category_id = 2;
                $hs->photo[1]->path = $img2_path;
                $hs->photo[1]->save();
            }
            else{
                $pho2 = new Photo();
                $pho2->table_id = $hs->id;
                $pho2->category_id = 2;
                $pho2->path = $img2_path;
                $pho2->save();
            }

        }
        if($file3!=null){
            $request->validate([
                'upload3' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $img3_path = 'img3_'.$dt.'.'.$file3->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file3, $img3_path);
            $img3_path = 'homestay_img/'.$temp.'/'.$img3_path;
            if($count>=3){
                Storage::delete($hs->photo[2]->path);
                $hs->photo[2]->table_id = $hs->id;
                $hs->photo[2]->category_id = 2;
                $hs->photo[2]->path = $img3_path;
                $hs->photo[2]->save();
            }
            else{
                $pho3 = new Photo();
                $pho3->table_id = $hs->id;
                $pho3->category_id = 2;
                $pho3->path = $img3_path;
                $pho3->save();
            }

        }
        if($file4!=null){
            $request->validate([
                'upload4' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($request->name, 10);
            $img4_path = 'img4_'.$dt.'.'.$file4->getClientOriginalExtension();
            Storage::putFileAs('homestay_img/'.$temp.'/', $file4, $img4_path);
            $img4_path = 'homestay_img/'.$temp.'/'.$img4_path;
            if($count>=4){
                Storage::delete($hs->photo[3]->path);
                $hs->photo[3]->table_id = $hs->id;
                $hs->photo[3]->category_id = 2;
                $hs->photo[3]->path = $img4_path;
                $hs->photo[3]->save();
            }
            else{
                $pho4 = new Photo();
                $pho4->table_id = $hs->id;
                $pho4->category_id = 2;
                $pho4->path = $img4_path;
                $pho4->save();
            }

        }

        $countnp = count($hs->nearby_place);

        if($countnp>=1) {
            $hs->nearby_place[0]->name = $request->place1;
            $hs->nearby_place[0]->distance = $request->distance1;
            $hs->nearby_place[0]->save();

        }else if($request->distance1!=null && $request->place1!=null) {
            $np1 = new NearbyPlace();
            $np1->homestay_id = $hs->id;
            $np1->name = $request->place1;
            $np1->distance = $request->distance1;
            $np1->save();
        }

        if($countnp>=2){
            $hs->nearby_place[1]->name = $request->place2;
            $hs->nearby_place[1]->distance = $request->distance2;
            $hs->nearby_place[1]->save();
        }else if($request->distance2!=null && $request->place2!=null) {
            $np2 = new NearbyPlace();
            $np2->homestay_id = $hs->id;
            $np2->name = $request->place2;
            $np2->distance = $request->distance2;
            $np2->save();
        }

        if($countnp>=3){
            $hs->nearby_place[2]->name = $request->place3;
            $hs->nearby_place[2]->distance = $request->distance3;
            $hs->nearby_place[2]->save();
        }else if($request->distance3!=null && $request->place3!=null) {
            $np3 = new NearbyPlace();
            $np3->homestay_id = $hs->id;
            $np3->name = $request->place3;
            $np3->distance = $request->distance3;
            $np3->save();
        }

        if($countnp>=4){
            $hs->nearby_place[3]->name = $request->place4;
            $hs->nearby_place[3]->distance = $request->distance4;
            $hs->nearby_place[3]->save();
        }else if($request->distance4!=null && $request->place4!=null) {
            $np4 = new NearbyPlace();
            $np4->homestay_id = $hs->id;
            $np4->name = $request->place4;
            $np4->distance = $request->distance4;
            $np4->save();
        }

        return redirect()->route('tableHomestay');
    }
    public function deleteHomestay(Request $request, $id){
        $homestay = Homestay::find($id);
        $homestay->nearby_place->each->delete();
        
        // Storage::delete($homestay->thumbnail);
        // foreach ($homestay->photo as $key) {
        //     Storage::delete($key->path);
        // }
        Storage::deleteDirectory('homestay_img/'.$homestay->name);
        
        $homestay->photo->each->delete();
        $homestay->comment_list->each->delete();
        $homestay->delete();
        return redirect()->back()->with('success', 'Homestay deleted successfully');
    }

    public function addCulinary(Request $request){
        // dd($request);
        $file = $request->file('image');

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'like' => 'required',
            'image' => 'required|image',
        ]);

        $data = new Culinary();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->like = $request->like;
        $data->price = $request->price;
        $data->save();

        if($file!=null){
            $request->validate([
                'image' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($data->name, 10);
            $cul_path = $temp.'_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('culinary_img/', $file, $cul_path);
            //dd($cul_path);

            $cul_path = 'culinary_img/'.$cul_path;
        }
        $pho = new Photo();
        $pho->category_id = 1;
        $pho->path = $cul_path;
        $pho->table_id = $data->id;
        $pho->save();

        return redirect('/tableCulinary');
    }
    public function editCulinary(Request $request, $id){
        $file = $request->file('image');
        $data = Culinary::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'like' => 'required',
            'image' => 'image',
        ]);

        $data->name = $request->name;
        $data->description = $request->description;
        $data->like = $request->like;
        $data->price = $request->price;
        $data->save();

        if($file!==null){
            $request->validate([
                'image' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($data->name, 10);
            $cul_path = $temp.'_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::delete($data->photo[0]->path);
            Storage::putFileAs('culinary_img/', $file, $cul_path);
            //dd($cul_path);

            $cul_path = 'culinary_img/'.$cul_path;
            $pho = $data->photo[0];
            $pho->path = $cul_path;
            $pho->save();
        }

        // dd($pho);
        return redirect('/tableCulinary');
    }
    public function deleteCulinary(Request $request, $id){
        $data = Culinary::find($id);
        foreach ($data->photo as $key) {
            Storage::delete($key->path);
        }
        $data->photo->each->delete();
        $data->comment_list->each->delete();
        $data->delete();

        return redirect()->back()->with('success', 'Culinary deleted successfully');
    }

    public function addDestination(Request $request){
        // dd($request);
        $file = $request->file('image');
        $request->validate([
            'name' => 'required',
            'description'=>'required',
            'rundown' => 'required',
            'address' => 'required',
            'price1'=>'required',
            'price2'=>'required',
            'price3'=>'required',
            'price4'=>'required',
            'image' => 'required',
        ]);

        $data = new Destination();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->rundown = $request->rundown;
        $data->maps = $request->address;
        $data->price1 = $request->price1;
        $data->price2 = $request->price2;
        $data->price3 = $request->price3;
        $data->price4 = $request->price4;

        if($file!=null){
            $request->validate([
                'image' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($data->name, 10);
            $des_path = $temp.'_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('destination_img/', $file, $des_path);
            // dd($des_path);

            $des_path = 'destination_img/'.$des_path;
            $data->photo = $des_path;
        }

        $data->save();

        return redirect('/tableDestination');
    }
    public function editDestination(Request $request, $id) {
        $file = $request->file('image');
        $data = Destination::find($id);

        if($file!=null){
            $request->validate([
                'image' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($data->name, 10);
            $des_path = $temp.'_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::delete($data->photo);
            Storage::putFileAs('destination_img/', $file, $des_path);
            // dd($des_path);

            $des_path = 'destination_img/'.$des_path;
            $data->photo = $des_path;
        }
        $data->name = $request->name;
        $data->description = $request->description;
        $data->rundown = $request->rundown;
        $data->maps = $request->address;
        $data->price1 = $request->price1;
        $data->price2 = $request->price2;
        $data->price3 = $request->price3;
        $data->price4 = $request->price4;

        $data->save();

        return redirect('/tableDestination');
    }
    public function deleteDestination(Request $request, $id){
        $data = Destination::find($id);
        Storage::delete($data->photo);
        $data->delete();


        return redirect()->back()->with('success', 'Destination deleted successfully');
    }

    
    public function addSouvenir(Request $request) {
        $file = $request->file('image');

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
            'price'=>'required',
        ]);
        // dd($request);
        $data = new Souvenir();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;

        if($file!=null){
            $request->validate([
                'image' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($data->name, 10);
            $sou_path = $temp.'_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('souvenir_img/', $file, $sou_path);

            $sou_path = 'souvenir_img/'.$sou_path;
            $data->photo = $sou_path;
        }

        $data->save();
        return redirect('/tableSouvenir');
    }
    public function editSouvenir(Request $request, $id) {
        $file = $request->file('image');

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        // dd($request);
        $data = Souvenir::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;

        if($file!=null){
            $request->validate([
                'image' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($data->name, 10);
            $sou_path = $temp.'_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::delete($data->photo);
            Storage::putFileAs('souvenir_img/', $file, $sou_path);

            $sou_path = 'souvenir_img/'.$sou_path;
            $data->photo = $sou_path;
        }

        $data->save();
        return redirect('/tableSouvenir');
    }
    public function deleteSouvenir(Request $request, $id){
        $data = Souvenir::find($id);
        Storage::delete($data->photo);
        $data->delete();
        return redirect()->back()->with('success', 'Souvenir deleted successfully');
    }

    public function addPromo(Request $request) {
        $file = $request->file('image');

        $request->validate([
            'name'=>'required',
            'image'=>'required',
        ]);
        // dd($request);
        $data = new Promo();
        $data->name = $request->name;

        if($file!=null){
            $request->validate([
                'image' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($data->name, 10);
            $pr_path = $temp.'_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('promo_img/', $file, $pr_path);

            $pr_path = 'promo_img/'.$pr_path;
            $data->photo = $pr_path;
        }

        $data->save();
        return redirect('/tablePromo');
    }
    public function editPromo(Request $request, $id) {
        $file = $request->file('image');

        $request->validate([
            'name'=>'required',
        ]);
        // dd($request);
        $data = Promo::find($id);
        $data->name = $request->name;

        if($file!=null){
            $request->validate([
                'image' => 'image'
            ]);
            $dt = new DateTime();
            $dt = $dt->format('Ymd_His');
            $temp = $this->getName($data->name, 10);
            $pr_path = $temp.'_'.$dt.'.'.$file->getClientOriginalExtension();
            Storage::delete($data->photo);
            Storage::putFileAs('promo_img', $file, $pr_path);

            $pr_path = 'promo_img/'.$pr_path;
            $data->photo = $pr_path;
        }

        $data->save();
        return redirect('/tablePromo');
    }
    public function deletePromo(Request $request, $id){
        $data = Promo::find($id);
        Storage::delete($data->photo);
        $data->delete();
        return redirect()->back()->with('success', 'Promo deleted successfully');
    }

}
