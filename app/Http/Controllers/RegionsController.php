<?php

namespace SisCad\Http\Controllers;

use Illuminate\Http\Request;

use SisCad\Http\Requests;
use SisCad\Http\Controllers\Controller;
use SisCad\Repositories\RegionRepository;
use SisCad\Repositories\CityRepository;

class RegionsController extends Controller
{
    private $regionRepository;

    public function __construct(RegionRepository $regionRepository, CityRepository $cityRepository)
    {
        $this->regionRepository = $regionRepository;
        $this->cityRepository = $cityRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
       $regions = $this->regionRepository->allRegions();
       ##dd($regions);

       return view('regions.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    { 
        return view('regions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\RegionRequest $request)
    {
        $input = $request->all();

        $input['code'] = strtoupper($input['code']);
        $input['description'] = strtoupper($input['description']);

        $region = $this->regionRepository->storeRegion($input);
      
        return redirect('regions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $region = $this->regionRepository->findRegionById($id);
        $logs = $region->revisionHistory;
        
        return view('regions.show', compact('region', 'logs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id, RegionRepository $region)
    {
        $region = $this->regionRepository->findRegionById($id);
        
        return view('regions.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\RegionRequest $request, $id)
    {
        $input = $request->all();

        $input['code'] = strtoupper($input['code']);
        $input['description'] = strtoupper($input['description']);
        
        $region = $this->regionRepository->findRegionById($id);
        $region->update($input);

        return redirect('regions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if($this->cityRepository->findCitiesByRegionId($id)->count()>0)
        {
           #return view('errors.destroy_denied');
           return redirect('regions')->withInput()->withErrors(['error' => '<b>Exclusão CANCELADA</b> >> Existe(m) Cidade(s) vinculada(s) ao registro selecionado !']); 
        }

        $this->regionRepository->findRegionById($id)->delete();

        return redirect('regions');
    }
}