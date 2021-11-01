<?php

namespace App\Http\Controllers;

use DB;
use App\Events;
use App\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function get_events(Request $request)
    {
        $filter = $request->input("filter");
        $search = $request->input("search");
        $events = Events::where('status', 'ACTIVE')
            ->whereDate('start_time', '>=', $request->input("start"))
            ->whereDate('end_time', '<=', $request->input("end"));

        if ($search != "") {
            $eventids = Events::search($search)->get()->pluck('id');
            $events->whereIn('id', $eventids);
        }
        if ($filter != "") {
            $events->where('category_id', $filter);
        }
        $events = $events->get();

        return response()->json(['events' => $events]);
    }

    public function get_calendar()
    {
        //$events = DB::table('events')->where('status','=','ACTIVE')->latest()->get();
        return view('pages.calendar.index');
    }

    public function get_calendar_event($id, $eventid)
    {
        $eventid = Str::slug(strtolower($eventid), '-');
        $event = Events::where('id', $id)->first();
        if ($event) {
            $category = Categories::where('id', '=', $event->category_id)->first();
            return view('pages.calendar.event', ['id' => $id, 'eventid' => $eventid, 'event' => $event, "category" => $category]);
        } else {
            return view('pages.calendar.missing', ['id' => $id, 'eventid' => $eventid]);
        }
    }

    public function get_calendar_event_slug($eventid)
    {
        $eventid = strtolower($eventid);
        $eventid = Str::slug($eventid, '-');
        $id = Events::where('id', '=', $eventid)->orWhere('slug', '=', $eventid)->first();
        if (!empty($id)) {
            return redirect()->action('CalendarController@get_calendar_event', ['id' => $id->id, 'eventid' => $id->slug]);
        } else {
            return abort(404);
        }
    }

    public function get_calendar_search($search)
    {
        $events = Events::search($search)->get();

        return view('pages.calendar.index', ['query' => $search, 'search' => $events]);
    }

    public function get_calendar_category($search)
    {
        $results = DB::table('events');

        $cat = DB::table('categories');

        $keywords = preg_split('/[\ \n\,]+/', $search);

        $results->where('events.slug', 'LIKE', "%$search%");

        foreach ($keywords as $word) {
            $results2 = $results2->where('events.title', 'LIKE', "%$word%")
                ->orWhere('events.meta_description', 'LIKE', "%$word%")
                ->orWhere('events.meta_keywords', 'LIKE', "%$word%")
                ->orWhere('events.slug', 'LIKE', "%$word%");
        }
        $results = $results2->where('status', '=', 'ACTIVE')->get();

        return view('pages.calendar.index', ['query' => $search, 'results' => $results]);
    }

    public function get_events_index(){
        $categories = Categories::whereIn('slug',['event','webinar']);
        $events = Events::whereIn('category_id',$categories->pluck('id')->toArray());

        $upcomingEvents = (clone $events)->whereDate('start_time','>=', \Carbon\Carbon::now())
        ->whereDate('start_time','<', \Carbon\Carbon::now()->addDays(90))
        ->orderBy('start_time','asc')->paginate(5, ['*'], 'upcoming_events');

        $recentEvents = (clone $events)->whereDate('start_time','<', \Carbon\Carbon::now())->whereDate('start_time','>', \Carbon\Carbon::now()->subDays(90))
        ->orderBy('start_time','desc')->paginate(5, ['*'], 'recent_events');

        return view('pages.events.index', ['recentEvents' => $recentEvents, 'upcomingEvents'=>$upcomingEvents]);
    }
}
