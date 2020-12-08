<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpClient\HttpClient;
use App\Entity\Product;
use App\Form\Type\ProductType;

class ProductController extends AbstractController {

    protected $session;
    protected $http;

    public function __construct(SessionInterface $session) {
        $this->session = $session;
        $this->http = HttpClient::create();
    }

    /**
     * @Route("/product", name="product")
     */
    public function index(): Response {
        
        if ($this->session->has('username')) {
            
            return $this->render('product/index.html.twig', [
                        'controller_name' => 'ProductController',
            ]);
        } else {
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/product-new", name="product_new")
     */
    public function new(): Response {
        if ($this->session->has('username')) {

            $product = new Product();
            $productForm = $this->createForm(ProductType::class, $product);


            return $this->render('product/new.html.twig', [
                        'controller_name' => 'ProductController',
                        'form' => $productForm->createView()
            ]);
        } else {
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/product-save", name="product_save")
     */
    public function save(Request $request): Response {
        if ($this->session->has('username')) {

            $result = '';
            $product = new Product();
            $productForm = $this->createForm(ProductType::class, $product);
            $productForm->handleRequest($request);

            if ($productForm->isSubmitted() && $productForm->isValid()) {

                $response = $this->http->request(
                        'POST',
                        $this->getParameter('app.api_url').'/save-product',
                        ['body' => $product->toArray()]
                );

                $content = (array) json_decode($response->getContent());

                if (isset($content['success']) && $content['success'] === true) {
                    $result = 'Product successfully added';
                } else {
                    $result = 'An error occured ... please contact an administrator';
                }
            }

            return $this->render('product/new.html.twig', [
                        'controller_name' => 'ProductController',
                        'form' => $productForm->createView(),
                        'result' => $result
            ]);
        } else {
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/product-list/{field}/{direction}", name="product_list", defaults={"field"="productID", "direction"="ASC"})
     */
    public function list($field, $direction): Response {
        if ($this->session->has('username')) {

            $column_sorting = [
                'productID' => 'ASC',
                'productName' => 'ASC',
                'salesQ1' => 'ASC',
                'salesQ2' => 'ASC',
                'salesQ3' => 'ASC',
                'salesQ4' => 'ASC',
                'Total' => 'ASC'
            ];
            
            $products = $this->getProducts();
            $col = array_column($products, $field);
            
            if ($direction === "ASC") {
                array_multisort($col, SORT_ASC, $products);
                $column_sorting[$field] = 'DESC';
            } else {
                array_multisort($col, SORT_DESC, $products);
                $column_sorting[$field] = 'ASC';
            }

            return $this->render('product/list.html.twig', [
                        'controller_name' => 'ProductController',
                        'columns' => $this->getColumns(),
                        'products' => $products,
                        'column_sorting' => $column_sorting
            ]);
        } else {
            return $this->redirectToRoute('login');
        }
    }

    private function getProducts() {
        $response = $this->http->request(
                'GET',
                $this->getParameter('app.api_url').'/products'
        );

        $productsTotal = [];
        $products = json_decode($response->getContent(), true);

        $i = 0;
        foreach ($products as $product) {
            $productsTotal[$i] = $product;
            $total = $productsTotal[$i]['Total'] = $product['salesQ1'] + $product['salesQ2'] + $product['salesQ3'] + $product['salesQ4'];
            $i++;
        }

        return $productsTotal;
    }

    private function getColumns() {
        $response = $this->http->request(
                'GET',
                $this->getParameter('app.api_url').'/product-columns'
        );

        $columnsTotal = [];
        $columns = json_decode($response->getContent(), true);

        $i = 0;
        foreach ($columns as $column) {
            $columnsTotal[$i] = $column;
            if ($column['header'] === "Total sales") {
                $columnsTotal[$i]['field'] = 'Total';
            }
            $i++;
        }
        return $columnsTotal;
    }

}
