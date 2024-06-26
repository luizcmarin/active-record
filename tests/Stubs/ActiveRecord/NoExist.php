<?php

declare(strict_types=1);

namespace Yiisoft\ActiveRecord\Tests\Stubs\ActiveRecord;

use Yiisoft\ActiveRecord\Tests\Stubs\ActiveRecord;

final class NoExist extends ActiveRecord
{
    public function getTableName(): string
    {
        return 'NoExist';
    }
}
