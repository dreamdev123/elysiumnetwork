<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\FoundersLaunch
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string|null $ip
 * @property string|null $iso_code
 * @property string|null $country
 * @property string|null $city
 * @property string|null $state
 * @property string|null $state_name
 * @property string|null $postal_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereIsoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereStateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FoundersLaunch whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FoundersLaunch extends Model
{
    protected $table = 'founders_launch';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'ip', 'iso_code', 'country', 'city', 'state', 'state_name', 'postal_code'
    ];
}
