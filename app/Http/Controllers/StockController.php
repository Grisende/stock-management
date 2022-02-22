<?php

namespace App\Http\Controllers;

use App\Domain\Service\StockService;

class StockController extends Controller
{
    private $service;

    public function __construct(StockService $service)
    {
        $this->service = $service;
    }

    public function stockReport()
    {
        $products = $this->service->stockReport();

        return view('reports.stock', compact('products'));
    }

    public function stockReportApi()
    {
        $fileName = 'stock.csv';
        $stock = $this->service->stockReport();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Nome', 'SKU', 'Quantidade');

        $callback = function() use($stock, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($stock as $product) {
                $row['Nome']       = $product['name'];
                $row['SKU']        = $product['sku'];
                $row['Quantidade'] = $product['quantity'];

                fputcsv($file, array($row['Nome'], $row['SKU'], $row['Quantidade']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
