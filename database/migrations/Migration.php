<?php
namespace Database;

require_once(__DIR__ . '/../../resources/bootstrap.php');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Builder;
use Phinx\Migration\AbstractMigration;

class Migration extends AbstractMigration {
    /** @var Capsule $capsule */
    public $capsule;
    /** @var Builder $schema */
    public $schema;

    public static $CAPSULE;

    public function init()  {

        if (self::$CAPSULE) {
            $this->capsule = self::$CAPSULE;
            $this->schema = $this->capsule->schema();
        } else {
            $this->capsule = new Capsule;
            $this->capsule->addConnection(DATABASE);

            $platform = $this->capsule->getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();

            $this->capsule->bootEloquent();
            $this->capsule->setAsGlobal();
            $this->schema = $this->capsule->schema();

            self::$CAPSULE = $this->capsule;
        }
    }
}