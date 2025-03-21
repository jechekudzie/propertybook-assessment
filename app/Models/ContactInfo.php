<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'message'];
    protected $table = 'contact_info';

    public function getContactInfo()
    {
        return $this->all();
    }

    public function addContactInfo($data)
    {
        return $this->create($data);
    }
}
