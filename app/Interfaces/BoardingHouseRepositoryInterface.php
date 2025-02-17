<?php

namespace App\Interfaces;

interface BoardingHouseRepositoryInterface
{
    public function getAllBoardingHouse($search = null, $city = null, $category = null);

    public function getPopularBoardingHouse($limit = 5);

    public function getBoardingHouseByCitySlug($slug);

    public function getBoardingHouseByCategorySlug($slug);

    public function getBoardingHouseBySlug($slug);

    public function getBoardingHouseRoomById($id);
}
