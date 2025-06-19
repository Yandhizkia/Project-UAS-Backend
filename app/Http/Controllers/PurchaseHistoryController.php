use App\Models\PurchaseHistory;
use Illuminate\Support\Facades\Auth;

class PurchaseHistoryController extends Controller
{
    public function index()
    {
        $histories = PurchaseHistory::where('user_id', Auth::id())
                        ->orderBy('purchased_at', 'desc')
                        ->get();

        return view('purchase_histories.index', compact('histories'));
    }
}
