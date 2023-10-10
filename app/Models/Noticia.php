<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Noticia
 *
 * @property int $news_id
 * @property string $titulo
 * @property string $subTitulo
 * @property string $parrafo
 * @property string|null $img
 * @property string $fecha_creacion
 * @property string $editor
 * @property int $publicado
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereEditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereFechaCreacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereParrafo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia wherePublicado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereSubTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Noticia extends Model
{
    //use HasFactory; DESPUES LO VEMOS

    protected $table = "noticias";
    protected $primaryKey = "news_id";
    protected $fillable = ['titulo', 'subTitulo', 'parrafo', 'img','descripcion_img', 'fecha_creacion', 'editor','topico_id', 'publicado' ];
    
    public function topico(): BelongsTo
    {

        return $this->belongsTo(Topico::class, 'topico_id'/*FK*/, 'topico_id' );

    }


}
