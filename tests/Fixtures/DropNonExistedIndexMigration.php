<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Migrations\Fixtures;

use Spiral\Migrations\Migration;

class DropNonExistedIndexMigration extends Migration
{
    public function up(): void
    {
        $this->table('sample')
            ->dropIndex(['column'])
            ->create();
    }

    public function down(): void
    {
    }
}
