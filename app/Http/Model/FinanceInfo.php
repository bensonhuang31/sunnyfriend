<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class FinanceInfo extends Model
{
    protected $table='financeinfo';
    protected $primaryKey='id';

    protected $fillable = [
       'Year', 'CHFileName', 'CHFilePath', 'ENFileName', 'ENFilePath'
    ];
}
