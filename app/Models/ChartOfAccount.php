<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChartOfAccount extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'company_id',
        'description',
        'type_code',
    ];

    public $incrementing = false;

    /**
     * The id inputted by the user
     *
     * @return string
     */
    public function rawId()
    {
        $firstDash = strpos($this->id, '-') + 1;

        return substr($this->id, $firstDash);
    }
}
