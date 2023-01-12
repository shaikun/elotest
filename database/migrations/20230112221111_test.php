<?php
declare(strict_types=1);

include_once 'database/migrations/Migration.php';

use \Database\Migration;

final class Test extends Migration
{
    public function up(): void
    {
        $this->schema->create('languages', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->unique();
        });
    }

    public function down(): void
    {
        $this->schema->dropIfExists('languages');
    }
}
