<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PostController
 * @package App\Controller
 * @Route("/api", name="post_api")
 */
class ProductAPIController extends AbstractController {

    /**
     * @Route("/product-columns", name="product_columns", methods={"GET"})
     */
    public function getProductColumns(): JsonResponse {
        return $this->response($this->getJsonData()->column, 200);
    }

    /**
     * @Route("/products", name="products", methods={"GET"})
     */
    public function getProducts(): JsonResponse {
        return $this->response($this->getJsonData()->data, 200);
    }
    
    /**
     * @Route("/save-product", name="save_product", methods={"POST"})
     */
    public function saveProduct(Request $request): JsonResponse {
        return $this->response(["success" => true], 200);
    }
    

    private function getJsonData() {
        return json_decode(file_get_contents(__DIR__ . '/../Data/potato_sales.json'));
    }

    public function response($data, $status = 200, $headers = []) {
        return new JsonResponse($data, $status, $headers);
    }

}
