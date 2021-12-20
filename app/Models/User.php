<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'acls',
        'added_by',
        'workspace_id',
        'youtube_token',
        'vimeo_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function workspaces()
    {
        return $this->hasMany(Workspace::class)
            ->orderBy('id', 'DESC');
    }

    public static function resellerUsers()
    {
        return User::where([
            ['added_by', Auth::user()->id],
            ['workspace_id', null]
        ])->get();
    }

    public function myTemplates()
    {
        return Template::where('template_owner', Auth::user()->id)->get();
    }

    public function myPages()
    {
        return $this->hasMany(Page::class)->orderBy('id', 'DESC');
    }
}
