<?php

namespace SisCad\Http\Controllers;

use Illuminate\Http\Request;

use SisCad\Http\Requests;
use SisCad\Http\Controllers\Controller;
use SisCad\Repositories\PatrimonialRepository;
use SisCad\Repositories\PatrimonialTypeRepository;
use SisCad\Repositories\PatrimonialSubTypeRepository;
use SisCad\Repositories\PatrimonialBrandRepository;
use SisCad\Repositories\PatrimonialModelRepository;
use SisCad\Repositories\ProviderRepository;
use SisCad\Repositories\AffiliatedSocietyRepository;
use SisCad\Repositories\PatrimonialSectorRepository;
use SisCad\Repositories\PatrimonialSubSectorRepository;
use SisCad\Repositories\PatrimonialStatusRepository;
use SisCad\Repositories\PatrimonialMovementRepository;

class PatrimonialsController extends Controller
{
    private $patrimonialRepository;
    private $patrimonial_typeRepository;
    private $patrimonial_sub_typeRepository;
    private $patrimonial_brandRepository;
    private $patrimonial_modelRepository;
    private $providerRepository;
    private $affiliated_societyRepository;
    private $patrimonial_sectorRepository;
    private $patrimonial_sub_sectorRepository;
    private $patrimonial_statusRepository;
    private $patrimonial_movementRepository;


    public function __construct(PatrimonialRepository $patrimonialRepository, PatrimonialTypeRepository $patrimonial_typeRepository, PatrimonialSubTypeRepository $patrimonial_sub_typeRepository, PatrimonialBrandRepository $patrimonial_brandRepository, PatrimonialModelRepository $patrimonial_modelRepository, ProviderRepository $providerRepository, AffiliatedSocietyRepository $affiliated_societyRepository, PatrimonialSectorRepository $patrimonial_sectorRepository, PatrimonialSubSectorRepository $patrimonial_sub_sectorRepository, PatrimonialStatusRepository $patrimonial_statusRepository, PatrimonialMovementRepository $patrimonial_movementRepository)
    {
        $this->patrimonialRepository = $patrimonialRepository;
        $this->patrimonial_typeRepository = $patrimonial_typeRepository;
        $this->patrimonial_sub_typeRepository = $patrimonial_sub_typeRepository;
        $this->patrimonial_brandRepository = $patrimonial_brandRepository;
        $this->patrimonial_modelRepository = $patrimonial_modelRepository;
        $this->providerRepository = $providerRepository;
        $this->affiliated_societyRepository = $affiliated_societyRepository;
        $this->patrimonial_sectorRepository = $patrimonial_sectorRepository;
        $this->patrimonial_sub_sectorRepository = $patrimonial_sub_sectorRepository;
        $this->patrimonial_statusRepository = $patrimonial_statusRepository;
        $this->patrimonial_movementRepository = $patrimonial_movementRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $patrimonials = $this->patrimonialRepository->allPatrimonials();
        #dd($patrimonials);
        return view('patrimonials.index', compact('patrimonials'));
    }

