<?php
use Migrations\AbstractMigration;

class AddforeignkeyToProjects extends AbstractMigration
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
        $table = $this->table('projects');
        if ($table->exists() && !$table->hasColumn('user_id')) {
            $table->addColumn('user_id', 'integer', ['limit' => 10, 'null' => true , 'default' => null]);
            $table->addForeignKey('user_id',
                'users', 'id', ['delete' => 'CASCADE'])
                ->update();
        }
    }
}
