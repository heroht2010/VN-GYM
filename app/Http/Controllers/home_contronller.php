<?php

namespace App\Http\Controllers;

use App\ACCE_model;
use App\ACCEtype_model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\pt_model;
use App\baitap_model;
use App\bonus_model;
use App\commentpro_model;
use App\customer_model;
use App\feedback_model;
use App\product_model;
use App\dangki_model;
use App\donhang_model;
use App\donhangdetail_model;
use App\giohang_mode;
use App\loaisanpham_model;
use App\response_model;
use Illuminate\Support\Facades\Date;

class home_contronller extends Controller
{
    public function trangchu()
    {
    	$data=pt_model::where('id_pt',1)->inRandomOrder()->take(2)->get();
    	$data1=pt_model::where('id_pt',2)->inRandomOrder()->take(2)->get();
    	$data2=feedback_model::inRandomOrder()->take(5)->get();
    	$data3=product_model::where('detail','!=','')->inRandomOrder()->take(3)->get();
    	$data4=baitap_model::inRandomOrder()->take(3)->get();
    	return view('GYMHTML.GYM-trangchu',[
    		'data'=>$data,
    		'data1'=>$data1,
    		'feedback'=>$data2,
    		'product'=>$data3,
    		'baitap'=>$data4
    	]);
    }

    public function product()
    {
    	$whey=product_model::where('id_product',1)->where('id_product_type',1)->inRandomOrder()->take(4)->get();
    	$whey1=product_model::where('id_product',2)->where('id_product_type',1)->inRandomOrder()->take(4)->get();
    	$whey2=product_model::where('id_product',3)->where('id_product_type',1)->inRandomOrder()->take(4)->get();
    	$bcaa=product_model::where('id_product',1)->where('id_product_type',2)->inRandomOrder()->take(4)->get();
    	$bcaa1=product_model::where('id_product',2)->where('id_product_type',2)->inRandomOrder()->take(4)->get();
    	$tangcan=product_model::where('id_product',1)->where('id_product_type',3)->inRandomOrder()->take(4)->get();
    	$tangcan1=product_model::where('id_product',2)->where('id_product_type',3)->inRandomOrder()->take(4)->get();
    	$tangcan2=product_model::where('id_product',3)->where('id_product_type',3)->inRandomOrder()->take(4)->get();
    	$vitamin=product_model::where('id_product',1)->where('id_product_type',4)->inRandomOrder()->take(4)->get();
    	$vitamin1=product_model::where('id_product',2)->where('id_product_type',4)->inRandomOrder()->take(4)->get();
    	$baitap=baitap_model::where('id_lecture',1)->inRandomOrder()->take(3)->get();
    	$baitap1=baitap_model::where('id_lecture',2)->inRandomOrder()->take(4)->get();

    	return view('GYMHTML.GYM-thucphambosung',[
    		'whey1'=>$whey,
    		'whey2'=>$whey1,
    		'whey3'=>$whey2,
    		'bbca1'=>$bcaa,
    		'bbca2'=>$bcaa1,
    		'tangcan1'=>$tangcan,
    		'tangcan2'=>$tangcan1,
    		'tangcan3'=>$tangcan2,
    		'vitamin1'=>$vitamin,
    		'vitamin2'=>$vitamin1,
    		'baitap'=>$baitap,
    		'baitap1'=>$baitap1
    	]);
    }

	public function insertaccount(Request $request)
	{
		if(Auth::attempt(['user' => $request->user, 'password' => $request->pass])){
           return response()->json(['status'=>'unsuccess']);
		}
		else{
			$request->session()->put('user',$request->ten);
		$info=new customer_model();
		$info->ho=$request->ho;
		$info->ten=$request->ten;
		$info->user=$request->user;

		$data=new dangki_model();
		$data->user=$request->user;
		$data->password=bcrypt($request->pass);
		$data->level=3;
		$data->save();
		$info->save();
		return response()->json(['status'=>'string']);
		}
	}

