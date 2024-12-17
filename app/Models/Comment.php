<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
         * Get the user that owns the Comment
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function comment_User(): BelongsTo
        {
            return $this->belongsTo(User::class, 'user_id', 'id');
        }

        public function ticket_User(){
            return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
        }
    }

