<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use YaangVu\LaravelBase\Controllers\BaseController;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->service = new ProductService();
        parent::__construct();
    }

    public function getViaTypeProductId(Request $request, $typeId): JsonResponse
    {
        return response()->json($this->service->getViaTypeProductId($request, $typeId));
    }

    public function getProduct(Request $request): JsonResponse
    {
        return response()->json($this->service->getProduct());
    }

    /**
     * @throws Exception
     */
    public function createProduct(Request $request): JsonResponse
    {
        return response()->json($this->service->createProduct($request));
    }

    /**
     * @throws Exception
     */
    public function updateViaProductId(Request $request, $productId): JsonResponse
    {
        return response()->json($this->service->updateViaProductId($request, $productId));
    }

    /**
     * @throws Exception
     */
    public function deleteViaProductId(Request $request, $productId): JsonResponse
    {
        return response()->json($this->service->deleteViaProductId($request,$productId));
    }
}
