<?php

namespace App\Http\Controllers;

use App\Models\Chapati;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $latestEntries = Chapati::latest()->take(5)->get();
        $totalChapatis = Chapati::sum('number_input');
        $streak = $this->calculateStreak();

        return view('dashboard', compact('latestEntries', 'totalChapatis', 'streak'));
    }

    private function calculateStreak()
    {
        $entries = Chapati::latest()->get();
        $today = Carbon::today();

        $currentStreak = 0;
        $streak = 0;
        $uniqueDates = [];

        foreach ($entries as $entry) {

            $entryDate = Carbon::parse($entry->created_at)->toDateString();
            if (!in_array($entryDate, $uniqueDates)){
                if ($entryDate == $today->toDateString()) {
                    $currentStreak++;
                    $uniqueDates[] = $entryDate;
                } elseif ($entryDate == $today->subDay()->toDateString()) {

                    $currentStreak++;
                    $uniqueDates[] = $entryDate;
                } else {

                    $currentStreak = 0;
                }


                $streak = max($streak, $currentStreak);
            }

        }

        return $streak;
    }
}
