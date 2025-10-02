<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model{

    use HasFactory, Notifiable;
    protected $table = 'job_listings';

    // protected $fillable = [
    //     'title',
    //     'company',
    //     'location',
    //     'salary',
    //     'description',
    //     'employer_id'
    // ];

    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tag', 'job_listing_id', 'tag_id');
    }

}