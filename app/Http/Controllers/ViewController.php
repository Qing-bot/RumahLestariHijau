<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Destination;
use App\Models\Homestay;
use App\Models\NearbyPlace;
use App\Models\Photo;
use App\Models\Promo;
use App\Models\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{

    //$path = public_path()

    public function index(){
        $culinary = Culinary::all()->first();
        $destination = Destination::all()->first();
        $promo = Promo::all();
        // dd($culinary);
        return view('home', ['cul' => $culinary, 'hs' => $destination, 'pr'=>$promo]);

    }

    public function indexHomestay(){
        $hs = Homestay::all();
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
        $np = NearbyPlace::where('homestay_id', $id)->get();

        return view('admin.editHomestay', ['data' => $data, 'np' => $np]);
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
        return view('admin.editDestination', ['data'=>$data]);
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
