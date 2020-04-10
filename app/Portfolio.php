<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    public function filter()
    {
        return $this->beLongsTo('Corp\Filter','filter_alias','alias');
    }
}
