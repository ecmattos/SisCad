<?php

namespace SisCad;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\Revisionable;
use DB;

class City extends Revisionable
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 9999999; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
    protected $revisionCreationsEnabled = true;
    protected $dontKeepRevisionOf = [];
    #protected $revisionFormattedFields = array('title'  => 'string:<strong>%s</strong>', 'public' => 'boolean:No|Yes', 'deleted_at' => 'isEmpty:Active|Deleted');
    protected $revisionFormattedFieldNames = [
        'state_id' => 'UF', 
        'code' => 'Código', 
        'description' => 'Descrição',
        'region_id' => 'Região', 
        'deleted_at' => 'Excluído'
    ];
    protected $revisionNullString = 'nada';
    protected $revisionUnknownString = 'desconhecido';

    public function identifiableName() 
    {
        return $this->description;
    }

    protected $fillable = [
    	'state_id',
    	'description',
        'region_id'
    ];

    public function state()
    {
        return $this->belongsTo('SisCad\State'); 
    }

    public function region()
    {
        return $this->belongsTo('SisCad\Region'); 
    }

    public function members()
    {
        return $this->hasMany('SisCad\Member'); 
    }

    public function partners()
    {
        return $this->hasMany('SisCad\Partner');
    }

    public function affiliated_societies()
    {
        return $this->hasMany('SisCad\AffiliatedSociety'); 
    }

    #public static function boot()
    #{
    #    parent::boot();

    #    static::deleting(function($city)
    #    {
    #        if($city->members->count()>0)
    #        {
    #            throw new \Exception("Existe(m) Associado(s) vinculado(s) a esta Cidade.");
    #        }

    #        if($city->partners->count()>0)
    #        {
    #            throw new \Exception("Existe(m) Parceiros(s) vinculado(s) a esta Cidade.");
    #        }
    #    });
    #}
}
