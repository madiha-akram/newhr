<?php
use Migrations\AbstractMigration;

class AddforeignkeyToUsers extends AbstractMigration
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
        if ($table->exists() && !$table->hasColumn('dept_id')) {
            $table->addColumn('dept_id', 'integer', ['limit' => 10, 'null' => true , 'default' => null]);
            $table->addForeignKey('dept_id',
                'departments', 'id', ['delete' => 'CASCADE'])
                ->update();
        }
    }
}
