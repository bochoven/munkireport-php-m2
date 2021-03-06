<?php


namespace MrModule\DirectoryService;

use Illuminate\Database\Query\Builder;
use Mr\Scopes\VueTableScope;
use Mr\SerialNumberModel;

class DirectoryService extends SerialNumberModel
{
    protected $table = 'directoryservice';

    protected $fillable = [
        'which_directory_service',
        'directory_service_comments',
        'adforest',
        'addomain',
        'computeraccount',
        'createmobileaccount',
        'requireconfirmation',
        'forcehomeinstartup',
        'mounthomeassharepoint',
        'usewindowsuncpathforhome',
        'networkprotocoltobeused',
        'defaultusershell',
        'mappinguidtoattribute',
        'mappingusergidtoattribute',
        'mappinggroupgidtoattr',
        'generatekerberosauth',
        'preferreddomaincontroller',
        'allowedadmingroups',
        'authenticationfromanydomain',
        'packetsigning',
        'packetencryption',
        'passwordchangeinterval',
        'restrictdynamicdnsupdates',
        'namespacemode'
    ];

    protected $casts = [
        'createmobileaccount' => 'boolean',
        'requireconfirmation' => 'boolean',
        'forcehomeinstartup' => 'boolean',
        'mounthomeassharepoint' => 'boolean',
        'usewindowsuncpathforhome' => 'boolean',

        'generatekerberosauth' => 'boolean',
        'authenticationfromanydomain' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new VueTableScope());
    }

    //// RELATIONSHIPS

    //// SCOPES

    public function scopeBound(Builder $query) {
        return $query->whereIn('which_directory_service', ['Active Directory', 'LDAPv3']);
    }

    public function scopeUnbound(Builder $query) {
        return $query->whereNotIn('which_directory_service', ['Active Directory', 'LDAPv3']);
    }
}