    public function search(PatrimonialTypeRepository $patrimonial_typeRepository, PatrimonialSubTypeRepository $patrimonial_sub_typeRepository, PatrimonialBrandRepository $patrimonial_brandRepository, PatrimonialModelRepository $patrimonial_modelRepository, ProviderRepository $providerRepository, AffiliatedSocietyRepository $affiliated_societyRepository, PatrimonialSectorRepository $patrimonial_sectorRepository, PatrimonialSubSectorRepository $patrimonial_sub_sectorRepository, PatrimonialStatusRepository $patrimonial_statusRepository)
    { 
        session()->forget('srch_patrimonial_code');
        session()->forget('srch_patrimonial_serial');
        session()->forget('srch_patrimonial_type_id');
        session()->forget('srch_patrimonial_sub_type_id');
        session()->forget('srch_patrimonial_brand_id');
        session()->forget('srch_patrimonial_model_id');
        session()->forget('srch_patrimonial_provider_id');
        session()->forget('srch_patrimonial_affiliated_society_id');
        session()->forget('srch_patrimonial_sector_id');
        session()->forget('srch_patrimonial_sub_sector_id');
        session()->forget('srch_patrimonial_status_id');

        $patrimonial_types = array(''=>'') + $patrimonial_typeRepository
            ->allPatrimonialTypes()
            ->lists('description', 'id')
            ->all();

        $patrimonial_sub_types = array(''=>'') + $patrimonial_sub_typeRepository
            ->allPatrimonialSubTypes()
            ->lists('description', 'id')
            ->all();

        $patrimonial_brands = array(''=>'') + $patrimonial_brandRepository
            ->allPatrimonialBrands()
            ->lists('description', 'id')
            ->all();

        $patrimonial_models = array(''=>'') + $patrimonial_modelRepository
            ->allPatrimonialModels()
            ->lists('description', 'id')
            ->all();

        $providers = array(''=>'') + $providerRepository
            ->allProviders()
            ->lists('description', 'id')
            ->all();

        $affiliated_societies = array(''=>'') + $affiliated_societyRepository
            ->allAffiliatedSocieties()
            ->lists('description', 'id')
            ->all();

        $patrimonial_sectors = array(''=>'') + $patrimonial_sectorRepository
            ->allPatrimonialSectors()
            ->lists('description', 'id')
            ->all();

        $patrimonial_sub_sectors = array(''=>'') + $patrimonial_sub_sectorRepository
            ->allPatrimonialSubSectors()
            ->lists('description', 'id')
            ->all();

        $patrimonial_statuses = array(''=>'') + $patrimonial_statusRepository
            ->allPatrimonialStatuses()
            ->lists('description', 'id')
            ->all();

        return view('patrimonials.search', compact('patrimonial_types', 'patrimonial_sub_types', 'patrimonial_brands', 'patrimonial_models', 'providers', 'affiliated_societies', 'patrimonial_sectors', 'patrimonial_sub_sectors', 'patrimonial_statuses'));
    }

