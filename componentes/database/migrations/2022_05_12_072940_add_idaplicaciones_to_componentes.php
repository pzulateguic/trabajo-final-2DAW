<!-- <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up(){
        Schema::table('componentes', function (Blueprint $table) {
            $table->integer('idaplicacion');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('componentes', function (Blueprint $table) {
            $table->dropColumn('idaplicacion');
        });
    }
};