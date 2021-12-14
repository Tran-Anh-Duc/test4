<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $data)
 * @method static findOrFail($id)
 * @method static where(string $string)
 * * @method static find(mixed $input)
 */
class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'role','name','sex','phone','numbercard','email','address',
    ];
}
