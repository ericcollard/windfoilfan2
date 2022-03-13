<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','device_id','title','test_equipment','body','test_duration','test_conditions','test_place','created_at'];

    protected $guarded = [];

    protected $with = ['owner','device']; // à chaque fois qu'on fera une Query sur Report, le owner sera récupéré en même temps.

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($review)
        {
            $review->statistics->each->delete();
        });

    }

    /** Database Models Relations */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function statistics()
    {
        return $this->morphMany(Statistic::class, 'statisticable');
    }

    public function formatted_body() {

        preg_match_all('~\[quote="(.*?)"\]~', $this->body, $matches1, PREG_OFFSET_CAPTURE );
        preg_match_all('~\[/quote\]~', $this->body, $matches2, PREG_OFFSET_CAPTURE );
        if (count($matches1) == 0 and count($matches2) == 0)
            return $this->body; // aucune quote

        // il y a des matches

        if ((count($matches1) > 0 and count($matches2) == 0) or (count($matches1) == 0 and count($matches2) > 0))
            return $this->body; // anomalie

        if (count($matches1[0]) != count($matches2[0]) )
            return $this->body; // anomalie

        // body convenablement formé
        $html = $this->body;

        foreach ($matches1[0] as $key => $enterMatch)
        {
            $newStr = "<div class='citation'><div class='citation_author'>".$matches1[1][$key][0]." a écrit:</div><div class='citation_body'>";
            $html = str_replace($enterMatch[0], $newStr  , $html);
        }
        foreach ($matches2[0] as $outMatch)
        {
            $html = str_replace($outMatch[0], "</div></div>", $html);
        }

        //dd($matches1, $matches2);

        return $html;
    }

}
