<?php

declare(strict_types=1);

namespace Yiisoft\ActiveRecord\Tests\Stubs;

use Yiisoft\ActiveRecord\ActiveQuery;

/**
 * Class Item.
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 */
class Item extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'item';
    }

    public function getCategory(): ActiveQuery
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}
