<?php

namespace SisCad\Repositories;

use SisCad\PatrimonialStatus;

class PatrimonialStatusRepository
{
	
	private $patrimonial_status;

	public function __construct(PatrimonialStatus $patrimonial_status)
	{
		$this->patrimonial_status = $patrimonial_status;
	}

	public function allPatrimonialStatuses()
	{
		return $this->patrimonial_status
			->orderBy('description', 'asc')
			->get();
	}

	public function findPatrimonialStatusById($id)
    {
        return $this->patrimonial_status->find($id);
    }

    public function storePatrimonialStatus($input)
    {
        $patrimonial_status = $this->patrimonial_status->fill($input);
        $patrimonial_status->save();
    }
}