    public function login(Request $request)
    {
    	$user=$request->user;
		$pass=$request->pass;
		$validate=$this->validate($request,[
		'user'=>'required',
		'pass'=>'required|min:6|max:20'
		],[
			'user.required'=>'Nhập cho đủ',
			'pass.required'=>'nhập pass kìa',
			'pass.min'=>'nhập ngắn rứa cha',
			'pass->max'=>'nhập chi dài rứa'
		]);
        if (Auth::attempt(['user' => $user, 'password' => $pass,'level'=>1])) {

        	return response()->json(['status'=>1]);

        }
        else{
			if(Auth::attempt(['user' => $user, 'password' => $pass,'level'=>2])){

				return response()->json(['status'=>2]);
			}
			else{
				if(Auth::attempt(['user' => $user, 'password' => $pass,'level'=>3])){
				$data=customer_model::select('ten','ho','id')->where('user',$user)->first();
			$request->session()->put('user',$data->ten);
			$request->session()->put('ho',$data->ho);
			$request->session()->put('id',$data->id);
			return response()->json(['status'=>3]);
				}
				else{
					return response()->json(['error'=>$validate]);
				}
			}

        }

	}
	//khanhcac' OR 1=1 -- cac

    public function dangxuat()
    {
    	session()->forget('user');
    	return redirect()->route('trangchu');
    }

    public function giohang()
    {

		$data=giohang_mode::where('id_user',session()->get('id'))->get();
		// $data=$data->first()->product()->get();
    		// $product=product_model::where('id',$value['id'])->paginate(3);
    	return view('GYMHTML.GYM-giohang',['data'=>$data]);


    }

    public function insert_cart(Request $request)
    {
    	$ten=$request->ten;
    	$loai=$request->loai;
		$id=$request->id;
		$iduser=session()->get('id');

    	$result=giohang_mode::where([
			['ten','=',$ten],
			['loai','=',$loai],
			['id_user','=',$iduser]
		])->get();
    	if (($result->count())>0) {
    		return response()->json(['status'=>'Sản phẩm đã có trong giỏ hàng']);
    	}
    	else{

    		$product=new giohang_mode();
    		$product->id_product=$id;
    		$product->ten=$ten;
    		$product->loai=$loai;
    		$product->id_user=$iduser;
    		$product->save();
           return response()->json(['status'=>'1']);
    	}
    }

	public function delete_cart(Request $request)
	{
	   $data=giohang_mode::where([
		   ['id_product',$request->id_product],
	   ['id_user',session()->get('id')],
	   ['ten',$request->name]
	   ]);
	   if($data->delete()){
		   return response()->json(['status'=>1]);
	   }
	   else{
		   return response()->json(['status'=>false]);
	   }
	}

    public function viewdetail($id,Request $request)
    {

		$request->session()->put('loai',$request->l);
        $result=product_model::where('id',$id)->get();
		$quantam=product_model::inRandomOrder()->take(15)->get();
		$comment=commentpro_model::where('id_product',$id)->get();
		$idloai=loaisanpham_model::select('id')->where('product_type',$request->l)->get();
		$lienquan=product_model::where('id_product_type',$idloai->first()->id)->inRandomOrder()->take(4)->get();
		$lienquan1=product_model::where('id_product_type',$idloai->first()->id)->inRandomOrder()->take(4)->get();
		$lienquan2=product_model::where('id_product_type',$idloai->first()->id)->inRandomOrder()->take(4)->get();
        return view('GYMHTML.detail_product',[
            'detailproduct'=>$result,
            'quantam'=>$quantam,
			'lienquan'=>$lienquan,
			'lienquan1'=>$lienquan1,
			'lienquan2'=>$lienquan2,
			'id_product'=>$id,
			'comment'=>$comment
        ]);
	}

	public function xulibuy(Request $request)
	{
		$iduser=session()->get('id');
		$info=customer_model::where('id',$iduser)->get();
		$product=product_model::where('id',$request->id)->get();
		return view('GYMHTML.GYM-buyproduct',[
			'info'=>$info,
			'product'=>$product,
			'soluong'=>$request->sl,
			'vi'=>$request->h,
			'iduser'=>$iduser,
			'idpro'=>$request->id
		]);
	}

	public function searchbar(Request $request)
	{
		$data=product_model::where('name','LIKE','%'.$request->key.'%')
							 ->orWhere('detail','LIKE','%'.$request->key.'%')
							 ->orWhere('thuonghieu','LIKE','%'.$request->key.'%')
							 ->orWhere('mota','LIKE','%'.$request->key.'%')
							 ->orWhere('huongvi1','LIKE','%'.$request->key.'%')
							 ->orWhere('huongvi2','LIKE','%'.$request->key.'%')
							 ->orWhere('image1','LIKE','%'.$request->key.'%')
							 ->orWhere('image2','LIKE','%'.$request->key.'%')
							 ->orWhere('image3','LIKE','%'.$request->key.'%')
							 ->orWhere('image4','LIKE','%'.$request->key.'%')->get();
		$loai=loaisanpham_model::get();
		return view('GYMHTML.GYM-searchproduct',['data'=>$data,'loai'=>$loai]);
	}

