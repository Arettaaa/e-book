<?php

namespace App\Http\Controllers;
use App\Models\Books;
use App\Models\User;
use App\Models\Data;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function recomend()
    {
        return view('recomend');
    }
    public function books()
    {
        return view('books');
    }

    public function komik()
    {
        return view('komik');
    }
    public function Biografi()
    {
        return view('Biografi');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

    public function inputRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:4|max:10',
        ]);

        $book = new User();
        $book->name = $request->name;
        $book->email = $request->email;
        $book->tlp = $request->tlp;
        $book->alamat = $request->alamat;
        $book->password = $request->password;
        $book->save();
        return redirect('/')->with('success', 'berhasil membuat akun!');
    }

    
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect()->route('/recomend');
        } else {
            return redirect('/recomend')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

    public function logout()
    {
        // menghapus history login
        Auth::logout();
        // mengarahkan ke halaman login lagi
        return redirect('/');
    }
    
    public function add(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'isbn' => 'required',
            'sinopsis' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);
        Data::create([
            // 'book_id'=> $ambil,
            'judul'=> $request->judul,
            'penulis'=> $request->penulis,
            'penerbit'=> $request->penerbit,
            'isbn'=> $request->isbn,
            'sinopsis'=> $request->sinopsis,
            'kategori'=> $request->kategori,
            'image'=> $image,
        ]);
        // dd($request->all()); 
        return redirect('/daftar')->with('success', 'berhasil membuat !');
    }

    public function daftar()
    {
        $data = Data::all();
        return view('daftar', compact('data'));     
    }  

    public function admin()
    {
        return view('admin');     
    }   

    public function input()
    {
        $user = User::all();
        return view('input', compact('user'));     
    }

    // public function indexEditData($id){
    //     $user = Activity::where('id',$id)->first();
    //     return view ('')
    //     ->with('data', $data);
    // }'

    public function sampul($id){
        $bukti = Data::latest()->paginate(1);
        $tampilbukti = Data::where($id)->first();
        return view('sampul', compact('bukti', 'tampilbukti'));
    }

    public function upload()
    {
        return view('upload');     
    }  

    // public function category()
    // {
    //     return view('category');     
    // }
    
    public function read()
    {
        return view('read');     
    }

    public function indexEditData()
    {
        $categories = Category::all();
        return view('category', ['categories'=> $categories]);
    }

    public function category()
    {
        return view('category');
    }

    public function kategori()
    {
        return view('kategori');     
    }

    

    public function addcategory(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
        ]);

        Category::create([
            'kategori'=>$request->kategori,
        ]);

        return view('category');     
    }
}


