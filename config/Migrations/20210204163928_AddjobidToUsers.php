<?php
use Migrations\AbstractMigration;

class AddjobidToUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        if ($table->exists() && !$table->hasColumn('job_id')) {
            $table->addColumn('job_id', 'integer', ['limit' => 10, 'null' => true , 'default' => null]);
            $table->addForeignKey('job_id',
                'jobs', 'id', ['delete' => 'CASCADE'])
                ->update();
        }
    }
}