    public function search_results(Requests\PatrimonialSearchRequest $request)
    { 
        $input = $request->all();

        $request->flash();

        session(['srch_patrimonial_code'                    => $input['srch_patrimonial_code']]);
        session(['srch_patrimonial_serial'                  => $input['srch_patrimonial_serial']]);
        session(['srch_patrimonial_type_id'                 => $input['srch_patrimonial_type_id']]);
        session(['srch_patrimonial_sub_type_id'             => $input['srch_patrimonial_sub_type_id']]);
        session(['srch_patrimonial_brand_id'                => $input['srch_patrimonial_brand_id']]);
        session(['srch_patrimonial_model_id'                => $input['srch_patrimonial_model_id']]);
        session(['srch_patrimonial_provider_id'             => $input['srch_patrimonial_provider_id']]);
        session(['srch_patrimonial_affiliated_society_id'   => $input['srch_patrimonial_affiliated_society_id']]);
        session(['srch_patrimonial_sector_id'               => $input['srch_patrimonial_sector_id']]);
        session(['srch_patrimonial_sub_sector_id'           => $input['srch_patrimonial_sub_sector_id']]);
        session(['srch_patrimonial_state_id'                => $input['srch_patrimonial_state_id']]);

        $patrimonials = $this->patrimonialRepository->searchPatrimonials();

        return view('patrimonials.search_results', compact('patrimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(PatrimonialTypeRepository $patrimonial_typeRepository, PatrimonialSubTypeRepository $patrimonial_sub_typeRepository, PatrimonialBrandRepository $patrimonial_brandRepository, PatrimonialModelRepository $patrimonial_modelRepository, ProviderRepository $providerRepository, AffiliatedSocietyRepository $affiliated_societyRepository, PatrimonialSectorRepository $patrimonial_sectorRepository, PatrimonialSubSectorRepository $patrimonial_sub_sectorRepository, PatrimonialStatusRepository $patrimonial_statusRepository)
    {
        $patrimonial_types = array(''=>'') + $patrimonial_typeRepository
            ->allPatrimonialTypes()
            ->lists('description', 'id')
            ->all();

        $patrimonial_sub_types = array(''=>'') + $patrimonial_sub_typeRepository
            ->allPatrimonialSubTypes()
            ->lists('description', 'id')
            ->all();

        $patrimonial_brands = array(''=>'') + $patrimonial_brandRepository
            ->allPatrimonialBrands()
            ->lists('description', 'id')
            ->all();

        $patrimonial_models = array(''=>'') + $patrimonial_modelRepository
            ->allPatrimonialModels()
            ->lists('description', 'id')
            ->all();

        $providers = array(''=>'') + $providerRepository
            ->allProviders()
            ->lists('description', 'id')
            ->all();

        $affiliated_societies = array(''=>'') + $affiliated_societyRepository
            ->allAffiliatedSocieties()
            ->lists('description', 'id')
            ->all();

        $patrimonial_sectors = array(''=>'') + $patrimonial_sectorRepository
            ->allPatrimonialSectors()
            ->lists('description', 'id')
            ->all();

        $patrimonial_sub_sectors = array(''=>'') + $patrimonial_sub_sectorRepository
            ->allPatrimonialSubSectors()
            ->lists('description', 'id')
            ->all();

        $patrimonial_statuses = array(''=>'') + $patrimonial_statusRepository
            ->allPatrimonialStatuses()
            ->lists('description', 'id')
            ->all();
        
        return view('patrimonials.create', compact('patrimonial_types', 'patrimonial_sub_types', 'patrimonial_brands', 'patrimonial_models', 'providers', 'affiliated_societies', 'patrimonial_sectors', 'patrimonial_sub_sectors', 'patrimonial_statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\PatrimonialRequest $request)
    {
        $input = $request->all();

        $input['code'] = strtoupper($input['code']);

        $patrimonial_sub_type = $this->patrimonial_sub_typeRepository->findPatrimonialSubTypeById($input['patrimonial_sub_type_id']);
        $patrimonial_brand = $this->patrimonial_brandRepository->findPatrimonialBrandById($input['patrimonial_brand_id']);
        $patrimonial_model = $this->patrimonial_modelRepository->findPatrimonialModelById($input['patrimonial_model_id']);

        $input['description'] = $patrimonial_sub_type->description." ".$patrimonial_brand->description." ".$patrimonial_model->description." ".$input['serial'];

        $input['serial'] = strtoupper($input['serial']);

        $numberFormatter_ptBR2en = new \NumberFormatter('pt_BR', \NumberFormatter::DECIMAL);
        $input['purchase_value'] = $numberFormatter_ptBR2en->parse($input['purchase_value']);
        #dd($input['purchase_value']);

        $input['invoice'] = strtoupper($input['invoice']);

        $input['purchase_date'] = \DateTime::createFromFormat('d/m/Y', $input['purchase_date']);
        $input['purchase_date'] = $input['purchase_date']->format('Y-m-d');

        $input['purchase_process'] = strtoupper($input['purchase_process']);

        $input['patrimonial_status_date'] = \DateTime::createFromFormat('d/m/Y', $input['patrimonial_status_date']);
        $input['patrimonial_status_date'] = $input['patrimonial_status_date']->format('Y-m-d');

        $input['comments'] = strtoupper($input['comments']);

        $patrimonial = $this->patrimonialRepository->storePatrimonial($input);

        $last_patrimonial = $this->patrimonialRepository->allPatrimonialsById()->last();
        $input['patrimonial_id'] = $last_patrimonial->id;
        $patrimonial_movement = $this->patrimonial_movementRepository->storePatrimonialMovement($input);      
    
        return redirect()->route('patrimonials.show', ['id' => $last_patrimonial->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $patrimonial = $this->patrimonialRepository->findPatrimonialById($id);
        $patrimonial_movements = $this->patrimonial_movementRepository->allPatrimonialMovementsByPatrimonialId($id);
        $patrimonial_movement_date_last = $this->patrimonial_movementRepository->lastPatrimonialMovementDateByPatrimonialId($id);
        #dd($patrimonial_movement_date_last->id);

        $logs = $patrimonial->revisionHistory;

        return view('patrimonials.show', compact('patrimonial', 'patrimonial_movements', 'patrimonial_movement_date_last', 'logs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id, PatrimonialTypeRepository $patrimonial_typeRepository, PatrimonialSubTypeRepository $patrimonial_sub_typeRepository, PatrimonialBrandRepository $patrimonial_brandRepository, PatrimonialModelRepository $patrimonial_modelRepository, ProviderRepository $providerRepository)
    {
        $patrimonial_types = array(''=>'') + $patrimonial_typeRepository
            ->allPatrimonialTypes()
            ->lists('description', 'id')
            ->all();

        $patrimonial_sub_types = array(''=>'') + $patrimonial_sub_typeRepository
            ->allPatrimonialSubTypes()
            ->lists('description', 'id')
            ->all();

        $patrimonial_brands = array(''=>'') + $patrimonial_brandRepository
            ->allPatrimonialBrands()
            ->lists('description', 'id')
            ->all();

        $patrimonial_models = array(''=>'') + $patrimonial_modelRepository
            ->allPatrimonialModels()
            ->lists('description', 'id')
            ->all();

        $providers = array(''=>'') + $providerRepository
            ->allProviders()
            ->lists('description', 'id')
            ->all();

        $patrimonial = $this->patrimonialRepository->findPatrimonialById($id);
        
        return view('patrimonials.edit', compact('patrimonial', 'patrimonial_types', 'patrimonial_sub_types', 'patrimonial_brands', 'patrimonial_models', 'providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Requests\PatrimonialUpdateRequest $request)
    {
        $input = $request->all();

        $input['code'] = strtoupper($input['code']);

        $patrimonial_sub_type = $this->patrimonial_sub_typeRepository->findPatrimonialSubTypeById($input['patrimonial_sub_type_id']);
        $patrimonial_brand = $this->patrimonial_brandRepository->findPatrimonialBrandById($input['patrimonial_brand_id']);
        $patrimonial_model = $this->patrimonial_modelRepository->findPatrimonialModelById($input['patrimonial_model_id']);

        $input['description'] = $patrimonial_sub_type->description." ".$patrimonial_brand->description." ".$patrimonial_model->description." ".$input['serial'];

        $input['serial'] = strtoupper($input['serial']);

        $numberFormatter_ptBR2en = new \NumberFormatter('pt_BR', \NumberFormatter::DECIMAL);
        $input['purchase_value'] = $numberFormatter_ptBR2en->parse($input['purchase_value']);
        #dd($input['purchase_value']);

        $input['invoice'] = strtoupper($input['invoice']);

        $input['purchase_date'] = \DateTime::createFromFormat('d/m/Y', $input['purchase_date']);
        $input['purchase_date'] = $input['purchase_date']->format('Y-m-d');

        $input['purchase_process'] = strtoupper($input['purchase_process']);

        $input['patrimonial_status_date'] = \DateTime::createFromFormat('d/m/Y', $input['patrimonial_status_date']);
        $input['patrimonial_status_date'] = $input['patrimonial_status_date']->format('Y-m-d');

        $input['comments'] = strtoupper($input['comments']);

        $patrimonial = $this->patrimonialRepository->findPatrimonialById($id);
        $patrimonial->update($input);

        return redirect()->route('patrimonials.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if($this->memberRepository->findMembersByPatrimonialId($id)->count()>0)
        {
           return redirect('patrimonials')->withInput()->withErrors(['error' => '<b>Exclusão CANCELADA</b> >> Existe(m) Associado(s) vinculado(s) ao registro selecionado !']); 
        }

        $this->patrimonialRepository->findPatrimonialById($id)->delete();

        return redirect('patrimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function restore($id)
    {
        $this->patrimonialRepository->withTrashed()->findPatrimonialById($id)->restore();

        return redirect('patrimonials');
    }
}
