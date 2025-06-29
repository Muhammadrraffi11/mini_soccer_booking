<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Field;
use App\Models\User;


class AdminController extends Controller
{
   public function dashboard()
    {
        if (session('user_role') !== 'admin') return redirect('/login');

        $totalBooking = Booking::count();
        $totalUser = User::count();
        $bookingPending = Booking::where('status', 'pending')->count();

        $bookings = Booking::with('user')->latest()->get(); 

        return view('admin.dashboard', compact(
            'totalBooking',
            'totalUser',
            'bookingPending',
            'bookings' 
        ));
    }

    public function dataBooking()
    {
        $bookings = Booking::with('user')->latest()->get();
        return view('admin.data-booking', compact('bookings'));
    }

   public function approve($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'Approved';
        $booking->save();

        return redirect('/admin/data-booking')->with('success', 'Booking berhasil disetujui.');
    }

    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'Cancelled';
        $booking->save();

        return redirect('/admin/data-booking')->with('success', 'Booking berhasil dibatalkan.');
    }

    public function dataUser()
    {
        $users = User::where('role', 'user')->get(); // filter agar admin tidak muncul
        return view('admin.data-user', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.data-user')->with('success', 'User berhasil dihapus');
    }

   public function laporan()
    {
        $users = User::all();
        $bookings = Booking::with('user')->get(); // pastikan relasi 'user' ada di model Booking
        $admin = session('admin'); // ambil admin dari session login

        return view('admin.laporan', compact('users', 'bookings', 'admin'));
    }

}

