<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Clients extends Model
{

    use HasFactory;
    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone_number',
        'company_name',
        'company_address',
        'company_city',
        'company_vat',
    ];




    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
