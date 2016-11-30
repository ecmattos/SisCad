<?php

namespace SisCad\Repositories;

use SisCad\City;

class CityRepository
{
	
	private $city;

	public function __construct(City $city)
	{
		$this->city = $city;
	}

	public function allCities()
	{
		return $this->city
			->orderBy('description', 'asc')
			->get();
	}

	public function findCityById($id)
    {
        return $this->city->find($id);
    }

    public function storeCity($input)
    {
        $city = $this->city->fill($input);
        $city->save();
    }

    public function findCitiesByStateId($id)
    {
        return $this->city
            ->whereStateId($id)
            ->orderBy('description', 'asc')
            ->get();
    }

    public function findCitiesByRegionId($id)
    {
        return $this->city
            ->whereRegionId($id)
            ->orderBy('description', 'asc')
            ->get();
    }

    #public function SearchCityByCodNome($search_cod_nome)
    #{
        #if ($search_cod_nome!=null)
        #    {
        #        return $this->city
        #        	->where('code', 'LIKE', "%$search_cod_nome%")
        #        	->orwhere('description', 'LIKE', "%$search_cod_nome%")
        #            ->orderBy('description', 'asc')
        #            ->get();
        #    }
    #}
}