	public function insert_dh(Request $request)
	{
		$madh= Str::random(8)."-".$request->madh;
		$iduser=$request->iduser;
		$huongvi=$request->huongvi;
		$price=$request->price;
		$count=$request->count;
		$namedeli=$request->namedeli;
		$sum=$request->sum;
		$trangthai=$request->trangthai;
		$note=$request->note;
		$loai=session()->get('loai');
        $date=getdate();
		$donhang= new donhangdetail_model();
		$donhang->madh=$madh;
		$donhang->id_user=$iduser;
		$donhang->id_product=$request->idpro;
		$donhang->huongvisp=$huongvi;
		$donhang->soluong=$count;
		$donhang->dongia=$price;
		$donhang->tongtien=$sum;
		$donhang->vanchuyen=$namedeli;
		$donhang->note=$note;

		$madonhang=new donhang_model();
		$madonhang->madh=$madh;
		$madonhang->id_user=$iduser;
		$madonhang->id_product=$request->idpro;
		$madonhang->ngaytao=$date['mday']."/".$date['mon']."/".$date['year'];
		$madonhang->trangthai=$trangthai;
		$madonhang->ngaynhan=($date['mday']+3)."/".$date['mon']."/".$date['year'];

		$donhang->save();
		$madonhang->save();
		return response()->json(['status'=>'thanhcong']);
		// if($donhang->save()){

		// }

	}

	public function huydh(Request $request)
	{

		$data=donhang_model::where([
			['madh',$request->madh],
			['id_user',session()->get('id')]
			])->first();
		$data->trangthai='huy';
		$data->save();
		return redirect()->route('payment');
	}

	public function viewpayment()
	{
		$data=donhangdetail_model::where('id_user',session()->get('id'))->get();
		return view('GYMHTML.GYM-payment',['data'=>$data->sortByDesc('id'),'loai'=>session()->get('loai')]);
	}

	public function viewadmin_listproduct()
	{
		$data=product_model::paginate(6);
		return view('GYMHTML.list-productadmin',['data'=>$data]);
	}

	public function viewinsert_productadmin()
	{
		$data=loaisanpham_model::get();
		return view('GYMHTML.insert_productadmin',['data'=>$data]);
	}

	public function insertrespond(Request $request)
	{
		$data=new response_model();
		$data->name=$request->name;
		$data->province=$request->tinh;
		$data->email=$request->email;
		$data->sdt=$request->sdt;
		$data->respond=$request->gopy;
		$data->image='https://image1.thegioitre.vn/2017/09/30/nguyen-tuan-viet.jpg';
		$data->save();
		return redirect()->route('trangchu');
	}
	public function insert_productadmin(Request $request)
	{
		$name=$request->ten;
		$weight=$request->trongluong;
		$loai=$request->loai[0];
        $id=$request->id;
        $count=$request->soluong;
        $image=$request->hinh;
        $onsale=$request->onsale;
        $price=$request->price;
        $detail=$request->detail;
        $thuonghieu=$request->thuonghieu;
		$mota=$request->mota;

		$data=new product_model;
		$data->name=$name;
		$data->weight=$weight;
		$data->detail=$detail;
		$data->onsale=$onsale;
		$data->price=$price;
		$data->count=$count;
		$data->id_product=$id;
		$data->id_product_type=$loai;
		$data->mota=$mota;
		$data->thuonghieu=$thuonghieu;
		if($request->hasFile('hinh')){
			$file=$request->file('hinh');
			$duoi=$file->getClientOriginalExtension();
			if($duoi!='jpg'&&$duoi!='png'&&$duoi!='jpeg'){
				return redirect()->route('viewinsertproduct')->with('File hình không dúng định dạng');
			}
			$name=$file->getClientOriginalName();
			$file->storeAs('product' ,$name);
			$data->image=$name;

		}
		else{
			$data->image='';
		}
		$data->save();

		return redirect()->route('list-productadmin');
	}

