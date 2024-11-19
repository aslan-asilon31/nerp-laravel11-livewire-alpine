<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Resources\EmployeeResource;
use App\Models\User;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        // Cek apakah pengguna sudah login
        if (!Auth::check()) {
        return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Jika sudah login, kembalikan informasi pengguna
        return new EmployeeResource(Auth::user());
    }
    
    public function index(Request $request)
    {
        $startTime = microtime(true); // Mulai waktu

        try {
            $users = User::all();

            $timeElapsed = microtime(true) - $startTime; // Hitung waktu yang telah berlalu

            return EmployeeResource::collection($users)->additional([
                'meta' => [
                    'status' => 'success',
                    'api_key' => $request->header('X-API-Key'),
                    'authentication_token' => $request->user() ? $request->user()->createToken('token_name')->plainTextToken : null,
                    'time_elapsed' => number_format($timeElapsed, 2) . ' seconds', // Format waktu
                    'message' => 'Data retrieved successfully', // Pesan sukses
                    'error' => null, // Tidak ada error
                ]
            ]);
        } catch (\Exception $e) {
            // Log error jika terjadi
            Log::error('Error retrieving employees: ' . $e->getMessage());

            return response()->json([
                'meta' => [
                    'status' => 'error',
                    'message' => 'Failed to retrieve data',
                    'error' => $e->getMessage(),
                    'time_elapsed' => number_format(microtime(true) - $startTime, 2) . ' seconds',
                ]
            ], 500); // Mengembalikan status 500 jika terjadi kesalahan
        }
    }
}
