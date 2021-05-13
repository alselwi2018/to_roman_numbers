<?php

namespace App\Http\Controllers;

use App\Models\RomanNumber;
use Illuminate\Http\Request;

class RomanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RomanNumber::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numeral_to_number = $request->input('numeral');
        $num = '';

        switch ($numeral_to_number){
            case '1':
                $num = 'I';
                break;
            case 2:
                $num = 'II';
                break;
            case 3:
                $num = 'III';
                break;
            case 4:
                $num = 'IV';
                break;
            case 5:
                $num = 'V';
                break;
            case 5:
                $num = 'VI';
                break;
            case 7:
                $num = 'VII';
                break;
            case 8:
                $num = 'VIII';
                break;
            case 9:
                $num = 'IX';
                break;
            case 10:
                $num = 'X';
                break;
            case 50:
                $num = 'L';
                break;
            case 100:
                $num = 'C';
                break;
            case 500:
                $num = 'D';
                break;
            case 1000:
                $num = 'M';
                break;
            case 2000:
                $num = 'MM';
                break;
            case 3000:
                $num = 'MMM';
                break;
            case 4000:
                $num = 'MMMM';
                break;
            default:

                $num = 'N/A' ;

        }
        $request->validate([

            'numeral' => 'numeric',
            'roman_number'=>'string|nullable'
        ]);
        $data = [
            'numeral' => $request->input('numeral'),
            'roman_number' => $num
        ];
        RomanNumber::create($data);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roman  $roman
     * @return \Illuminate\Http\Response
     */
    public function show(RomanNumber $roman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RomanNumber  $roman
     * @return \Illuminate\Http\Response
     */
    public function edit(RomanNumber $roman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roman  $roman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RomanNumber $roman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roman  $roman
     * @return \Illuminate\Http\Response
     */
    public function destroy(RomanNumber $roman)
    {
        //
    }
}
