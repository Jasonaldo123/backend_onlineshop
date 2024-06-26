[16.10, 19/6/2024] Guru Tik Sekolah: <?php

namespace App\Http\Controllers\Admin;

use App\Models\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //count invoice
        $pending = Invoice::where('status', 'pending')->count();
        $success = Invoice::where('status', 'success')->count();
        $expired = Invoice::where('status', 'expired')->count();
        $failed  = Invoice::where('status', 'failed')->count();

        //year and month
        $year   = date('Y');
        $month  = date('m');
		
        //statistic revenue
        $revenueMonth = Invoice::where('status', 'success')->whereMonth('created_at', '=', $month)->whereYear('created_at', $year)->sum('grand_total');
        $revenueYear  = Invoice::where('status', 'success')->whereYear('created_at', $year)->sum('grand_total');
        $revenueAll   = Invoice::where('status', 'success')->sum('grand_total');

        return view('admin.dashboard.index', compact('pending', 'success', 'expired', 'failed', 'revenueMonth', 'revenueYear', 'revenueAll'));
    }
}
Di atas, pertama kita import model Invoi
[16.10, 19/6/2024] Guru Tik Sekolah: <?php

namespace App\Http\Controllers\Admin;

use App\Models\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //count invoice
        $pending = Invoice::where('status', 'pending')->count();
        $success = Invoice::where('status', 'success')->count();
        $expired = Invoice::where('status', 'expired')->count();
        $failed  = Invoice::where('status', 'failed')->count();

        //year and month
        $year   = date('Y');
        $month  = date('m');
		
        //statistic revenue
        $revenueMonth = Invoice::where('status', 'success')->whereMonth('created_at', '=', $month)->whereYear('created_at', $year)->sum('grand_total');
        $revenueYear  = Invoice::where('status', 'success')->whereYear('created_at', $year)->sum('grand_total');
        $revenueAll   = Invoice::where('status', 'success')->sum('grand_total');

        return view('admin.dashboard.index', compact('pending', 'success', 'expired', 'failed', 'revenueMonth', 'revenueYear', 'revenueAll'));
    }
}