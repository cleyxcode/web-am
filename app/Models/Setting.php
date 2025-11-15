<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'ranting_nama',
        'logo',
        'banner_desa',
    ];

    /**
     * Accessor untuk mendapatkan URL logo
     */
    public function getLogoUrlAttribute(): ?string
    {
        if ($this->logo) {
            return asset('storage/' . $this->logo);
        }
        return null;
    }

    /**
     * Accessor untuk mendapatkan URL banner
     */
    public function getBannerUrlAttribute(): ?string
    {
        if ($this->banner_desa) {
            return asset('storage/' . $this->banner_desa);
        }
        return null;
    }

    /**
     * Method untuk mendapatkan atau membuat record tunggal
     */
    public static function getRecord()
    {
        $record = self::first();

        if (!$record) {
            $record = self::create([
                'ranting_nama' => 'Angkatan Muda',
                'logo' => null,
                'banner_desa' => null,
            ]);
        }

        return $record;
    }
}