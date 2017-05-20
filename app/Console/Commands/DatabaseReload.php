<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class DatabaseReload extends Command {

  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'db:reload {--f}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Drop, migrate and seed database tables';

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle() {
		if (config('app.env') != 'local' && !$this->option('F')) {
			if (!$this->confirm('Are you sure to remove \'reload\' database ?')) {
				return $this->comment('Operation canceled');
			}
		}

		$colname = 'Tables_in_' . env('DB_DATABASE');
    $tables = [];
    foreach (DB::select('SHOW TABLES') as $table) {
      $tables[] = $table->$colname;
    }

		if (!empty($tables)) {
			$tables = implode(',', $tables);
	    DB::beginTransaction();
	    DB::statement('SET FOREIGN_KEY_CHECKS = 0');
	    DB::statement('DROP TABLE ' . $tables);
	    DB::statement('SET FOREIGN_KEY_CHECKS = 0');
	    DB::commit();
	    $this->info('Tables ' . $tables . ' removed.');
		}

		$this->call('migrate', ['--seed' => true]);
  }
}
