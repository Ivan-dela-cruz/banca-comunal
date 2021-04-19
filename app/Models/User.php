<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $guard_name = 'web';
    protected $fillable = [
        'name',
        'last_name',
        'url_image',
        'phone',
        'address',
        'email',
        'password',
        'photo',
        'gender',
        'active',
        'status',
        'dato1',
        'dato2',
        'dato3',
        'valor1',
        'valor2',
        'valor3'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that appends to returned entities.
     *
     * @var array
     */
    protected $appends = ['photo'];

    /**
     * The getter that return accessible URL for user photo.
     *
     * @var array
     */
    public function getPhotoUrlAttribute()
    {
        if ($this->foto !== null) {
            return url('media/user/' . $this->id . '/' . $this->foto);
        } else {
            return url('media-example/no-image.png');
        }
    }

    public function events() {
        return $this->hasMany(Event::class);
    }
}
