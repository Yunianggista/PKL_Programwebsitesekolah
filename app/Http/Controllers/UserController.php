<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TambahUser;
use App\Http\Requests\EditUser;
use App\Http\Requests\ProfilAdmin;
use App\Http\Request\ProfilMahasiswa;
use App\User;
use App\Dosen;
use App\Report;
use Auth;
use Alert;
use App\BiodataMahasiswa;

class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }        
    //Fungsi untuk memanggil form tambah mahasiswa
    public function addUser()
    {
        return view ('user.tambahUser');
    }
    //Fungsi untuk menyimpan tambah mahasiswa
    public function saveUser(TambahUser $request){

        $user = new User;

        $user->name = $request->name;
        $user->role = 'siswa';
        $user->email = $request->email;
        $user->password = bcrypt ('123456');
        $user->save();

        Alert::success('Pengguna Berhasil Ditambah', 'Sukses');
        return redirect('/tampil_user');
    }
    //Fungsi untuk menampilkan
    public function index()
    {
    	$data=User::where('role','=','siswa')->get();
    	return view ('user.tampilUser')->with('user',$data);
    }

    public function editUser($id)
    {
        $data= User::find($id);
        return view ('user.editUser')
        ->with('user',$data);
    }

    public function updateUser (TambahUser $request, $id)
    {
        $user=User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
            Alert::success('Data Pengguna Berhasil Diubah', 'Sukses');
            return redirect('tampil_user');
    }

    public function deleteUser($id)
    {
        $user= User::findOrfail($id);
            $user -> delete();
            Alert::success('Data Pengguna berhasil dihapus', 'Sukses');
        return redirect('/tampil_mahasiswa');
    }

    public function reportUser($id)
    {
        $data= User::find($id);
        return view ('user.addReport')
        ->with('user',$data);
    }
    public function saveReport (Request $request, $id)
    {
        $data = new Report;
        $data->id_user = $id;
        $data->nama = $request->name;
        $data->tanggal = $request->tanggal;
        $data->point = $request->point;
        $data->save();
            Alert::success('Data Pelanggaran Berhasil Disimpan', 'Sukses');
            return redirect('tampil_user');
    }

    public function editReport($id)
    {
        $data= Report::find($id);
        return view ('user.editReport')
        ->with('data',$data);
    }
    public function updateReport (Request $request, $id)
    {
        $data = Report::find($id);
        $data->nama = $request->name;
        $data->tanggal = $request->tanggal;
        $data->point = $request->point;
        $data->save();
            Alert::success('Data Pelanggaran Berhasil Diubah', 'Sukses');
            return redirect('detail_report/'.$data->id_user);
    }

      public function deleteReport($id)
    {
        $data= Report::findOrfail($id);
        $data-> delete();
         Alert::success('Data Pelanggaran dihapus', 'Sukses');
        return redirect('detail_report/'.$data->id_user);
    }

    public function detailReport ( $id)
    {
    
        $data= User::find($id);
        $pelanggaran= Report::where('id_user',$id)->get();
        return view ('user.detailReport')
        ->with('data',$pelanggaran)
        ->with('user',$data);
    }

    public function detailReport2 ()
    {
    
        $pelanggaran= Report::where('id_user',Auth::User()->id)->get();
        return view ('detailReport')
        ->with('data',$pelanggaran);
    }



    public function editProfilAdmin($id)
    {
        $data= User::find($id);
        return view ('user.profilAdmin')->with('user',$data);
    }

    public function updateProfilAdmin(ProfilAdmin $request,$id)
    {
        $data= User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        if($request->password == ''){
        }
        else{
            $data->password = bcrypt ($request->password);
        }
        $data->save();
        Alert::success('Profil berhasil diubah', 'Sukses');
        return redirect('tampil_dashboardAdmin');
    }

    public function editProfilMahasiswa($id)
    {
        $data= User::find($id);
        return view ('user.profilMahasiswa')->with('user',$data);
    }

    public function updateProfilMahasiswa(profilMahasiswa $request, $id)
    {
        $data= User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        if($request->password ==''){
        }
        else{
            $data->password = bcrypt ($request->password);
        }
        $data->save();
        Alert::success('Profil berhasil diubah', 'Sukses');
        return redirect('tampil_dashboardMahasiswa');
    }



    public function resetPassword($id)
    {
        $data =User::find($id);
        $data->password=bcrypt('passwordbaru');
        $data->save();
        if($data->role == 'petugasbumdes'){
            Alert::success('Password telah berhasil direset, Password : passwordbaru', 'Sukses');
             return redirect('/tampil_petugas');
        } else {
            Alert::success('Password telah berhasil direset, Password : passwordbaru', 'Sukses');
             return redirect('/tampil_petugasToko');
         }
    }

}
