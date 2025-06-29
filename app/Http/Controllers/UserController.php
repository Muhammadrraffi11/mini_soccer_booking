<?php
namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Field;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function dashboard() {
    if (session('user_role') !== 'user') return redirect('/login');

    $userId = session('user_id');

    $fields = Field::all();
    $bookings = Booking::where('user_id', $userId)->get();
    $jumlahBooking = $bookings->count();
    $jumlahPending = $bookings->where('status', 'pending')->count();

    return view('user.dashboard', compact('fields', 'bookings', 'jumlahBooking', 'jumlahPending'));
}

    public function book(Request $request) {
        $request->validate([
            'field_id' => 'required|exists:fields,id',
            'booking_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
        ]); 
        Booking::create([
            'user_id' => session('user_id'),
            'field_id' => $request->field_id,
            'booking_date' => $request->booking_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'status' => 'pending',
        ]);
        return redirect('/user/dashboard')->with('success', 'Booking berhasil dikirim.');
    }

    public function cancel($id) {
        Booking::where('id', $id)->update(['status' => 'cancelled']);
        return back();
    }
}

