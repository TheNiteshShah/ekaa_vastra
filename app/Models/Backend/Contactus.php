<?php
            namespace App\Models\Backend;
            use Illuminate\Contracts\Auth\MustVerifyEmail;
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Foundation\Auth\User as Authenticatable;
            use Illuminate\Notifications\Notifiable;
            use Laravel\Sanctum\HasApiTokens;
            use Illuminate\Database\Eloquent\SoftDeletes;
            class Contactus extends Authenticatable
            {
                use HasApiTokens, HasFactory, Notifiable;
                /**
                 * The attributes that are mass assignable.
                 *
                 * @var array<int, string>
                 */
                protected $fillable = [
                	 'name',
                    'message',
                    'phone',
                    'email',
 
                'ip', 'added_by', 'is_active'
                ];
                use SoftDeletes;
                protected $del = ['deleted_at'];
                /**
                 * The attributes that should be hidden for serialization.
                 *
                 * @var array<int, string>
                 */
               
                /**
                 * The attributes that should be cast.
                 *
                 * @var array
                 */
                protected $casts = [
                    'email_verified_at' => 'datetime',
                ];
            }
        