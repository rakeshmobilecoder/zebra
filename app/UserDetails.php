<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
	protected $table = 'user_details';
    protected $foreignkey = 'user_id';
	
    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'family_name',
		'gender',
        'fiscal_code',
        'nation',
        'phone_number',
        'fixed_phone',
        'address',
        'city',
        'postal_zip_code',
        'province',
        'municipality',
        'codeice_email',
        'document_picture_first',
        'document_picture_second',
        'signature_picture',
        'id_picture_front',
        'id_picture_back',
        'picture'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'business_name',
        'vat_id',        
        'id_type',
        'id_number',
        'date_of_issue',
        'expried_date',
        'place_of_issue',
        'place_of_birth'
    ];

}
