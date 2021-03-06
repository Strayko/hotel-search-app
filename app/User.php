<?php

namespace App;

use App\Notifications\PasswordReset;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'is_active', 'photo_id', 'package_id', 'package_expiry'
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

	public function sendPasswordResetNotification($token)
	{
		$this->notify(new PasswordReset($token));
	}

    public function role() {
    	return $this->belongsTo('App\Role');
    }

    public function photo() {
    	return $this->belongsTo('App\Photo');
    }

//    public function setPasswordAttribute($password) {
//    	if(!empty($password)) {
//    		$this->attribute['password'] = bcrypt($password);
//	    }
//    }

	public function isAdmin() {
    	if($this->role->name == "administrator" && $this->is_active == 1) {
    		return true;
	    }
	    return false;
	}

    public function isProto() {
        if($this->role->name == "proto" && $this->is_active == 1) {
            return true;
        }
        return false;
    }

	public function isSilver() {
    	if($this->package->name == "Silver" && $this->is_active == 1) {
			return true;
	    }
	    return false;
	}

	public function isPlatinium() {
		if($this->package->name == "Platinium" && $this->is_active == 1) {
			return true;
		}
		return false;
	}

	public function isFrei() {
	    if($this->package->name == "Frei" && $this->is_active == 1) {
	        return true;
        }
	    return false;
    }

	public function isGold() {
		if($this->package->name == "Gold" && $this->is_active == 1) {
			return true;
		}
		return false;
	}

	public function isAuthor() {
		if($this->role->name == "author" && $this->is_active == 1) {
			return true;
		}
		return false;
	}
//
//	public function isSilver() {
//    	if($this->package->name == "Silver" && $this->is_active == 1) {
//    		return true;
//	    }
//	    return false;
//	}
//
//	public function isBronze() {
//		if($this->package->name == "Bronze" && $this->is_active == 1) {
//			return true;
//		}
//		return false;
//	}

	public function restaurants() {
    	return $this->hasMany('App\Restaurant');
	}

	public function package() {
		return $this->belongsTo('App\Package');
	}

	public function locations() {
    	return $this->belongsTo('App\Location');
	}

	public function comments() {
    	return $this->hasMany('App\Comment');
	}

	public function events() {
	    return $this->hasMany('App\Event');
    }

    public function blog() {
	    return $this->hasMany('App\Blog');
    }

    public function actions() {
	    return $this->hasMany('App\Actions');
    }

}