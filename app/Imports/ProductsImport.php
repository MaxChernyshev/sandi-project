<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Instruction;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;


class ProductsImport implements ToCollection, WithStartRow
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

    public function collection(Collection $collection): void
    {

        foreach ($collection as $row) {

            $price = number_format((float)$row[2], 2, '.', '');
            $menu = Menu::where('name', trim($row[3]))->get('id')->first();
//            $menu = Menu::query()->where('name', trim($row[3]))->firstOrFail();
            $category = Category::where('name', trim($row[4]))->get('id')->first();
            $instruction = Instruction::where('title', trim($row[5]))->get('id')->first();

            $data = [
                'name' => $row[0] ?? 'no name',
                'description' => $row[1],
                'price' => $price,
                'menu_id' => $menu->id ?? null,
                'category_id' => $category->id ?? null,
                'instruction_id' => $instruction->id ?? null,
                'weight' => $row[6] ?? null,
                'quantity' => intval($row[7]) ?? null,
            ];

            $product = Product::create($data);

            if (isset($row[8])) {

                $product->image()->create([
                    'product_id' => $product->id,
                    'image_path' => '/storage/products/' . $row[8]
                ]);
            }
        }


    }
}
