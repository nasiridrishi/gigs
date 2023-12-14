<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model {
    use HasFactory;

    public static function find($id) {
        return Listing::all()->firstWhere('id', $id);
    }
}