	public function edit_product(Request $request)
	{
		$data=product_model::where('id',$request->id)->get();
		$data1=loaisanpham_model::get();
		return view('GYMHTML.view_editproduct',['data'=>$data,'type'=>$data1,'id'=>$request->id]);
	}

	public function update_product(Request $request)
	{
		$data=product_model::find($request->id);

		$data->name=$request->ten;
		$data->weight=$request->trongluong;
		$data->detail=$request->detail;
		$data->onsale=$request->onsale;
		$data->price=$request->price;
		$data->count=$request->soluong;
		$data->id_product=$data->id_product;
		$data->mota=$data->mota;
		$data->id_product_type=$request->loai[0];
		$data->thuonghieu=$request->thuonghieu;
	if($request->has('hinh')){
		$file=$request->file('hinh');
		$duoi=$file->getClientOriginalExtension();
		if($duoi!='jpg'&&$duoi!='png'&&$duoi!='jpeg'){
			return redirect()->route('editproduct');
		}
		$name=$file->getClientOriginalName();
			$file->storeAs('product' ,$name);
			$data->image=$name;
	}
	else{
		$data->image=$data->image;
	}
	$data->save();
	return redirect()->route('list-productadmin');

	}

	public function delete_product(Request $request)
	{
		$data=product_model::find($request->id);
		$data->delete();
		return redirect()->route('list-productadmin');

	}

	public function listpt()
	{
		$data=pt_model::paginate(4);
		return view('GYMHTML.list-ptadmin',['data'=>$data]);
	}

	public function edit_ptadmin(Request $request)
	{
		$data=pt_model::where('id',$request->id)->get();
		return view('GYMHTML.edit-ptadmin',['data'=>$data]);
	}

	public function update_pt(Request $request)
	{
		$data=pt_model::find($request->id);
		$data->id_pt=$request->idpt;
		$data->follow=$request->follow;
		$data->name=$request->ten;
		$data->ngaysinh=$request->ngaysinh;
		$data->diachi=$request->diachi;
		$data->quequan=$request->quequan;
		$data->cmnd=$request->cmnd;
		$data->sdt=$request->sdt;
		$data->detail=$request->detail;

		if($request->has('hinh')){
			$file=$request->file('hinh');
			$duoi=$file->getClientOriginalExtension();
			if($duoi!='jpg'&&$duoi!='png'&&$duoi!='jpeg'){
				return redirect()->route('editpt');
			}
			$name=$file->getClientOriginalName();
				$file->storeAs('upload/pt' ,$name);
				$data->image=$name;
		}
		else{
			$data->image=$data->image;
		}
		$data->save();
		return redirect()->route('listpt');
	}

	public function delete_pt(Request $request)
	{
		$data=pt_model::find($request->id);
		$tk=dangki_model::where('user',$data->user);
		$tk->delete();
		$data->delete();
		return redirect()->route('listpt');
	}

	public function insert_ptadmin(Request $request)
	{
		$data=new pt_model();

		$data->id_pt=$request->idpt;
		$data->follow=$request->follow;
		$data->name=$request->ten;
		$data->ngaysinh=$request->ngaysinh;
		$data->diachi=$request->diachi;
		$data->quequan=$request->quequan;
		$data->cmnd=$request->cmnd;
		$data->sdt=$request->sdt;
		$data->detail=$request->detail;
        $data->user=$request->taikhoan;
		if($request->has('hinh')){
			$file=$request->file('hinh');
			$duoi=$file->getClientOriginalExtension();
			if($duoi!='jpg'&&$duoi!='png'&&$duoi!='jpeg'){
				return redirect()->route('viewinsertpt');
			}
			$name=$file->getClientOriginalName();
				$file->move('upload/pt' ,$name);
				$data->image=$name;
		}
		else{
			$data->image='';
		}

		$tk=new dangki_model();
		$tk->user=$request->taikhoan;
		$tk->password=bcrypt($request->matkhau);
		$tk->level=2;
		$data->save();
		$tk->save();
		return redirect()->route('listpt');
	}

	public function listpay()
	{
		$data=donhangdetail_model::get();
		return view('GYMHTML.GYM-listpayadmin',['data'=>$data]);
	}

	public function edit_payadmin(Request $request)
	{
		$data=donhangdetail_model::where('id',$request->id)->get();
		return view('GYMHTML.GYM-editpayadmin',['data'=>$data,'id'=>$request->id]);
	}

