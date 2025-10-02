<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class JobController extends Controller
{
    //
    public function index()
    {
        // $jobs = Job::all();
        // $jobs = Job::with('employer')->get(); // Eager load the employer relationship, this is lazy loading
        // $jobs = Job::with('employer')->paginate(3);
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
        // $jobs = Job::with('employer')->cursorPaginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        // $attributes = request()->validate([
        //     'title' => 'required|max:255|min:3',
        //     'description' => 'min:3',
        //     'company' => 'required|string',
        //     'location' => 'string',
        //     // 'employer_id' => 'required|integer',
        //     'salary' => 'required|integer'
        // ]);

        request()->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'min:3',
            'company' => 'required|string',
            'location' => 'string',
            // 'employer_id' => 'required|integer',
            'salary' => 'required'
        ]);

        // Eloquent way
        // $job = new Job();
        // $job->title = $attributes['title'];
        // $job->description = $attributes['description'];
        // $job->employer = $attributes['employer'];
        // $job->salary = $attributes['salary'];
        // $job->save();

        // Mass assignment way
        // Job::create($attributes);
        Job::create([
            'title' => request('title'),
            'company' => request('company'),
            'location' => request('location'),
            'description' => request('description'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }


    public function edit(Job $job)
    {
        // $job = Job::find($id);
        // dd($job);
        if(Auth::guest()){
            return redirect('/login');
        }

        if($job->employer->user->is(Auth::user()) === false){
            abort(403);
        }

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        //
        request()->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'min:3',
            'company' => 'required|string',
            'location' => 'string',
            // 'employer_id' => 'required|integer',
            'salary' => 'required'
        ]);
        //authorize(On hold...)

        //update the job
        // $job = Job::findOrFail($id);

        //and persist
        // $job->title = request('title');
        // $job->description = request('description');
        // $job->company = request('company');
        // $job->location = request('location');
        // $job->salary = request('salary');
        // $job->save();
        //or the second method
        $job->update([
            'title' => request('title'),
            'company' => request('company'),
            'location' => request('location'),
            'description' => request('description'),
            'salary' => request('salary'),
        ]);

        //redirect to the job page
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        //authorize(On hold...)

        //delete the job
        // $job = Job::findOrFail($id);
        $job->delete();
        //or
        // Job::findOrFail($id)->delete();
        //redirect
        return redirect('/jobs');
    }
}
