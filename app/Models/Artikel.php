<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
        'judul', 'slug', 'kategori_id', 'user_id', 'gambar_artikel', 'is_active', 'views', 'body'
    ];

    protected $hidden = [];
    
    /**
     * Get the user that owns the Artikel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
