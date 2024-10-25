<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'department',
        'status',
    ];

    const STATUS_PENDING = 'на рассмотрении';
    const STATUS_ACCEPTED = 'принято';
    const STATUS_REJECTED = 'отклонено';

    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case self::STATUS_ACCEPTED:
                return 'Принято';
            case self::STATUS_REJECTED:
                return 'Отклонено';
            default:
                return 'На рассмотрении';
        }
    }
}
