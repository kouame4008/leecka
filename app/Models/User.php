<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuth;
use Laravel\Passport\HasApiTokens;

class User extends Model implements Authenticatable
{
    use HasFactory, HasApiTokens, BasicAuth;


    /**
     * Champs de la table users
     * 
     * Lister des champs modifiable depuis le backend
     * 
     * @var array
     */

    protected $fillable = [

        'nom_user',
        'prenom_user',
        'email_user',
        'password_user'

    ];

    /**
     * Données a cacher.
     *
     * @return array
     * 
     */

    protected $hidden = [

        'password_user'
        
    ];


    /**
     * Le libelle du champs mot de passe dans la base de donnée.
     *
     * @return string
     * 
     */
    
    public function getAuthPassword()
    {
        return $this->password_user;
    }




    
}
