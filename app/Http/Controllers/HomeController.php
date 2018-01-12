<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\City;
use App\Ward;
use App\District;
use App\Post;
use App\Notifice;

class HomeController extends Controller
{
    public function getView(Request $request){
        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
            $thanhpho = City::orderBy('name', 'asc')->get();
            $baiviet = Post::orderBy('updated_at', 'desc')->simplePaginate(5);
            $baiviet_user = Post::where('id_author', Auth::user()->id)->orderBy('created_at', 'desc')->simplePaginate(3);
            $thongbao = Notifice::where('id_author', Auth::user()->id)->get();

            return view('homepage')->with(compact('user', 'thanhpho', 'baiviet', 'baiviet_user','thongbao'));
        }
        else
        {
            return Redirect(route('AboutPage'));
        }
    }

    public function post(Request $request) {
        if ($request->squan != NULL && $request->equan != NULL && $request->content != NULL && $request->sthanhpho != NULL && $request->ethanhpho != NULL) {

            if ((!Ward::where('id_district', $request->squan)->get()->isEmpty() && $request->sphuong == NULL) ||
                (!Ward::where('id_district', $request->equan)->get()->isEmpty() && $request->ephuong == NULL))
                return Redirect()->back()->withInput();

            Post::create([
                'content' => $request->content,
                'state' => $request->state,
                'id_author' => Auth::user()->id,
                'id_ward_cur' => $request->sphuong,
                'id_district_cur' => $request->squan,
                'id_ward_next' => $request->ephuong,
                'id_district_next' => $request->equan
        ]);
        }
        return Redirect()->back();
    }
    
    public function getQuan(Request $request) {
        $data = District::where('id_city', $request->thanhpho_id)->orderBy('name','asc')->get();
        return response()->json($data);
    }

    public function getPhuong(Request $request) {
        $data = Ward::where('id_district', $request->quan_id)->distinct()->orderBy('name','asc')->get();
        return response()->json($data);
    }

    public function sendOffer(Request $request) {
        if ($request->has('id_baiviet')) {
            $baiviet = Post::find($request->id_baiviet);
            if ($baiviet->id_author != Auth::user()->id && $baiviet->id_request != Auth::user()->id) {
                ThongBao::create([
                    'id_post' => $baiviet->id,
                    'id_author' => $baiviet->user_id,
                    'id_request' => Auth::user()->id
                ]);
            }
        }

        return Redirect()->back();
    }
}