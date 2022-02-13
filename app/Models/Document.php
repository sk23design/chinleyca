<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Document extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    public $sortable = [
    'order_column_name' => 'sort',
    'ignore_policies' => true,
    'sort_on_has_many' => true,
  ];

    protected $casts = [
        'expires_at' => 'date',
    ];

    public function information()
    {
        return $this->belongsTo(\App\Models\Information::class, 'information_id', 'id');
    }

    public function getDocType()
    {
        $document = $this->link;
        $doctype = (explode('.', $document));
        $doctype = strtolower(end($doctype));
        switch ($doctype) {
            case 'docx':
            case 'doc':

                return ['doctype' => $document, 'icon' => 'doc.svg'];

            break;
            case 'xls':
                case 'xlsx':

                    return ['doctype' => $document, 'icon' => 'xls.svg'];

                break;
            case 'pdf':

                    return ['doctype' => $document, 'icon' => $doctype.'.svg'];

                break;

            default:

            return ['doctype' => 'NA', 'icon' => 'blank.svg'];
        }
    }
}
