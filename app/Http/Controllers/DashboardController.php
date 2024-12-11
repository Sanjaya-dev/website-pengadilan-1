<?php

namespace App\Http\Controllers;

use App\Models\CrimeType;
use App\Models\Defendant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $crimeTypeCount = CrimeType::count();
        $defendantCount = Defendant::count();
        return view('admin.index', compact('crimeTypeCount', 'defendantCount'));
    }
}
