<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use Carbon\Carbon;

class QuestionCompositeResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'result'=>[
                    "itemsList"=>$this->question()->where('type',3)->get(),
                    "nextPageToken"=>$this->nextPageToken,
                    "prevPageToken"=>$this->prevPageToken,
                    "pageInfo"=>[
                         "totalResults"=>5,
                         "resultPerPage"=>10,
                    ]
                ],
                'code'=>1,
                'message'=>'问答列表获取成功',
                'time'=>Carbon::now()->toDateTimeString()
            ];
    }
}