	public function update_pay(Request $request)
	{
		$data=donhang_model::find($request->id);
		$data->trangthai=$request->trangthai;
		$data->ngaynhan=$request->ngaynhan;
		$data->save();
		return response()->json(['status'=>1]);
	}

	public function tk_day()
	{
		$date=getDate();
	    $ngay=$date['mday'].'/'.$date['mon'].'/'.$date['year'];
		$data=donhang_model::where('ngaytao','=',$ngay)->get();
        return view('GYMHTML.listpaytkadmin',['data'=>$data]);

	}

	public function tkpay(Request $request)
	{
		$start=date("d/m/Y", strtotime($request->start));
		 $end=date("d/m/Y", strtotime($request->end));
		$data=donhang_model::whereBetween('ngaytao',[$start,$end])->get();
        return view('GYMHTML.listpaytkadmin',['data'=>$data]);

	}

	public function doanhthu()
	{

		$data=donhang_model::where('trangthai','da')->get();
		return view('GYMHTML.GYM-doanhthu',['data'=>$data]);
	}

	public function tkdoanhthu(Request $request)
	{
		$start=date("d/m/Y", strtotime($request->start));
		 $end=date("d/m/Y", strtotime($request->end));
		$data=donhang_model::whereBetween('ngaytao',[$start,$end])->where('trangthai','da')->get();
        return view('GYMHTML.listdoanhthutkadmin',['data'=>$data]);

	}

	public function insert_cm(Request $request)
	{
		$data=new commentpro_model();
		$data->id_product=$request->id_product;
		$data->id_user=$request->id_user;
		$data->comment=$request->comment;
		if($data->save()){
			return response()->json(['status'=>1]);
		}
		else{
			return response()->json(['status'=>false]);
		}
	}

	public function list_commentadmin()
	{
		$data=commentpro_model::paginate(5);
		return view('GYMHTML.GYM-comment',['data'=>$data]);
	}

	public function bonus_code(Request $request)
	{
		$data=bonus_model::where('makm',$request->makm)->get();
		if($data->count()>0){
			return response()->json(['status'=>$data->first()->giatri]);
		}
		else{
			return response()->json(['status'=>false]);
		}
	}

	public function view_ACCE()
	{
		$loai=ACCEtype_model::get();
		$thietbi=ACCE_model::inRandomOrder()->paginate(12);
		return view('GYMHTML.GYM-thietbigym',['loai'=>$loai,'thietbi'=>$thietbi]);
	}

	public function view_detailacce()
	{
		$loai=ACCEtype_model::get();
		return view('GYMHTML.GYM-detailacce',['loai'=>$loai]);
    }

    //-------------------------------------------------------------
    //App Android
    public function get_productsale()
    {
        $data=product_model::where('onsale','!=','.')->inRandomOrder()->take(5)->get();
        return json_encode($data);
	}

	public function get_product()
    {
        $data=product_model::take(5)->get();
        return json_encode($data);
    }

    public function get_pt()
    {
        $data=pt_model::inRandomOrder()->take(5)->get();
        return json_encode($data);
    }

    public function get_producttype()
    {
        $data=loaisanpham_model::get();
        return json_encode($data);
    }

    public function get_allproduct()
    {
        $data=product_model::get();
        return json_encode($data);
    }

    public function get_comment(Request $request){
        $data=commentpro_model::where('id_product',$request->id_product)->get();
        return json_encode($data);
    }

    public function check_login(Request $request){
        $user=$request->username;
        $pass=$request->pass;
        // $validate=$this->validate($request,[
        //     'user'=>'required',
        //     'pass'=>'required|min:6|max:20'
        //     ],[
        //         'user.required'=>'Nhập cho đủ',
        //         'pass.required'=>'nhập pass kìa',
        //         'pass.min'=>'nhập ngắn rứa cha',
        //         'pass->max'=>'nhập chi dài rứa'
        //     ]);
            if(Auth::attempt(['user' => $user, 'password' => $pass,'level'=>3])){
                $data=customer_model::where('user',$user)->get();
                return response()->json($data);
            }
            else{
                return response()->json(0);
            }


	}

