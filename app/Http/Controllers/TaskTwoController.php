<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class TaskTwoController extends Controller
{
    public function index()
    {
        return view('fronts.task2');
    }

    public function validateData(Request $request)
    {
        $rules = [
            'name' => 'required|min:5|max:50',
            'email' => 'required|email'
        ];
        $message = [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid mail',
            'email.unique' => 'Email must be unique'
        ];

        try {
            $data = $request->validate($rules, $message);
            return response()->json([
                'success' => true,
                'message' => 'Data validated',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'code' => '422',
                'message' => 'The given data is invalid!'
            ]);
        }

    }
}
