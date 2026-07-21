<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'categoria' => $this->categoria,
            'precio' => $this->precio,
            'stock' => $this->stock,
            'proveedor' => $this->proveedor,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}