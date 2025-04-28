<?php

namespace App\Http\Resources;
use Wever\Laradot\App\Traits\ResourcePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BeneficiaryResource;
use App\Http\Resources\SalaryChangeResource;
use App\Http\Resources\ConditionResource;

class GroupResource extends JsonResource
{
    use ResourcePaginator;
    public function toArray($request)
    {
        $showPrivate = true;
        $public = [
            'name' => $this->name,
            'salary' => $this->salary,
            'color' => $this->color,
            'beneficiaries' => BeneficiaryResource::collection($this->whenLoaded('beneficiaries')),
            'salaryChanges' => SalaryChangeResource::collection($this->whenLoaded('salaryChanges')),
            'conditions' => ConditionResource::collection($this->whenLoaded('conditions')),
        ];

        return $public;
    }
}
