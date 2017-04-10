<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function strpos;

class ChartOfAccount extends Model
{
    protected $fillable = [
        'id',
        'company_id',
        'description',
        'type_code',
    ];

    public $timestamps = false;

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
