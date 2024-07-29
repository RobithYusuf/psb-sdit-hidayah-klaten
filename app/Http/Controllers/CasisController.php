<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\casis;
use App\Models\tahunajar;
use App\Models\pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class casisController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = casis::selectRaw("tb_casis.id_casis, tb_casis.nik, tb_casis.created_at, tb_casis.nama, tb_casis.jenis_kelamin, tb_casis.nama_ortu, tb_casis.alamat, tb_casis.no_hp, tb_pendaftaran.kk,
                                     tb_pendaftaran.akte, tb_pendaftaran.foto, users.name")
            ->join('tb_pendaftaran', 'tb_pendaftaran.casis_id', '=', 'tb_casis.id_casis')
            ->join('users', 'users.id', '=', 'tb_casis.user_id');

        if ($search) {
            $query->where('tb_casis.nama', 'like', '%' . $search . '%');
        }

        $data = $query->orderBy('tb_casis.created_at', 'desc')->get();

        return view('casis.index', compact('data', 'search'));
    }

    public function detail($id)
    {
        $casis = casis::where('id_casis', $id)->firstOrFail();
        return view('casis.detail', compact('casis'));
    }

    public function edit($id)
    {
        // Lakukan join antara tabel casis dan pendaftaran
        $casis = Casis::join('tb_pendaftaran', 'tb_casis.id_casis', '=', 'tb_pendaftaran.casis_id')
            ->select('tb_casis.*', 'tb_pendaftaran.akte', 'tb_pendaftaran.kk', 'tb_pendaftaran.foto')
            ->where('tb_casis.id_casis', $id)
            ->firstOrFail();

        return view('casis.edit', compact('casis'));
    }

    public function update(Request $request, $id)
    {
        $casis = casis::where('id_casis', $id)->first();
        if (!$casis) {
            return redirect()->route('casis.index')->with('error', 'Data not found.');
        }

        $casis->nik = $request->nik;
        $casis->nama = $request->nama;
        $casis->tempat_lahir = $request->tempat_lahir;
        $casis->tanggal_lahir = $request->tanggal_lahir;
        $casis->jenis_kelamin = $request->jenis_kelamin;
        $casis->jml_saudara = $request->jml_saudara;
        $casis->nama_ortu = $request->nama_ortu;
        $casis->pendidikan_ortu = $request->pendidikan_ortu;
        $casis->tempat_lahir_ortu = $request->tempat_lahir_ortu;
        $casis->tanggal_lahir_ortu = $request->tanggal_lahir_ortu;
        $casis->no_hp = $request->no_hp;
        $casis->alamat = $request->alamat;
        $casis->pekerjaan_ortu = $request->pekerjaan_ortu;
        $casis->gaji_ortu = $request->gaji_ortu;
        $casis->save();

        // Redirect dengan pesan sukses
        return redirect()->route('indexcasis')->with('success', 'Data berhasil diperbarui.');
    }

    public function form()
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // Load the related panitia data
        $user->load('casis.pendaftaran');

        // $user->load('pendaftaran');

        // Pass the user data to the view
        return view('casis.data', compact('user'));
    }

    public function daftar()
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // Load the related panitia data
        $user->load('casis.pendaftaran');

        // $user->load('pendaftaran');

        // Pass the user data to the view
        return view('casis.daftar', compact('user'));
    }

    public function proses(Request $request)
    {
        try {
            // Validasi input
            $validatedData = $request->validate([
                'nik' => 'required|string|max:10',
                'nama' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'tanggal_lahir' => 'required|date',
                'alamat' => 'required|string',
                'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
                'jml_saudara' => 'required|integer',
                'nama_ortu' => 'required|string|max:255',
                'tempat_lahir_ortu' => 'required|string|max:255',
                'tanggal_lahir_ortu' => 'required|date',
                'no_hp' => 'required|string|max:15',
                'pendidikan_ortu' => 'required|string',
                'gaji_ortu' => 'required|numeric',
                'pekerjaan_ortu' => 'required|string',
                'akte' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
                'kk' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
                'foto' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            ]);

            // Mendapatkan tahun ajar yang berlangsung
            $tahunAjarBerlangsung = tahunajar::where('status', 'Berlangsung')->firstOrFail();

            // Menyimpan atau memperbarui data casis
            $casis = casis::updateOrCreate(
                ['user_id' => Auth::id()],
                $validatedData
            );

            // Menyiapkan data pendaftaran
            $pendaftaranData = [
                'casis_id' => $casis->id_casis,
                'ajar_id' => $tahunAjarBerlangsung->id_ajar,
                'status' => 'Pending',
                'tgl_pendaftaran' => now(),
            ];

            // Proses upload file
            $fileFields = ['akte', 'kk', 'foto'];
            foreach ($fileFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $path = $file->storeAs('public/berkas', $filename);
                    $pendaftaranData[$field] = 'berkas/' . $filename;
                }
            }

            // Menyimpan atau memperbarui data pendaftaran
            $pendaftaran = pendaftaran::updateOrCreate(
                ['casis_id' => $casis->id_casis],
                $pendaftaranData
            );

            return redirect('/beranda/form')->with('success', 'Data Berhasil Disimpan.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Terjadi kesalahan pada input data. Silakan periksa kembali.');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()
                ->with('error', 'Tidak ada tahun ajar yang berlangsung.')
                ->withInput();
        } catch (\Exception $e) {
            \Log::error('Error in proses method: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.')
                ->withInput();
        }
    }

    public function deletecasis(Request $request, $id)
    {
        $casis = casis::findOrFail($id);

        // Dapatkan user_id dari data casis
        $user_id = $casis->user_id;

        // Hapus data casis
        $casis->delete();

        // Hapus data user berdasarkan user_id
        User::findOrFail($user_id)->delete();
        return redirect('/data/casis')->with('delete', 'Data Berhasil Dihapus');
    }
}
