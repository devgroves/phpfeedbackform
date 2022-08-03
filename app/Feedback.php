<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $feedbackdetails = [
        'name',
        'nature_of_visit',
        'responding_customer_needs_response',
        'responding_customer_needs_comments',
        'providing_accessible_service_response',
        'providing_accessible_service_comments',
        'accessing_products_service_problem_response',
        'accessing_products_service_problem_commentss',
        'other_comments'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
