<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Street;
use App\Models\County;
use App\Models\Province;

class ApiController extends Controller
{
    //
    public function county()
    {
        $id = request()->input('id');
        $mode = request()->input('mode') ?? 'county';

        if (!isset($id)) {
            return County::all();
        }

        switch ($mode) {
            case 'county':
                return County::where('county_id', '=', $id)->first();

            case 'districts':
                return District::where('county_id', '=', $id)->get();
        }
    }

    public function province()
    {
        $id = request()->input('id');
        $mode = request()->input('mode') ?? 'city';
        if (!isset($id)) {
            return Province::all();
        }

        switch ($mode) {
            case 'city':
                return Province::where('province_id', '=', $id)->first();

            case 'counties':
                return County::where('province_id', '=', $id)->get();
        }
    }

    public function street()
    {
        $id = request()->input('id');

        if (!isset($id)) {
            return Street::paginate(10);
        }

        return Street::where('street_id', '=', $id)->first();
    }

    public function district()
    {
        $id = request()->input('id');
        $mode = request()->input('mode') ?? 'district';

        if (!isset($id)) {
            return District::all();
        }

        switch ($mode) {
            case 'district':
                return District::where('district_id', '=', $id)->first();

            case 'streets':
                return Street::where('district_id', '=', $id)->get();
        }
    }
}