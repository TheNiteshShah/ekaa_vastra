<?php
            namespace App\Models\Backend;
            use Illuminate\Contracts\Auth\MustVerifyEmail;
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Foundation\Auth\User as Authenticatable;
            use Illuminate\Notifications\Notifiable;
            use Laravel\Sanctum\HasApiTokens;
            use Illuminate\Database\Eloquent\SoftDeletes;
            class Institute extends Authenticatable
            {

                protected $table='institute';
                use HasApiTokens, HasFactory, Notifiable;
                /**
                 * The attributes that are mass assignable.
                 *
                 * @var array<int, string>
                 */
                protected $fillable = [
                	 'name',
	 'address',
	 'city',
	 'state',
	 'pincode',
	 'category_id',
	 'stream_id',
	 'image',
	 'phone',
	 'fees',
	 'gender',
	 'description',
	 'short description',
	 'fees_structure',
	 'medium_id',
	 'heading_one',
	 'text_one',
	 'heading_two',
	 'text_two',
	 'heading_three',
	 'text_three',
	 'heading_four',
	 'text_four',
 
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
        