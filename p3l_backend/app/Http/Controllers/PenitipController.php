<?php

namespace App\Http\Controllers;

use App\Models\Penitip;
use Illuminate\Http\Request;

class PenitipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Penitip::all(),
            'message' => 'Data Penitip berhasil ditampilkan'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_penitip' => 'required|string|max:255',
            'email_penitip' => 'required|email|max:255|unique:penitips,email_penitip',
            'username_penitip' => 'required|string|max:255|unique:penitips,username_penitip',
            'password_penitip' => 'required|string|min:8',
            'nik_penitip' => 'required|string|max:14|unique:penitips,nik_penitip',
            'tanggal_lahir_penitip' => 'required|date',
            'alamat_penitip' => 'required|string|max:255',
            'no_telp_penitip' => 'required|string|max:15',
            'tanggal_bergabung_penitip' => 'required|date',
            'saldo_penitip' => 'required|numeric|min:0',
            'poin_penitip' => 'required|integer|min:0',
            'total_penjualan_penitip' => 'required|integer|min:0',
            'badge_penitip' => 'required|string|max:255',
        ]);

        $penitip = Penitip::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $penitip,
            'message' => 'Penitip berhasil ditambahkan'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penitip = Penitip::find($id);

        if (!$penitip) {
            return response()->json([
                'success' => false,
                'message' => 'Penitip tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $penitip,
            'message' => 'Penitip retrieved successfully'
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penitip = Penitip::find($id);

        if (!$penitip) {
            return response()->json([
                'success' => false,
                'message' => 'Penitip tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'nama_penitip' => 'sometimes|required|string|max:255',
            'email_penitip' => 'sometimes|required|email|max:255|unique:penitips,email_penitip,' . $id,
            'username_penitip' => 'sometimes|required|string|max:255|unique:penitips,username_penitip,' . $id,
            'password_penitip' => 'sometimes|required|string|min:8',
            'nik_penitip' => 'sometimes|required|string|max:14|unique:penitips,nik_penitip,' . $id,
            'tanggal_lahir_penitip' => 'sometimes|required|date',
            'alamat_penitip' => 'sometimes|required|string|max:255',
            'no_telp_penitip' => 'sometimes|required|string|max:15',
            'tanggal_bergabung_penitip' => 'sometimes|required|date',
            'saldo_penitip' => 'sometimes|required|numeric|min:0',
            'poin_penitip' => 'sometimes|required|integer|min:0',
            'total_penjualan_penitip' => 'sometimes|required|integer|min:0',
            'badge_penitip' => 'sometimes|required|string|max:255',
        ]);

        $penitip->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $penitip,
            'message' => 'Penitip berhasil diperbarui'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penitip = Penitip::find($id);

        if (!$penitip) {
            return response()->json([
                'success' => false,
                'message' => 'Penitip tidak ditemukan'
            ], 404);
        }

        $penitip->delete();

        return response()->json([
            'success' => true,
            'message' => 'Penitip berhasil dihapus'
        ], 200);
    }
}
