<?php

namespace App\Services;

use App\Models\Vehicle;
use App\Contracts\VehicleModelRepositoryInterface;
use App\Contracts\VehicleRepositoryInterface;

class FrontService{

    protected $vehicleModelRepository;
    protected $vehicleRepository;

    public function __construct(VehicleRepositoryInterface $vehicleRepository, VehicleModelRepositoryInterface $vehicleModelRepository){

        $this->vehicleModelRepository = $vehicleModelRepository;
        $this->vehicleRepository = $vehicleRepository;
        
    }

    public function searchVehicle(int $id){
        return $this->vehicleRepository->findById($id);
    }

    public function getFrontPageData(){
        $vehicleModels = $this->vehicleModelRepository->getActive();
        $vehicles = $this->vehicleRepository->getAll();
        // $vehicle = $this->vehicleRepository->find('id');

        return compact('vehicleModels', 'vehicles');
    }
}