	public function search_Product(Request $request)
	{
		$data=product_model::where('name','LIKE','%'.$request->key.'%')
							 ->orWhere('detail','LIKE','%'.$request->key.'%')
							 ->orWhere('thuonghieu','LIKE','%'.$request->key.'%')
							 ->orWhere('mota','LIKE','%'.$request->key.'%')
							 ->orWhere('huongvi1','LIKE','%'.$request->key.'%')
							 ->orWhere('huongvi2','LIKE','%'.$request->key.'%')
							 ->orWhere('image1','LIKE','%'.$request->key.'%')
							 ->orWhere('image2','LIKE','%'.$request->key.'%')
							 ->orWhere('image3','LIKE','%'.$request->key.'%')
							 ->orWhere('image4','LIKE','%'.$request->key.'%')->get();
		return response()->json($data);
    }

    public function cart_Product(Request $request)
	{
        $data=giohang_mode::where('id_user',$request->id_user)->get();
		return response()->json($data);
	}

	public function addcart_Product(Request $request)
    {
    	$ten=$request->ten;
		$id=$request->id_product;
		$iduser=$request->id_user;

    	$result=giohang_mode::where([
			['ten','=',$ten],
			['id_user','=',$iduser]
		])->get();
    	if (($result->count())>0) {
    		return response()->json(0);
    	}
    	else{
    		$product=new giohang_mode();
            $product->id_product=$id;
            $product->image=$request->image;
            $product->ten=$ten;
            $product->huongvi=$request->huongvi;
            $product->price=$request->price;
            $product->pricesale=$request->pricesale;
    		$product->loai="";
            $product->id_user=$iduser;
            $product->rating=$request->rating;
    		$product->save();
           return response()->json(1);
    	}
    }

    public function getsame_Product(Request $request)
    {
        $data=product_model::select('id_product_type')->where('name',$request->nameproduct)->get();
         $product=product_model::where('id_product_type',$data->first()->id_product_type)->get();
        return response()->json($product);
    }

    public function get_productfavor()
    {
        $data=product_model::take(10)->get();
        return response()->json($data);
    }

    public function addorder_Product(Request $request)
    {
        $madh= Str::random(8)."-".$request->madh;
		$iduser=$request->id_user;
		$huongvi=$request->flavor;
		$price=$request->price;
		$count=$request->count;
		$namedeli="Vận chuyển nhanh";
		$sum=$request->pricesum;
		$trangthai="cho";
		$note="";
        $date=getdate();
		$donhang= new donhangdetail_model();
		$donhang->madh=$madh;
		$donhang->id_user=$iduser;
		$donhang->id_product=$request->id_product;
		$donhang->huongvisp=$huongvi;
		$donhang->soluong=$count;
		$donhang->dongia=$price;
		$donhang->tongtien=$sum;
		$donhang->vanchuyen=$namedeli;
		$donhang->note=$note;

		$madonhang=new donhang_model();
		$madonhang->madh=$madh;
		$madonhang->id_user=$iduser;
		$madonhang->id_product=$request->id_product;
		$madonhang->ngaytao=$date['mday']."/".$date['mon']."/".$date['year'];
		$madonhang->trangthai=$trangthai;
		$madonhang->ngaynhan=($date['mday']+3)."/".$date['mon']."/".$date['year'];

		$donhang->save();
		$madonhang->save();
		return response()->json(1);
    }

    public function getorder_Product(Request $request)
    {
        $data=donhangdetail_model::where('id_user',$request->id_user)->get();
        $data=$data->sortByDesc('id');
        return response()->json($data);
    }

    public function getrating_Product(Request $request)
    {
        $data=commentpro_model::where('id_product',$request->id_product)->get();
        return response()->json($data);
    }

    public function addcomment_Product(Request $request)
    {
        $data=new commentpro_model();
        $data->id_product=$request->id_product;
        $data->user=$request->user;
        $data->rating=$request->ratingstar;
        $data->comment=$request->descrirating;
        $data->id_user=$request->id_user;
        $data->save();
        return response()->json(1);
    }

    public function update_Profile(Request $request)
    {
        $data=customer_model::find($request->id_user);
        $data->ho=$request->lastName;
        $data->ten=$request->firstName;
        $data->diachi=$request->addr;
        $data->sdt=$request->phone;
        $name='';
        if($request->avart!=''){
			$name=time().'.jpg';
				file_put_contents('upload/avart/' .$name,base64_decode($request->avart));
				$data->avart=$name;
		}
        $data->update();
        return response()->json($name);

    }
}
