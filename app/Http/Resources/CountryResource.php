<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['messages' => [

            ['text' =>  date("d M Y", strtotime($this['lastUpdate'])) . ' နေ့တွင် ' . $this['confirmed']['value'] . ' ဦး ကူးစက်ခံရပြီး ၊ ' . $this['deaths']['value'] . ' ဦး သေဆုံးခဲ့ပါသည်။ ' . 'ကူးစက်ခံရသူ ' . $this['recovered']['value'] . ' ကျန်းမာရေးပြန်လည် ကောင်းမွန်လာပါသည်။'],


        ]];
    }
}
