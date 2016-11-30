<?php

namespace SisCad\Repositories;

use SisCad\Provider;

class ProviderRepository
{
	
	private $provider;

	public function __construct(Provider $provider)
	{
		$this->provider = $provider;
	}

	public function allProviders()
	{
		return $this->provider
			->orderBy('description', 'asc')
			->get();
	}

	public function findProviderById($id)
    {
        return $this->provider->find($id);
    }

    public function storeProvider($input)
    {
        $provider = $this->provider->fill($input);
        $provider->save();
    }
}