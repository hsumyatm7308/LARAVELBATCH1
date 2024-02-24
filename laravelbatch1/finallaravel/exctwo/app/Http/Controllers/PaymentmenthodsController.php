<?php

namespace App\Http\Controllers;

use App\Models\Paymentmethod;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

use App\Models\Status;

class PaymentmenthodsController extends Controller
{

    public function index()
    {
        $paymentmethods = Paymentmethod::all();
        $statuses = Status::whereIn('id', [3, 4])->get();
        return view('paymentmethods.index', compact('paymentmethods', 'statuses'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50|unique:paymentmethods',

            'status_id' => 'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $paymentmethod = new Paymentmethod();

        $paymentmethod->name = $request['name'];
        $paymentmethod->slug = Str::slug($request['name']);
        $paymentmethod->status_id = $request['status_id'];
        $paymentmethod->user_id = $user_id;


        $paymentmethod->save();
        return redirect(route('paymentmethods.index'));
    }


    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => ['required', 'max:50', 'unique:paymentmethods,name,' . $id],
            'status_id' => ['required', 'in:3,4']
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $paymentmethod = Paymentmethod::findOrFail($id);

        $paymentmethod->name = $request['name'];
        $paymentmethod->slug = Str::slug($request['name']);
        $paymentmethod->status_id = $request['status_id'];
        $paymentmethod->user_id = $user_id;

        $paymentmethod->save();
        return redirect(route('paymentmethods.index'));
    }


    public function destroy(Paymentmethod $paymentmethod)
    {
        try {

            if ($paymentmethod) {
                $paymentmethod->delete();
                return response()->json(["status" => "okay", "message" => 'Delete Successfully']);
            }
            return response()->json(["status" => "fail", "message" => 'No Data Found']);

        } catch (Exception $e) {
            Log::error($e->getMessage());

            // Return error response
            return response()->json([
                "status" => "failed",
                "message" => $e->getMessage()
            ]);
        }
    }



    // added method 

    public function paymentmethodstatus(Request $request)
    {
        $paymentmethod = Paymentmethod::findOrFail($request['id']);
        $paymentmethod->status_id = $request['status_id'];
        $paymentmethod->save();

        return response()->json(["success" => "Status Change Successfully"]);
    }
}
