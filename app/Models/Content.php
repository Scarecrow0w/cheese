<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Content
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $route
 * @property string $section
 * @property string $type
 * @property string|null $additional_info
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereAdditionalInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereUpdatedAt($value)
 */
class Content extends Model
{
    use HasFactory;

    /**
     * Get content
     *
     * @param  string $route
     * @param  string $section
     * @param  string $type
     * @param  string $additional_info
     * @return null|string
     */
    public function getContent(string $route, string $section, string $type, string $additional_info = ''): ?string
    {
        return $this->where([
            ['route', '=', $route],
            ['section', '=', $section],
            ['type', '=', $type],
        ])->when($additional_info, function($query, $additional_info) {
            $query->whereAdditionalInfo($additional_info);
        })->first()->content;
    }
}
