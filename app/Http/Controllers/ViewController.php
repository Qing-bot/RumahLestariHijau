<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Destination;
use App\Models\DestinationPrice;
use App\Models\Homestay;
use App\Models\HomestayPhoto;
use App\Models\NearbyPlace;
use App\Models\Photo;
use App\Models\PopularPlace;
use App\Models\Promo;
use App\Models\Souvenir;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{

    public function index(){
        $culinary = Culinary::all();
        $destination = Destination::all();
        $promo = Promo::all();
        // dd($culinary);
        return view('home', ['cul' => $culinary, 'des' => $destination, 'pr'=>$promo]);
    }

    public function indexresp(){
        $culinary = Culinary::all();
        $destination = Destination::all();
        $promo = Promo::all();
        // dd($culinary);
        return view('homeresp', ['cul' => $culinary, 'des' => $destination, 'pr'=>$promo]);
    }

    public function profile(){
        return view('profile');
    }

    public function indexHomestay(){
        $hs = Homestay::all();
        return view('homestay', compact('hs'));
    }

    public function sortHomestay($id){
        if ($id == 1){
            $hs = Homestay::orderBy('price')->get();
        }
        else if ($id == 2){
            $hs = Homestay::orderBy('price', 'desc')->get();
        }
        else if ($id == 3){
            $hs = Homestay::orderBy('like', 'desc')->get();
        }
        return view('homestay', compact('hs'));
    }

    public function filterHomestayFacilities($id){
        if($id == 1){
             $hs = Homestay::query()->where(['wifi'=> 1])->get();
        }
        else if($id == 2){
             $hs = Homestay::query()->where(['parking'=>1])->get();
        }
        else if($id == 3){
             $hs = Homestay::query()->where(['ac'=>1])->get();
        }
        else if($id == 4){
             $hs = Homestay::query()->where(['restaurant'=>1])->get();
        }
        return view('homestay', compact('hs'));
    }

    public function filterHomestay(Request $request){
        $hs = Homestay::all();
        if($request->ajax()){
            if($request->id==1){
                $tes = Homestay::query()->where(['wifi'=> 1])->get();
                return response()->json(['homes'=>$tes]);
            }
            if($request->id==2){
                $tes = Homestay::query()->where(['parking'=>1])->get();
                return response()->json(['homes'=>$tes]);
            }
            if($request->id==3){
                $tes = Homestay::query()->where(['ac'=>1])->get();
                return response()->json(['homes'=>$tes]);
            }
            if($request->id==4){
                $tes = Homestay::query()->where(['restaurant'=>1])->get();
                return response()->json(['homes'=>$tes]);
            }
            return response()->json(['homes'=>$hs]);
        }
        return view('homestay', compact('hs'));
    }

    public function indexCulinary(){
        $data = Culinary::all();
        return view('culinary', ['culi'=>$data]);
    }

    public function sortCulinary($id){
        if ($id == 1){
            $data = Culinary::orderBy('price')->get();
        }
        else if ($id == 2){
            $data = Culinary::orderBy('price', 'desc')->get();
        }
        else if ($id == 3){
            $data = Culinary::orderBy('like', 'desc')->get();
        }
        return view('culinary', ['culi'=> $data]);
    }

    public function filterCulinary(Request $request){
        $data = Culinary::all();
        if($request->ajax()){
            $pho=Photo::query()->where(['category_id'=>1])->get();
            return response()->json(['homes'=>$data, 'pho'=>$pho]);
        }
        return view('culinary', ['culi'=>$data]);
    }
    public function indexSouvenir(){
        $data = Souvenir::all();
        return view('souvenir', ['sou'=>$data]);
    }
    public function indexPromo(){
        $data = Promo::all();
        return view('promo', ['pro'=>$data]);
    }
    public function indexDestination(){
        $data = Destination::all();
        return view('destination', ['des'=>$data]);
    }
    public function indexDestinationDetail($id){
        $data = Destination::find($id);
        return view('destinationDetail', ['des'=>$data]);
    }

    public function indexAdminHomestay(){
        $data = Homestay::all();
        return view('admin.tableHomestay', ['productHomestay'=>$data]);
    }
    public function indexAdminEditHomestay($id){
        $data = Homestay::find($id);
        $pho = HomestayPhoto::where('homestay_id', $id)->orderBy('index', 'asc')->get();
        $np = NearbyPlace::where('homestay_id', $id)->get();
        $pp = PopularPlace::where('homestay_id', $id)->get();

        return view('admin.editHomestay', ['data' => $data, 'pho'=> $pho, 'np' => $np, 'pp' => $pp]);
    }

    public function indexAdminCulinary(){
        $data = Culinary::all();
        return view('admin.tableCulinary', ['foodCulinary'=>$data]);
    }
    public function indexAdminEditCulinary($id){
        $data = Culinary::find($id);
        return view('admin.editCulinary', ['data'=>$data]);
    }

    public function indexAdminDestination(){
        $data = Destination::all();
        return view('admin.tableDestination', ['tes'=>$data]);
    }
    public function indexAdminEditDestination($id){
        $data = Destination::find($id);
        $price = DestinationPrice::where('destination_id', $id)->orderBy('min_person', 'asc')->get();
        return view('admin.editDestination', ['data'=> $data, 'price' => $price ]);
    }

    public function indexAdminSouvenir(){
        $data = Souvenir::all();
        return view('admin.tableSouvenir', ['tes'=>$data]);
    }
    public function indexAdminEditSouvenir($id){
        $data = Souvenir::find($id);
        return view('admin.editSouvenir', ['data'=>$data]);
    }

    public function indexAdminPromo(){
        $data = Promo::all();
        return view('admin.tablePromo', ['tes'=>$data]);
    }
    public function indexAdminEditPromo($id){
        $data = Promo::find($id);
        return view('admin.editPromo', ['data'=>$data]);
    }

}
