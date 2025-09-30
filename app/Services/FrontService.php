<?php

namespace App\Services;

use App\Models\Vehicle;
use App\Contracts\VehicleModelRepositoryInterface;
use App\Contracts\VehicleRepositoryInterface;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;

class FrontService{

    protected $vehicleModelRepository;
    protected $vehicleRepository;
    protected $brandRepository;
    protected $categoryRepository;

    public function __construct(
        VehicleRepositoryInterface $vehicleRepository,
        VehicleModelRepositoryInterface $vehicleModelRepository,
        BrandRepository $brandRepository,
        CategoryRepository $categoryRepository){

        $this->vehicleModelRepository = $vehicleModelRepository;
        $this->vehicleRepository = $vehicleRepository;
        $this->brandRepository = $brandRepository;
        $this->categoryRepository = $categoryRepository;


    }

    public function searchVehicleId(int $id){
        return $this->vehicleRepository->findById($id);
    }

    public function searchVehicle(string $term){
        return $this->vehicleRepository->search($term);
    }

    public function searchVehicleModel(string $term){
        return $this->vehicleModelRepository->search($term);
    }

    public function getFrontPageData(){
        $vehicleModels = $this->vehicleModelRepository->getActive();
        $vehicles = $this->vehicleRepository->getAll(6);
        $popularVehicles = $this->vehicleRepository->getPopularVehicles(4);
        $brands = $this->brandRepository->getActive();
        $categories = $this->categoryRepository->getActive();

        // $vehicle = $this->vehicleRepository->find('id');

        return compact('vehicleModels', 'vehicles', 'popularVehicles', 'brands', 'categories');
    }
}

