<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Instruction;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ProductsImport implements ToCollection, WithStartRow
//    , ToModel
{

    private $product = 0;
    private $categories;
    private $instructions;

    public function startRow(): int
    {
        return 2;
    }

    /**
     * @param Collection $collection
     */

    public function collection(Collection $collection)
    {

//        Schema::disableForeignKeyConstraints('ingredient_product_product_id_foreign');
//
//        Product::truncate();
        foreach ($collection as $row) {

//            if (isset($row[7])) {
//                dump('YES');
//            }
//            else {
//                dump('NO');
//            }
//            dump($row);
            $category = Category::where('name', $row[2])->get('id')->first();

            $instruction = Instruction::where('title', $row[3])->get('id')->first();

            $data = [
                'name' => $row[0] ?? 'no name',
                'description' => $row[1],
                'category_id' => $category->id ?? null,
                'instruction_id' => $instruction->id ?? null,
                'weight' => $row[4],
                'quantity' => intval($row[5]),
            ];

            $product = Product::create($data);

            if (isset($row[7])) {

//                $image = $imageService->uploadImage($request->image, $tableName);

                $product->image()->create([
                    'product_id' => $product->id,
                    'image_path' => '/storage/products/' . $row[7]
                ]);
            }

        }
//        dd();

//        Schema::enableForeignKeyConstraints('ingredient_product_product_id_foreign');
    }

//    public function model(array $row)
//    {
//    }


}
